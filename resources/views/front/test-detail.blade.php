@extends('front.master')

@php
    $testUrl = url('/test/' . $test->slug);
    $testImage = $test->image_url ? (str_starts_with($test->image_url, 'http') ? $test->image_url : asset($test->image_url)) : asset('uploads/logo/logo.png');
    $testDescription = "Book {$test->title} at Biopassion Diagnostics. {$test->category} test with accurate results. Price: KSh " . number_format($test->current_price ?? 0, 2) . ". Call +254 704 150555 to book.";
@endphp

@section('seo')
<title>{{ $test->title }} - {{ $test->category }} Test | Biopassion Diagnostics Kenya</title>
<meta name="title" content="{{ $test->title }} - {{ $test->category }} Test | Biopassion Diagnostics">
<meta name="description" content="{{ $testDescription }}">
<meta name="keywords" content="{{ $test->title }}, {{ $test->category }}, diagnostic test, medical test Kenya, Biopassion Diagnostics, laboratory test {{ $test->category }}, {{ str_replace(',', ', ', $test->category) }}">
<meta name="robots" content="index, follow">
<meta name="author" content="Biopassion Diagnostics">
<link rel="canonical" href="{{ $testUrl }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="product">
<meta property="og:url" content="{{ $testUrl }}">
<meta property="og:title" content="{{ $test->title }} - {{ $test->category }} Test | Biopassion Diagnostics">
<meta property="og:description" content="{{ $testDescription }}">
<meta property="og:image" content="{{ $testImage }}">
<meta property="og:site_name" content="Biopassion Diagnostics Medical Laboratory Center">
<meta property="og:locale" content="en_US">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $testUrl }}">
<meta name="twitter:title" content="{{ $test->title }} - {{ $test->category }} Test">
<meta name="twitter:description" content="{{ $testDescription }}">
<meta name="twitter:image" content="{{ $testImage }}">
<meta name="twitter:site" content="@biopassiondiag1">

