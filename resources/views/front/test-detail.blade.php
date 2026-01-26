@extends('front.master')

@php
    $testUrl = url('/test/' . $test->slug);
    $testImage = $test->image_url ? (str_starts_with($test->image_url, 'http') ? $test->image_url : asset($test->image_url)) : asset('uploads/logo/logo.png');
    $testDescription = "Book {$test->title} at Biopassion Diagnostics - ISO certified laboratory Kenya. Affordable {$test->category} test in Nairobi with fast results. Price: KSh " . number_format($test->current_price ?? 0, 2) . ". Call +254 704 150555 or WhatsApp for home sample collection Kenya.";
    $seoKeywords = "{$test->title}, {$test->category}, DNA testing lab in Kenya, genetic testing laboratory Kenya, medical laboratory in Kenya, ISO certified laboratory Kenya, best DNA testing lab in Kenya, paternity DNA test Kenya, affordable DNA test Kenya, general laboratory services Kenya, diagnostic laboratory Kenya, private laboratory Kenya, DNA testing lab Nairobi, genetic testing lab Nairobi, medical lab near me, diagnostic lab near me, DNA test near me, private lab Nairobi, laboratory services Kenya, home sample collection Kenya, affordable lab tests Nairobi, book DNA test Kenya, cost of DNA test in Kenya, fast DNA test results Kenya, same day lab results Nairobi, reliable DNA lab Kenya, trusted laboratory Kenya, call DNA testing lab Kenya, WhatsApp lab testing Kenya";
@endphp

