@extends('layouts.main', ['isRegister' => true])

@section('title', 'Let Us Serve You')

<link rel="stylesheet" href="{{ url('css/login.css') }}" />
{{-- bootstrap in bootstrap/css/ --}}
<link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

@section('content')
   <div class="container">
      <div class="forms-container">
         <div class="signin-signup justify-content-center">
            <form action="{{ route('password.reset') }}" method="POST" class="sign-in-form">
               @csrf
               {{-- SIGN IN PAGE --}}
               <h2 class="title">Enter Your New Password</h2>
               {{-- EMAIL-SIGN --}}
               <div class="input-field @error('password') error @enderror">
                  <i class="fas fa-lock"></i>
                  {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
                  <input type="password" id="password" name="password" placeholder="Password" />
                  <a href="#" class="ms-3" id="showPass"><i class="fas fa-eye"></i></a>
                  @error('password')
                     <span class="error-message">{{ $message }}</span>
                  @enderror
               </div>
               <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" id="rpass" name="password_confirmation" placeholder="Confirm Password" />
                  <a href="#" class="ms-3" id="showPass"><i class="fas fa-eye"></i></a>
               </div>
               <input type="hidden" name="token" value="res235#">
               <input type="submit" id="submit" class="btn btn-outline-dark btn-lg px-5 mt-3" name="submit"
                  value="Reset Password">
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
   <script src="{{ url('js/regisValid.js') }}"></script>
   <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>
@endsection