<!-- Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalTest",
  "name": "{{ $test->title }}",
  "description": "{{ $testDescription }}",
  "url": "{{ $testUrl }}",
  "image": "{{ $testImage }}",
  "category": "{{ $test->category }}",
  "provider": {
    "@type": "MedicalOrganization",
    "name": "Biopassion Diagnostics",
    "url": "{{ url('/') }}",
    "telephone": "+254704150555",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Medical Laboratory, Nairobi Kenya, Gachie, Riva at Sunset stage",
      "addressLocality": "Nairobi",
      "addressCountry": "KE"
    }
  },
  @if($test->current_price)
  "offers": {
    "@type": "Offer",
    "price": "{{ $test->current_price }}",
    "priceCurrency": "KES",
    @if($test->original_price && $test->original_price > $test->current_price)
    "priceSpecification": {
      "@type": "UnitPriceSpecification",
      "price": "{{ $test->current_price }}",
      "priceCurrency": "KES",
      "referenceQuantity": {
        "@type": "QuantitativeValue",
        "value": 1
      }
    },
    "priceValidUntil": "{{ date('Y-m-d', strtotime('+1 year')) }}",
    @endif
    "availability": "https://schema.org/InStock",
    "url": "{{ $testUrl }}"
  },
  @endif
  "medicalCode": {
    "@type": "MedicalCode",
    "codeValue": "{{ $test->sku ?? $test->product_id }}",
    "codingSystem": "SKU"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ url('/') }}"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Test List",
      "item": "{{ route('test-lists') }}"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "{{ $test->title }}",
      "item": "{{ $testUrl }}"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Biopassion Diagnostics",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('uploads/logo/logo.png') }}",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+254-704-150555",
    "contactType": "Customer Service",
    "areaServed": "KE",
    "availableLanguage": "English"
  },
  "sameAs": [
    "https://www.facebook.com/biopassiondiagnostics",
    "https://twitter.com/biopassiondiag1"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the {{ $test->title }}?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The {{ $test->title }} is a comprehensive diagnostic test offered by Biopassion Diagnostics for {{ strtolower($test->category) }}. It provides accurate and reliable results to help healthcare providers make informed decisions about patient care."
      }
    },
    {
      "@type": "Question",
      "name": "How much does the {{ $test->title }} cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "@if($test->current_price)The {{ $test->title }} costs KSh {{ number_format($test->current_price, 2) }}@if($test->original_price && $test->original_price > $test->current_price) (discounted from KSh {{ number_format($test->original_price, 2) }})@endif. Contact us at +254 704 150555 for booking and more information.@elsePlease contact Biopassion Diagnostics at +254 704 150555 for pricing information on the {{ $test->title }}.@endif"
      }
    },
    {
      "@type": "Question",
      "name": "How do I book the {{ $test->title }}?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can book the {{ $test->title }} by calling +254 704 150555, WhatsApp us, or booking online through our website. We offer home sample collection services across Kenya for your convenience."
      }
    },
    {
      "@type": "Question",
      "name": "Where can I get the {{ $test->title }} in Kenya?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Biopassion Diagnostics offers the {{ $test->title }} at our laboratory in Nairobi, Kenya (Gachie, Riva at Sunset stage). We also provide home sample collection services across Kenya. Call +254 704 150555 to schedule your test."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url('{{asset('theme/assets/images/background/3.jpg')}}')">
    <div class="auto-container">
        <h2>{{ $test->title }}</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{ route('test-lists') }}">Test List</a></li>
            <li>{{ $test->title }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Test Detail Section -->
<section class="test-detail-section" style="padding: 80px 0;">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Test Header -->
                    <div class="test-header" style="margin-bottom: 30px;">
                        <div class="test-category" style="color: #0066cc; font-weight: 600; margin-bottom: 10px; text-transform: uppercase; font-size: 14px;">
                            {{ $test->category }}
                        </div>
                        <h1 style="font-size: 36px; margin-bottom: 20px; color: #333;">{{ $test->title }}</h1>
                        
                        <!-- Pricing -->
                        <div class="test-pricing" style="margin-bottom: 30px; padding: 20px; background: #f8f9fa; border-radius: 8px;">
                            @if($test->current_price)
                                <div style="display: flex; align-items: center; gap: 15px; flex-wrap: wrap;">
                                    @if($test->original_price && $test->original_price > $test->current_price)
                                        <div>
                                            <span style="text-decoration: line-through; color: #999; font-size: 18px;">KSh {{ number_format($test->original_price, 2) }}</span>
                                            <span style="color: #333; font-size: 14px; margin-left: 10px;">Original price</span>
                                        </div>
                                    @endif
                                    <div>
                                        <span style="font-size: 32px; font-weight: bold; color: #28a745;">KSh {{ number_format($test->current_price, 2) }}</span>
                                        <span style="color: #333; font-size: 14px; margin-left: 10px;">Current price</span>
                                    </div>
                                    @if($test->discount_percentage)
                                        <div>
                                            <span style="background: #dc3545; color: white; padding: 8px 15px; border-radius: 5px; font-weight: 600; font-size: 16px;">
                                                -{{ $test->discount_percentage }}%
                                            </span>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div>
                                    <span style="font-size: 24px; font-weight: bold; color: #333;">Price on request</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Test Description -->
                    <article class="test-description" style="margin-bottom: 40px;" itemscope itemtype="https://schema.org/MedicalTest">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">Introduction to the {{ $test->title }}</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;" itemprop="description">
                            The <strong>{{ $test->title }}</strong> is a comprehensive diagnostic test offered by Biopassion Diagnostics, designed to provide accurate and reliable results for {{ strtolower($test->category) }}. This advanced testing method is essential for healthcare professionals and patients seeking detailed insights into their health status.
                        </p>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            At Biopassion Diagnostics, we understand the importance of precise diagnostic testing in making informed healthcare decisions. Our state-of-the-art laboratory facilities and experienced team ensure that every test is conducted with the highest standards of accuracy and reliability.
                        </p>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            Located in Nairobi, Kenya, Biopassion Diagnostics is a leading medical laboratory center specializing in {{ strtolower($test->category) }} and other diagnostic services. We serve patients and healthcare providers across Kenya with convenient locations and home sample collection services.
                        </p>
                    </article>

                    <!-- What the Test Measures -->
                    <section class="test-measures" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">What the {{ $test->title }} Measures</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            The <strong>{{ $test->title }}</strong> measures specific biomarkers, genetic markers, or diagnostic parameters relevant to {{ strtolower($test->category) }}. This test provides detailed information that helps healthcare providers:
                        </p>
                        <ul style="font-size: 16px; line-height: 1.8; color: #666; margin-left: 20px; margin-bottom: 15px;">
                            <li>Identify potential health conditions or risk factors</li>
                            <li>Monitor treatment effectiveness</li>
                            <li>Guide personalized treatment plans</li>
                            <li>Support preventive healthcare strategies</li>
                        </ul>
                    </section>

                    <!-- Who Should Consider This Test -->
                    <section class="test-audience" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">Who Should Consider the {{ $test->title }}?</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            Individuals who may benefit from the <strong>{{ $test->title }}</strong> include:
                        </p>
                        <ul style="font-size: 16px; line-height: 1.8; color: #666; margin-left: 20px; margin-bottom: 15px;">
                            <li>Patients with symptoms or conditions related to {{ strtolower($test->category) }}</li>
                            <li>Individuals with a family history of related health conditions</li>
                            <li>Healthcare providers seeking comprehensive diagnostic information</li>
                            <li>Patients requiring monitoring or follow-up testing</li>
                            <li>Individuals interested in preventive health screening</li>
                        </ul>
                    </section>

                    <!-- Benefits -->
                    <section class="test-benefits" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">Benefits of Taking the {{ $test->title }}</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            Undergoing the <strong>{{ $test->title }}</strong> offers several advantages:
                        </p>
                        <ul style="font-size: 16px; line-height: 1.8; color: #666; margin-left: 20px; margin-bottom: 15px;">
                            <li><strong>Accurate and Reliable Results:</strong> Our advanced laboratory technology ensures precise and dependable test results</li>
                            <li><strong>Early Detection:</strong> Identify potential health issues before they become more serious</li>
                            <li><strong>Personalized Care:</strong> Results help guide individualized treatment plans tailored to your specific needs</li>
                            <li><strong>Professional Support:</strong> Our team of experts is available to help interpret results and answer questions</li>
                            <li><strong>Convenient Service:</strong> We offer home sample collection and multiple service locations across Kenya</li>
                        </ul>
                    </section>

                    <!-- Understanding Results -->
                    <section class="test-results" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">Understanding Your {{ $test->title }} Results</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            Results from the <strong>{{ $test->title }}</strong> will provide valuable insights into your health status. Our experienced healthcare professionals will help interpret the findings, explaining any significant results and their implications for your health and treatment options.
                        </p>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            All test results are delivered in a clear, comprehensive format that is easy to understand. If you have any questions about your results, our team is available to provide guidance and support.
                        </p>
                    </section>

                    <!-- Test Pricing Table -->
                    <div class="test-pricing-table" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">Test Pricing</h2>
                        <div style="overflow-x: auto;">
                            <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                                <thead>
                                    <tr style="background: #0066cc; color: white;">
                                        <th style="padding: 15px; text-align: left; border: 1px solid #ddd;">Test Name</th>
                                        <th style="padding: 15px; text-align: center; border: 1px solid #ddd;">Discount Price</th>
                                        @if($test->original_price && $test->original_price > $test->current_price)
                                            <th style="padding: 15px; text-align: center; border: 1px solid #ddd;">Regular Price</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 15px; border: 1px solid #ddd;">{{ $test->title }}</td>
                                        <td style="padding: 15px; text-align: center; border: 1px solid #ddd; font-weight: bold; color: #28a745;">
                                            @if($test->current_price)
                                                KSh {{ number_format($test->current_price, 2) }}
                                            @else
                                                Price on request
                                            @endif
                                        </td>
                                        @if($test->original_price && $test->original_price > $test->current_price)
                                            <td style="padding: 15px; text-align: center; border: 1px solid #ddd; text-decoration: line-through; color: #999;">
                                                KSh {{ number_format($test->original_price, 2) }}
                                            </td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Book Your Test CTA -->
                    <div class="book-test-cta" style="margin-bottom: 40px; padding: 30px; background: linear-gradient(135deg, #0066cc 0%, #004499 100%); border-radius: 10px; text-align: center; color: white;">
                        <h2 style="font-size: 32px; margin-bottom: 15px; color: white;">Book Your Test Today!</h2>
                        <p style="font-size: 18px; margin-bottom: 25px; color: white;">
                            We have branches across Kenya and offer a convenient booking process. To schedule your {{ $test->title }}, please call or WhatsApp us at:
                        </p>
                        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 20px;">
                            <a href="tel:+254704150555" style="padding: 15px 30px; background: white; color: #0066cc; text-decoration: none; border-radius: 5px; font-weight: 600; font-size: 18px; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                                <i class="fa fa-phone"></i> Call: +254 704 150555
                            </a>
                            <a href="https://wa.me/254704150555?text=Hello%2C%20I%20would%20like%20to%20book%20the%20{{ urlencode($test->title) }}%20test" target="_blank" style="padding: 15px 30px; background: #25D366; color: white; text-decoration: none; border-radius: 5px; font-weight: 600; font-size: 18px; display: inline-flex; align-items: center; gap: 10px; transition: all 0.3s ease;">
                                <i class="fab fa-whatsapp"></i> WhatsApp Now
                            </a>
                        </div>
                        <p style="font-size: 16px; color: white; margin-top: 20px;">
                            Take the first step towards understanding your health with Biopassion Diagnostics!
                        </p>
                    </div>

                    <!-- Quality Assurance -->
                    <div class="quality-assurance" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">ISO-Level Quality for Every Test</h2>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom: 20px;">
                                <div style="padding: 20px; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                    <h4 style="color: #0066cc; margin-bottom: 10px;"><i class="fa fa-check-circle"></i> Accurate, Clinician-Ready Test Reports</h4>
                                    <p style="color: #666; font-size: 14px;">Our reports are designed for healthcare professionals and provide comprehensive, actionable insights.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom: 20px;">
                                <div style="padding: 20px; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                    <h4 style="color: #0066cc; margin-bottom: 10px;"><i class="fa fa-shield-alt"></i> Advanced Testing Assurance</h4>
                                    <p style="color: #666; font-size: 14px;">State-of-the-art technology and rigorous quality control ensure reliable results you can trust.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom: 20px;">
                                <div style="padding: 20px; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                    <h4 style="color: #0066cc; margin-bottom: 10px;"><i class="fa fa-user-md"></i> Expert Support Always</h4>
                                    <p style="color: #666; font-size: 14px;">Our team of specialists is available to provide guidance and answer your questions.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom: 20px;">
                                <div style="padding: 20px; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                    <h4 style="color: #0066cc; margin-bottom: 10px;"><i class="fa fa-clock"></i> Fast & Reliable Results</h4>
                                    <p style="color: #666; font-size: 14px;">Quick turnaround times without compromising on accuracy or quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($test->sku)
                        <div style="margin-bottom: 20px; padding: 15px; background: #f8f9fa; border-radius: 5px;">
                            <p style="margin: 0; color: #666; font-size: 14px;">
                                <strong>SKU:</strong> {{ $test->sku }} | 
                                <strong>Category:</strong> {{ $test->category }}
                            </p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                <div class="sidebar-inner">
                    <!-- Quick Book Widget -->
                    <div class="sidebar-widget" style="background: #f8f9fa; padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                        <h3 style="font-size: 24px; margin-bottom: 20px; color: #333;">Quick Book</h3>
                        <p style="color: #666; margin-bottom: 20px;">Ready to book this test? Contact us now!</p>
                        <div style="margin-bottom: 15px;">
                            <a href="tel:+254704150555" style="display: block; padding: 12px 20px; background: #0066cc; color: white; text-decoration: none; border-radius: 5px; text-align: center; margin-bottom: 10px; font-weight: 600;">
                                <i class="fa fa-phone"></i> Call: +254 704 150555
                            </a>
                            <a href="https://wa.me/254704150555?text=Hello%2C%20I%20would%20like%20to%20book%20the%20{{ urlencode($test->title) }}%20test" target="_blank" style="display: block; padding: 12px 20px; background: #25D366; color: white; text-decoration: none; border-radius: 5px; text-align: center; font-weight: 600;">
                                <i class="fab fa-whatsapp"></i> WhatsApp Us
                            </a>
                        </div>
                        <a href="{{ route('book-test', $test->slug) }}" style="display: block; padding: 15px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px; text-align: center; font-weight: 600; font-size: 16px; margin-top: 15px;">
                            Book Online Now
                        </a>
                    </div>

                    <!-- Test Info Widget -->
                    <div class="sidebar-widget" style="background: #f8f9fa; padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                        <h3 style="font-size: 24px; margin-bottom: 20px; color: #333;">Test Information</h3>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding: 10px 0; border-bottom: 1px solid #ddd;">
                                <strong style="color: #333;">Category:</strong> 
                                <span style="color: #666;">{{ $test->category }}</span>
                            </li>
                            @if($test->current_price)
                                <li style="padding: 10px 0; border-bottom: 1px solid #ddd;">
                                    <strong style="color: #333;">Price:</strong> 
                                    <span style="color: #28a745; font-weight: bold;">KSh {{ number_format($test->current_price, 2) }}</span>
                                </li>
                            @endif
                            @if($test->discount_percentage)
                                <li style="padding: 10px 0; border-bottom: 1px solid #ddd;">
                                    <strong style="color: #333;">Discount:</strong> 
                                    <span style="color: #dc3545; font-weight: bold;">{{ $test->discount_percentage }}% OFF</span>
                                </li>
                            @endif
                            @if($test->sku)
                                <li style="padding: 10px 0;">
                                    <strong style="color: #333;">SKU:</strong> 
                                    <span style="color: #666;">{{ $test->sku }}</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Tests -->
        @if($relatedTests->count() > 0)
            <div class="related-tests" style="margin-top: 60px;">
                <h2 style="font-size: 32px; margin-bottom: 30px; text-align: center; color: #333;">Related Tests</h2>
                <div class="row clearfix">
                    @foreach($relatedTests as $relatedTest)
                        <div class="col-lg-3 col-md-6 col-sm-12" style="margin-bottom: 30px;">
                            <div style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; height: 100%; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
                                <h4 style="font-size: 16px; margin-bottom: 15px; color: #333;">
                                    <a href="{{ route('test-detail', $relatedTest->slug) }}" style="color: #0066cc; text-decoration: none;">
                                        {{ Str::limit($relatedTest->title, 60) }}
                                    </a>
                                </h4>
                                @if($relatedTest->current_price)
                                    <div style="margin-top: 15px;">
                                        <span style="font-size: 20px; font-weight: bold; color: #28a745;">
                                            KSh {{ number_format($relatedTest->current_price, 2) }}
                                        </span>
                                        @if($relatedTest->original_price && $relatedTest->original_price > $relatedTest->current_price)
                                            <span style="font-size: 14px; color: #999; text-decoration: line-through; margin-left: 10px;">
                                                KSh {{ number_format($relatedTest->original_price, 2) }}
                                            </span>
                                        @endif
                                    </div>
                                @endif
                                <a href="{{ route('test-detail', $relatedTest->slug) }}" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background: #0066cc; color: white; text-decoration: none; border-radius: 5px; font-size: 14px; font-weight: 600;">
                                    View Details
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
<!-- End Test Detail Section -->

@endsection