@section('seo')
<title>{{ $test->title }} - {{ $test->category }} Test | Best DNA Testing Lab in Kenya | ISO Certified Laboratory</title>
<meta name="title" content="{{ $test->title }} - {{ $test->category }} Test | DNA Testing Lab in Kenya | Biopassion Diagnostics">
<meta name="description" content="{{ $testDescription }}">
<meta name="keywords" content="{{ $seoKeywords }}">
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
 @verbatim
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
    "name": "Biopassion Diagnostics - DNA Testing Lab in Kenya",
    "alternateName": "Best DNA Testing Lab in Kenya, ISO Certified Laboratory Kenya, Genetic Testing Laboratory Kenya",
    "url": "{{ url('/') }}",
    "telephone": "+254704150555",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Medical Laboratory, Nairobi Kenya, Gachie, Riva at Sunset stage",
      "addressLocality": "Nairobi",
      "addressRegion": "Nairobi",
      "addressCountry": "KE",
      "description": "DNA testing lab Nairobi, genetic testing lab Nairobi, medical lab near me, diagnostic lab near me"
    },
    "description": "ISO certified laboratory Kenya offering DNA testing, genetic testing, and general laboratory services Kenya. Best DNA testing lab in Kenya with home sample collection Kenya services."
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
      "@type": "Question",
      "name": "What is the {{ $test->title }}?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The {{ $test->title }} is a comprehensive diagnostic test offered by Biopassion Diagnostics, a DNA testing lab in Kenya and genetic testing laboratory Kenya, for {{ strtolower($test->category) }}. As an ISO certified laboratory Kenya and medical laboratory in Kenya, we provide accurate and reliable results to help healthcare providers make informed decisions about patient care."
      }
    },
    {
      "@type": "Question",
      "name": "How much does the {{ $test->title }} cost in Kenya?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "@if($test->current_price)The {{ $test->title }} costs KSh {{ number_format($test->current_price, 2) }}@if($test->original_price && $test->original_price > $test->current_price) (discounted from KSh {{ number_format($test->original_price, 2) }})@endif at our affordable DNA test Kenya facility. As an affordable lab tests Nairobi provider, we offer competitive pricing. Contact us at +254 704 150555 for booking and more information about cost of DNA test in Kenya.@elsePlease contact Biopassion Diagnostics, a trusted laboratory Kenya, at +254 704 150555 for pricing information on the {{ $test->title }}."
      }
    },
    {
      "@type": "Question",
      "name": "How do I book the {{ $test->title }} in Kenya?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can book DNA test Kenya by calling +254 704 150555, WhatsApp lab testing Kenya, or booking online through our website. As a DNA testing lab in Kenya, we offer home sample collection Kenya services across the country for your convenience. Book DNA test Kenya today!"
      }
    },
    {
      "@type": "Question",
      "name": "Where can I get the {{ $test->title }} in Kenya?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Biopassion Diagnostics, a DNA testing lab Nairobi and genetic testing lab Nairobi, offers the {{ $test->title }} at our medical laboratory in Kenya located in Nairobi (Gachie, Riva at Sunset stage). We are a medical lab near me and diagnostic lab near me option. We also provide home sample collection Kenya services across the country. Call +254 704 150555 to schedule your test at our private lab Nairobi."
      }
    },
    {
      "@type": "Question",
      "name": "How fast are the results for {{ $test->title }}?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "As a reliable DNA lab Kenya, we provide fast DNA test results Kenya. For urgent cases, we offer same day lab results Nairobi. Our ISO certified laboratory Kenya ensures quick turnaround times without compromising accuracy."
      }
    }
  ]
}
</script>
@endverbatim
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
                            The <strong>{{ $test->title }}</strong> is a comprehensive diagnostic test offered by <strong>Biopassion Diagnostics</strong>, one of the <strong>best DNA testing labs in Kenya</strong> and a leading <strong>ISO certified laboratory Kenya</strong>. As a trusted <strong>medical laboratory in Kenya</strong> and <strong>genetic testing laboratory Kenya</strong>, we provide accurate and reliable results for {{ strtolower($test->category) }}. This advanced testing method is essential for healthcare professionals and patients seeking detailed insights into their health status.
                        </p>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            At Biopassion Diagnostics, a premier <strong>diagnostic laboratory Kenya</strong> and <strong>private laboratory Kenya</strong>, we understand the importance of precise diagnostic testing in making informed healthcare decisions. Our state-of-the-art <strong>medical laboratory in Kenya</strong> facilities and experienced team ensure that every test is conducted with the highest standards of accuracy and reliability, making us a <strong>reliable DNA lab Kenya</strong>.
                        </p>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            Located in <strong>Nairobi, Kenya</strong>, Biopassion Diagnostics is a leading <strong>DNA testing lab Nairobi</strong> and <strong>genetic testing lab Nairobi</strong> specializing in {{ strtolower($test->category) }} and other <strong>general laboratory services Kenya</strong>. As a <strong>private lab Nairobi</strong>, we serve patients and healthcare providers across Kenya with convenient locations and <strong>home sample collection Kenya</strong> services. Our <strong>affordable lab tests Nairobi</strong> make quality diagnostic testing accessible to everyone.
                        </p>
                    </article>

                    <!-- What the Test Measures -->
                    <section class="test-measures" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">What the {{ $test->title }} Measures</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            The <strong>{{ $test->title }}</strong> measures specific biomarkers, genetic markers, or diagnostic parameters relevant to {{ strtolower($test->category) }}. As a leading <strong>diagnostic laboratory Kenya</strong> and <strong>genetic testing laboratory Kenya</strong>, this test provides detailed information that helps healthcare providers:
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
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">Benefits of Taking the {{ $test->title }} at Our Laboratory</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            Undergoing the <strong>{{ $test->title }}</strong> at our <strong>ISO certified laboratory Kenya</strong> offers several advantages:
                        </p>
                        <ul style="font-size: 16px; line-height: 1.8; color: #666; margin-left: 20px; margin-bottom: 15px;">
                            <li><strong>Accurate and Reliable Results:</strong> As a <strong>trusted laboratory Kenya</strong> and <strong>reliable DNA lab Kenya</strong>, our advanced laboratory technology ensures precise and dependable test results</li>
                            <li><strong>Fast Results:</strong> We provide <strong>fast DNA test results Kenya</strong> and <strong>same day lab results Nairobi</strong> for urgent cases</li>
                            <li><strong>Early Detection:</strong> Identify potential health issues before they become more serious with our comprehensive <strong>diagnostic testing Kenya</strong></li>
                            <li><strong>Affordable Pricing:</strong> As an <strong>affordable DNA test Kenya</strong> provider, we offer competitive pricing for all our <strong>affordable lab tests Nairobi</strong></li>
                            <li><strong>Personalized Care:</strong> Results help guide individualized treatment plans tailored to your specific needs</li>
                            <li><strong>Professional Support:</strong> Our team of experts at this <strong>medical lab near me</strong> is available to help interpret results and answer questions</li>
                            <li><strong>Convenient Service:</strong> We offer <strong>home sample collection Kenya</strong> and multiple service locations, making us the best <strong>diagnostic lab near me</strong> option</li>
                            <li><strong>Easy Booking:</strong> <strong>Book DNA test Kenya</strong> easily by calling our <strong>DNA testing lab in Kenya</strong> or using our online booking system</li>
                        </ul>
                    </section>

                    <!-- Understanding Results -->
                    <section class="test-results" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">Understanding Your {{ $test->title }} Results</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            Results from the <strong>{{ $test->title }}</strong> will provide valuable insights into your health status. As a <strong>trusted laboratory Kenya</strong> and <strong>reliable DNA lab Kenya</strong>, our experienced healthcare professionals will help interpret the findings, explaining any significant results and their implications for your health and treatment options. We provide <strong>fast DNA test results Kenya</strong> and <strong>same day lab results Nairobi</strong> when needed.
                        </p>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            All test results from our <strong>ISO certified laboratory Kenya</strong> are delivered in a clear, comprehensive format that is easy to understand. If you have any questions about your results, our team at this <strong>medical lab near me</strong> and <strong>diagnostic lab near me</strong> is available to provide guidance and support.
                        </p>
                    </section>

                    <!-- Test Pricing Table -->
                    <div class="test-pricing-table" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">{{ $test->title }} Pricing - Cost of DNA Test in Kenya</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 15px;">
                            As an <strong>affordable DNA test Kenya</strong> provider, we offer competitive pricing for all our <strong>affordable lab tests Nairobi</strong>. Below is the <strong>cost of DNA test in Kenya</strong> for the {{ $test->title }}:
                        </p>
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
                        <h2 style="font-size: 32px; margin-bottom: 15px; color: white;">Book Your {{ $test->title }} Today!</h2>
                        <p style="font-size: 18px; margin-bottom: 25px; color: white;">
                            <strong>Book DNA test Kenya</strong> at our <strong>DNA testing lab in Kenya</strong> - one of the <strong>best DNA testing labs in Kenya</strong>. We have branches across Kenya and offer a convenient booking process. To schedule your {{ $test->title }}, <strong>call DNA testing lab Kenya</strong> or <strong>WhatsApp lab testing Kenya</strong> at:
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
                            As a <strong>trusted laboratory Kenya</strong> and <strong>reliable DNA lab Kenya</strong>, we provide <strong>fast DNA test results Kenya</strong> and <strong>same day lab results Nairobi</strong>. Take the first step towards understanding your health with Biopassion Diagnostics!
                        </p>
                    </div>

                    <!-- Quality Assurance -->
                    <div class="quality-assurance" style="margin-bottom: 40px;">
                        <h2 style="font-size: 28px; margin-bottom: 20px; color: #333;">ISO Certified Laboratory Kenya - Quality Assurance</h2>
                        <p style="font-size: 16px; line-height: 1.8; color: #666; margin-bottom: 20px;">
                            As an <strong>ISO certified laboratory Kenya</strong>, Biopassion Diagnostics maintains the highest standards of quality and accuracy. Our <strong>medical laboratory in Kenya</strong> is recognized as one of the <strong>best DNA testing labs in Kenya</strong>, providing <strong>reliable DNA lab Kenya</strong> services and <strong>trusted laboratory Kenya</strong> solutions for all your diagnostic needs.
                        </p>
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
                                    <p style="color: #666; font-size: 14px;">We provide <strong>fast DNA test results Kenya</strong> and <strong>same day lab results Nairobi</strong> without compromising on accuracy or quality. As a <strong>reliable DNA lab Kenya</strong>, quick turnaround is our priority.</p>
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

                    <!-- Payment Methods -->
                    <div style="margin-bottom: 30px; padding: 20px; background: #ffffff; border: 1px solid #e0e0e0; border-radius: 8px;">
                        <p style="margin: 0 0 15px 0; color: #666; font-size: 14px; font-weight: 600;">
                            <i class="fa fa-credit-card"></i> Accepted Payment Methods
                        </p>
                        <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                            <!-- Visa -->
                            <div style="display: flex; align-items: center; justify-content: center; min-width: 70px; height: 45px; background: #1a1f71; border-radius: 6px; padding: 8px 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: transform 0.2s;">
                                <span style="color: white; font-weight: bold; font-size: 16px; letter-spacing: 1px; font-family: Arial, sans-serif;">VISA</span>
                            </div>
                            <!-- Mastercard -->
                            <div style="display: flex; align-items: center; justify-content: center; min-width: 70px; height: 45px; background: #ffffff; border: 1px solid #e0e0e0; border-radius: 6px; padding: 8px 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); position: relative; overflow: hidden;">
                                <div style="position: absolute; left: 0; top: 0; width: 50%; height: 100%; background: #eb001b;"></div>
                                <div style="position: absolute; right: 0; top: 0; width: 50%; height: 100%; background: #f79e1b;"></div>
                                <div style="position: relative; z-index: 1; display: flex; align-items: center; gap: 2px;">
                                    <div style="width: 18px; height: 18px; background: #eb001b; border-radius: 50%;"></div>
                                    <div style="width: 18px; height: 18px; background: #f79e1b; border-radius: 50%; margin-left: -9px;"></div>
                                </div>
                            </div>
                            <!-- Maestro -->
                            <div style="display: flex; align-items: center; justify-content: center; min-width: 70px; height: 45px; background: #0c0c0c; border-radius: 6px; padding: 8px 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                <span style="color: white; font-weight: bold; font-size: 11px; letter-spacing: 0.8px; font-family: Arial, sans-serif;">MAESTRO</span>
                            </div>
                            <!-- PayPal -->
                            <div style="display: flex; align-items: center; justify-content: center; min-width: 70px; height: 45px; background: #003087; border-radius: 6px; padding: 8px 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                <span style="color: white; font-weight: bold; font-size: 14px; letter-spacing: 0.3px; font-family: Arial, sans-serif;">PayPal</span>
                            </div>
                            <!-- Discover -->
                            <div style="display: flex; align-items: center; justify-content: center; min-width: 70px; height: 45px; background: #ff6000; border-radius: 6px; padding: 8px 12px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                <span style="color: white; font-weight: bold; font-size: 10px; letter-spacing: 0.5px; font-family: Arial, sans-serif;">DISCOVER</span>
                            </div>
                        </div>
                        <p style="margin: 15px 0 0 0; color: #999; font-size: 12px;">
                            <i class="fa fa-lock"></i> Secure payment processing
                        </p>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
                <div class="sidebar-inner">
                    <!-- Quick Book Widget -->
                    <div class="sidebar-widget" style="background: #f8f9fa; padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                        <h3 style="font-size: 24px; margin-bottom: 20px; color: #333;">Quick Book - Book DNA Test Kenya</h3>
                        <p style="color: #666; margin-bottom: 20px;">Ready to <strong>book DNA test Kenya</strong>? As a <strong>DNA testing lab in Kenya</strong> and <strong>medical lab near me</strong>, we make it easy. Contact our <strong>diagnostic lab near me</strong> now!</p>
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
                <h2 style="font-size: 32px; margin-bottom: 30px; text-align: center; color: #333;">Related Tests - More Laboratory Services Kenya</h2>
                <p style="text-align: center; color: #666; margin-bottom: 30px; font-size: 16px;">
                    Explore more <strong>general laboratory services Kenya</strong> and <strong>diagnostic testing Kenya</strong> options from our <strong>ISO certified laboratory Kenya</strong>:
                </p>
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
