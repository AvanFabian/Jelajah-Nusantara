@extends('layouts.main', ['isRegister' => true])

@section('title', 'Let Us Serve You')

<link rel="stylesheet" href="{{ url('css/login.css') }}" />
{{-- bootstrap in bootstrap/css/ --}}
<link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

@section('content')
   <div class="container">
      <div class="forms-container">
         <div class="signin-signup">
            <form action="{{ route('loginPost') }}" method="POST" class="sign-in-form">
               {{-- SIGN IN PAGE --}}
               <h2 class="title">Sign in</h2>
               {{-- EMAIL-SIGN --}}
               <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
                  <input type="email" id="email" class="autofilled" name="email" value="{{ old('email') }}" placeholder="Email" />
               </div>

               {{-- PASSWORD --}}
               <div class="input-field @error('password') error @enderror">
                  <i class="fas fa-lock"></i>
                  {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
                  <input type="password" id="password" name="password" placeholder="Password" />
                  <a href="#" class="ms-3" id="showPass"><i class="fas fa-eye"></i></a>
                  @error('password')
                     <span class="error-message">{{ $message }}</span>
                  @enderror
               </div>
               {{-- Checkbox Remember me --}}
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="remember" id="remember">
                  <label class="form-check-label" for="remember">
                     Remember me
                  </label>
               </div>
               @if (session('hakAksesAdmin'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('hakAksesAdmin') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"
                  aria-label="Close"></button>
               </div>
               @endif
               <div class="row mb-2">
                  <div class="col-md-6 mt-4">
                     <a href="{{ route('password.request') }}" type="Forgot" id="Forgot" class="forgotPass"
                     name="Forgot">Change Password?</a>
                  </div>
                  <div class="col-md-6">
                     <input type="submit" id="submit" class="btn btn-outline-dark btn-lg px-5 mt-3" name="submit"
                  value="Submit">
                  </div>
               </div>
               {{-- SOCIAL MEDIA PLATFORM --}}
               <p class="social-text">Or Sign in with social platforms</p>
               <div class="social-media">
                  <a href="#" class="social-icon">
                     <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" class="social-icon">
                     <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" class="social-icon">
                     <i class="fab fa-google"></i>
                  </a>
                  <a href="#" class="social-icon">
                     <i class="fab fa-linkedin-in"></i>
                  </a>
               </div>
               @csrf
            </form>
            {{-- END SIGN IN PAGE --}}
         </div>
      </div>

      <div class="panels-container">
         <div class="panel left-panel">
            <div class="content">
               <h3>New here ?</h3>
               <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                  ex ratione. Aliquid!
               </p>
               <button class="btn transparent" id="sign-up-btn" onclick="location.href=('register')">Sign Up</button>
               <button class="btn transparent" id="sign-up-btn" onclick="location.href=('home')">Back</button>

            </div>
         </div>
      </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="{{ url('js/loginValid.js') }}"></script>
   <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
@endsection
