<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('portal/assets/img/favicon.png')}}">
      <title>Book Test - {{ $test->title }} | Biopassion Diagnostics</title>

      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/css/feather.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('portal/assets/plugins/fontawesome/css/all.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('portal/assets/css/style.css')}}">
      
      <style>
         .test-info-card {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
         }
         .test-info-card h4 {
            color: #333;
            margin-bottom: 10px;
         }
         .test-info-card p {
            margin: 5px 0;
            color: #666;
         }
         .price-display {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
         }
         .original-price {
            font-size: 16px;
            color: #999;
            text-decoration: line-through;
            margin-left: 10px;
         }
         .discount-badge {
            background: #dc3545;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            margin-left: 10px;
         }
         .form-group {
            margin-bottom: 20px;
         }
         .form-group label {
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
         }
         .required {
            color: #dc3545;
         }
         .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 12px 20px;
            border-radius: 4px;
            margin-bottom: 20px;
         }
         .back-link {
            margin-bottom: 20px;
         }
         .back-link a {
            color: #007bff;
            text-decoration: none;
         }
         .back-link a:hover {
            text-decoration: underline;
         }
         .whatsapp-btn {
            background-color: #25D366 !important;
            border-color: #25D366 !important;
            color: white !important;
            transition: all 0.3s ease;
         }
         .whatsapp-btn:hover {
            background-color: #20ba5a !important;
            border-color: #20ba5a !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(37, 211, 102, 0.3);
         }
         .email-btn {
            transition: all 0.3s ease;
         }
         .email-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
         }
      </style>
   </head>
   <body>
      <div class="main-wrapper login-body">
         <div class="container-fluid px-0">
            <div class="row">
               <div class="col-lg-6 login-wrap">
                  <div class="login-sec">
                     <div class="log-img">
                        <img class="img-fluid" src="{{asset('theme/assets/images/icons/team-icon.png')}}" alt="Logo">
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 login-wrap-bg">
                  <div class="login-wrapper">
                     <div class="loginbox">
                        <div class="login-right">
                           <div class="login-right-wrap">
                              <div class="back-link">
                                 <a href="{{ route('test-lists') }}">← Back to Test Lists</a>
                              </div>
                              
                              <h2>Book Test</h2>
                              
                              <!-- Test Information Card -->
                              <div class="test-info-card">
                                 <h4>{{ $test->title }}</h4>
                                 @if($test->category)
                                    <p><strong>Category:</strong> {{ $test->category }}</p>
                                 @endif
                                 <div style="margin-top: 10px;">
                                    @if($test->current_price)
                                       <span class="price-display">
                                          KSh {{ number_format($test->current_price, 2) }}
                                          @if($test->original_price && $test->original_price > $test->current_price)
                                             <span class="original-price">KSh {{ number_format($test->original_price, 2) }}</span>
                                          @endif
                                          @if($test->discount_percentage)
                                             <span class="discount-badge">Save {{ $test->discount_percentage }}%</span>
                                          @endif
                                       </span>
                                    @else
                                       <span class="price-display">Price on request</span>
                                    @endif
                                 </div>
                              </div>

                              @if(Session::has('message'))
                                 <div class="alert alert-success">
                                    {{ Session::get('message') }}
                                 </div>
                              @endif

                              <form method="POST" action="{{ route('book-test.post', $test->slug) }}">
                                 @csrf
                                 
                                 <div class="form-group">
                                    <label>Full Name <span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                    @error('name')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>

                                 <div class="form-group">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                    @error('email')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>

                                 <div class="form-group">
                                    <label>Phone Number <span class="required">*</span></label>
                                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                                    @error('phone')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>

                                 <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" placeholder="e.g., Nairobi, Mombasa">
                                    @error('location')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>

                                 <div class="form-group">
                                    <label>Apartment/Building</label>
                                    <input type="text" name="apartment" class="form-control @error('apartment') is-invalid @enderror" value="{{ old('apartment') }}" placeholder="Optional">
                                    @error('apartment')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>

                                 <div class="form-group">
                                    <label>Additional Message</label>
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="4" placeholder="Any additional information or special requests...">{{ old('message') }}</textarea>
                                    @error('message')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>

                                 @include('components.arithmetic-challenge')

                                 <div class="input-block login-btn">
                                    <button class="btn btn-primary btn-block email-btn" type="submit" style="margin-bottom: 15px;">
                                       <i class="fa fa-envelope"></i> Submit via Email
                                    </button>
                                    
                                    <div style="text-align: center; margin: 15px 0; color: #666; font-size: 14px;">
                                       <span style="background: #f8f9fa; padding: 0 10px;">OR</span>
                                    </div>
                                    
                                    <button type="button" class="btn btn-block whatsapp-btn" onclick="submitViaWhatsApp()">
                                       <i class="fab fa-whatsapp"></i> Submit via WhatsApp
                                    </button>
                                    <p style="text-align: center; margin-top: 10px; font-size: 12px; color: #666;">
                                       <i class="fab fa-whatsapp"></i> WhatsApp opens in a new window. Send the message to complete your booking.
                                    </p>
                                 </div>
                              </form>
                              
                              <div class="next-sign" style="margin-top: 20px;">
                                 <p class="account-subtitle">Need help? <a href="mailto:info@biopassiondiagnostics.com">Contact us</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script src="{{asset('portal/assets/js/jquery-3.7.1.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('portal/assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('portal/assets/js/feather.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('portal/assets/js/app.js')}}" type="text/javascript"></script>
      
      <script>
         function submitViaWhatsApp() {
            // Get form values
            const name = document.querySelector('input[name="name"]').value;
            const email = document.querySelector('input[name="email"]').value;
            const phone = document.querySelector('input[name="phone"]').value;
            const location = document.querySelector('input[name="location"]').value || 'Not provided';
            const apartment = document.querySelector('input[name="apartment"]').value || 'Not provided';
            const message = document.querySelector('textarea[name="message"]').value || 'No additional message';
            const testTitle = '{{ $test->title }}';
            const testCategory = '{{ $test->category }}';
            const testPrice = '{{ $test->current_price ? "KSh " . number_format($test->current_price, 2) : "Price on request" }}';
            
            // Validate required fields
            if (!name || !email || !phone) {
               alert('Please fill in all required fields (Name, Email, Phone) before submitting via WhatsApp.');
               return;
            }
            
            // Format WhatsApp message
            let whatsappMessage = `*NEW TEST BOOKING REQUEST*\n\n`;
            whatsappMessage += `*Test:* ${testTitle}\n`;
            whatsappMessage += `*Category:* ${testCategory}\n`;
            whatsappMessage += `*Price:* ${testPrice}\n\n`;
            whatsappMessage += `*CUSTOMER DETAILS:*\n`;
            whatsappMessage += `Name: ${name}\n`;
            whatsappMessage += `Email: ${email}\n`;
            whatsappMessage += `Phone: ${phone}\n`;
            whatsappMessage += `Location: ${location}\n`;
            whatsappMessage += `Apartment/Building: ${apartment}\n\n`;
            whatsappMessage += `*Additional Message:*\n${message}\n\n`;
            whatsappMessage += `---\n`;
            whatsappMessage += `Submitted via Biopassion Diagnostics Website`;
            
            // Encode message for URL
            const encodedMessage = encodeURIComponent(whatsappMessage);
            
            // WhatsApp Business number
            const whatsappNumber = '254704150555';
            
            // Open WhatsApp
            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
            window.open(whatsappUrl, '_blank');
            
            // Show success message
            alert('Opening WhatsApp... Please send the message to complete your booking. We will contact you soon!');
         }
      </script>
   </body>
</html>
