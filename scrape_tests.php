<?php

/**
 * Standalone script to scrape tests from dnalabskenya.com/test-list/
 * Run with: php scrape_tests.php
 */

function fetchUrl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200) {
        throw new Exception("HTTP Error: {$httpCode}");
    }
    
    return $html;
}

$baseUrl = 'https://dnalabskenya.com/test-list/';
$tests = [];
$page = 1;
$maxPages = 34;

echo "Starting to scrape tests...\n";

// Check if cURL is available
if (!function_exists('curl_init')) {
    die("cURL extension is required. Please install php-curl.\n");
}

function extractTestData($product, $xpath) {
    $test = [];
    
    // Extract title from the title div (more specific)
    $titleDiv = $xpath->query(".//div[contains(@class, 'woocommerce-loop-product__title')]//a", $product);
    if ($titleDiv->length > 0) {
        $test['title'] = trim($titleDiv->item(0)->textContent);
        $test['url'] = $titleDiv->item(0)->getAttribute('href');
    } else {
        // Fallback to any link with the class
        $titleLink = $xpath->query(".//a[contains(@class, 'woocommerce-loop-product__link')]", $product);
        if ($titleLink->length > 0) {
            $test['title'] = trim($titleLink->item(0)->textContent);
            $test['url'] = $titleLink->item(0)->getAttribute('href');
        }
    }
    
    // Extract slug from URL
    if (!empty($test['url'])) {
        $urlParts = parse_url($test['url']);
        $path = trim($urlParts['path'] ?? '', '/');
        $pathParts = explode('/', $path);
        $test['slug'] = end($pathParts);
    }
    
    // Extract category
    $categoryLink = $xpath->query(".//p[contains(@class, 'product__categories')]//a", $product);
    if ($categoryLink->length > 0) {
        $test['category'] = trim($categoryLink->item(0)->textContent);
    }
    
    // Extract prices
    $priceDel = $xpath->query(".//del//span[contains(@class, 'woocommerce-Price-amount')]//bdi", $product);
    if ($priceDel->length > 0) {
        $originalPriceText = trim($priceDel->item(0)->textContent);
        $originalPriceText = preg_replace('/[^0-9,]/', '', $originalPriceText);
        $originalPriceText = str_replace(',', '', $originalPriceText);
        $test['original_price'] = !empty($originalPriceText) ? (float)$originalPriceText : null;
    }
    
    $priceIns = $xpath->query(".//ins//span[contains(@class, 'woocommerce-Price-amount')]//bdi", $product);
    if ($priceIns->length > 0) {
        $currentPriceText = trim($priceIns->item(0)->textContent);
        $currentPriceText = preg_replace('/[^0-9,]/', '', $currentPriceText);
        $currentPriceText = str_replace(',', '', $currentPriceText);
        $test['current_price'] = !empty($currentPriceText) ? (float)$currentPriceText : null;
    }
    
    // Extract discount percentage
    $discountLabel = $xpath->query(".//span[contains(@class, 'sale-item')]", $product);
    if ($discountLabel->length > 0) {
        $discountText = trim($discountLabel->item(0)->textContent);
        $discountText = preg_replace('/[^0-9]/', '', $discountText);
        $test['discount_percentage'] = !empty($discountText) ? (int)$discountText : null;
    }
    
    // Extract image URL
    $image = $xpath->query(".//img[contains(@class, 'attachment-woocommerce_thumbnail')]", $product);
    if ($image->length > 0) {
        $test['image_url'] = $image->item(0)->getAttribute('src');
        if (empty($test['image_url'])) {
            $test['image_url'] = $image->item(0)->getAttribute('data-lazy-src');
        }
        if (empty($test['image_url'])) {
            $test['image_url'] = $image->item(0)->getAttribute('data-src');
        }
    }
    
    // Extract product ID and SKU from add to cart button
    $addToCartButton = $xpath->query(".//a[contains(@class, 'add_to_cart_button')]", $product);
    if ($addToCartButton->length > 0) {
        $test['product_id'] = $addToCartButton->item(0)->getAttribute('data-product_id');
        $test['sku'] = $addToCartButton->item(0)->getAttribute('data-product_sku');
    }
    
    return $test;
}

