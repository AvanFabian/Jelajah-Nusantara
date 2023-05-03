@extends('layouts.main', ['isRegister' => true])

@section('title', 'Let Us Serve You')

<link rel="stylesheet" href="{{ url('css/login.css') }}" />
{{-- bootstrap in bootstrap/css/ --}}
<link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}" />

@section('content')
   <div class="container">
      <div class="forms-container">
         <div class="signin-signup">
            <form action="{{ route('loginPost') }}" method="POST" class="sign-in-form">
               @csrf
               {{-- SIGN IN PAGE --}}
               <h2 class="title">Sign in</h2>
               {{-- EMAIL-SIGN --}}
               <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
                  <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" />
               </div>

               {{-- PASSWORD --}}
               <div class="input-field @error('password') error @enderror">
                  <i class="fas fa-lock"></i>
                  {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
                  <input type="password" id="password" name="password" placeholder="Password" />
                  @error('password')
                     <span class="error-message">{{ $message }}</span>
                  @enderror
               </div>
               <input type="submit" id="submit" class="btn btn-outline-dark btn-lg px-5 mt-3" name="submit"
                  value="Submit">
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
   <script defer src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
@endsection