try {
    while ($page <= $maxPages) {
        $url = $page === 1 ? $baseUrl : $baseUrl . "page/{$page}/";
        echo "Scraping page {$page}...\n";
        
        $html = fetchUrl($url);
        
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="UTF-8">' . $html);
        $xpath = new DOMXPath($dom);
        
        // Find all product list items
        $products = $xpath->query("//li[contains(@class, 'product')]");
        
        if ($products->length === 0) {
            echo "No products found on page {$page}, stopping...\n";
            break;
        }
        
        echo "Found {$products->length} products on page {$page}\n";
        
        foreach ($products as $product) {
            $test = extractTestData($product, $xpath);
            if (!empty($test['title'])) {
                $tests[] = $test;
            }
        }
        
        // Check if there's a next page
        $nextPage = $xpath->query("//a[contains(@class, 'next') and contains(@class, 'page-numbers')]", $dom);
        if ($nextPage->length === 0) {
            break;
        }
        
        $page++;
        
        // Add a small delay to be respectful
        usleep(500000); // 0.5 seconds
    }
    
    echo "Successfully scraped " . count($tests) . " tests from " . ($page - 1) . " pages\n";
    
    // Generate seeder content
    $seederPath = __DIR__ . '/database/seeders/TestSeeder.php';
    
    $content = "<?php\n\n";
    $content .= "namespace Database\\Seeders;\n\n";
    $content .= "use Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents;\n";
    $content .= "use Illuminate\\Database\\Seeder;\n";
    $content .= "use Illuminate\\Support\\Facades\\DB;\n\n";
    $content .= "class TestSeeder extends Seeder\n";
    $content .= "{\n";
    $content .= "    /**\n";
    $content .= "     * Run the database seeds.\n";
    $content .= "     */\n";
    $content .= "    public function run(): void\n";
    $content .= "    {\n";
    $content .= "        \$tests = [\n";
    
    foreach ($tests as $test) {
        $content .= "            [\n";
        $content .= "                'title' => " . var_export($test['title'] ?? null, true) . ",\n";
        $content .= "                'slug' => " . var_export($test['slug'] ?? null, true) . ",\n";
        $content .= "                'category' => " . var_export($test['category'] ?? null, true) . ",\n";
        $content .= "                'original_price' => " . (isset($test['original_price']) && $test['original_price'] !== null ? $test['original_price'] : 'null') . ",\n";
        $content .= "                'current_price' => " . (isset($test['current_price']) && $test['current_price'] !== null ? $test['current_price'] : 'null') . ",\n";
        $content .= "                'discount_percentage' => " . (isset($test['discount_percentage']) && $test['discount_percentage'] !== null ? $test['discount_percentage'] : 'null') . ",\n";
        $content .= "                'image_url' => " . var_export($test['image_url'] ?? null, true) . ",\n";
        $content .= "                'product_id' => " . var_export($test['product_id'] ?? null, true) . ",\n";
        $content .= "                'sku' => " . var_export($test['sku'] ?? null, true) . ",\n";
        $content .= "                'url' => " . var_export($test['url'] ?? null, true) . ",\n";
        $content .= "                'created_at' => now(),\n";
        $content .= "                'updated_at' => now(),\n";
        $content .= "            ],\n";
    }
    
    $content .= "        ];\n\n";
    $content .= "        DB::table('tests')->insert(\$tests);\n";
    $content .= "    }\n";
    $content .= "}\n";
    
    file_put_contents($seederPath, $content);
    
    echo "Seeder file generated at: {$seederPath}\n";
    echo "Total tests scraped: " . count($tests) . "\n";
    
} catch (\Exception $e) {
    echo "Error scraping: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
    exit(1);
}
