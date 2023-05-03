@extends('layouts.main', ['isRegister' => true])

@section('title', 'Let Us Serve You')

<link rel="stylesheet" href="{{ url('css/login.css') }}" />

@section('content')
   <div class="container">
         {{-- SIGN UP PAGE --}}
         <div class="signin-signup">
            <form action="{{ route('registerPost') }}" method="POST" class="form">
               @csrf
               <h2 class="title">Sign up</h2>
               {{-- NAME-SIGN --}}
               <div class="row">
                  <div class="col-md-12">
                     <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
                        <input type="text" id="username" name="username" value="{{ old('username') }}"
                           placeholder="Username" required/>
                     </div>

                  </div>
               </div>

               {{-- EMAIL-SIGN --}}
               <div class="row">
                  <div class="col-md-12">
                     <div class="input-field mt-3">
                        <i class="fas fa-envelope"></i>
                        {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required/>
                     </div>
                     
                  </div>
                  <div class="alert alert-danger">
                     Format Email Salah
                   </div>
               </div>
               {{-- PASS-SIGN --}}
               <div class="row">
                  <div class="col-md-12">
                     <div class="input-field mt-3">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" value="{{ old('password') }}"
                        placeholder="Password" required /> 
                        <div class="invalid-feedback">
                           Password minimal 8 karakter
                        </div>
                     </div>

                  </div>
               </div>
               {{-- CONFIRM-PASS-SIGN --}}
               <div class="row">
                  <div class="col-md-12">
                     <div class="input-field mt-3">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="rpass" name="rpass" value="{{ old('password') }}"
                           placeholder="Confirm Password" required />
                        <div class="invalid-feedback">
                           Password tidak sama
                        </div>
                     </div>

                  </div>
               </div>
               {{-- Checkbox Show Password me --}}
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="showPasswordCheckbox">
                  <label class="form-check-label" for="showPasswordCheckbox">
                    Tampilkan Kata Sandi
                  </label>
               </div>
               {{-- Checkbox Remember me --}}
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                  </label>
               </div>
               <input type="submit" id="btn" name="submit" value="Register">
            </form>
         </div>

      <div class="panels-container">
         <div class="panel left-panel">
            <div class="content">
               <h3>New here ?</h3>
               <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                  ex ratione. Aliquid!
               </p>
               <button class="btn transparent" id="sign-up-btn" onclick="location.href=('login')">Sign Up</button>
               <button class="btn transparent" id="sign-up-btn" onclick="location.href=('home')">Back</button>
            </div>
         </div>
      </div>
   </div>
   
   <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"
   integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
   <script defer src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
   <script src="{{ url('js/loginValid.js') }}"></script>
   <script>
      const showPasswordCheckbox = document.getElementById('showPasswordCheckbox');
      const passwordInput = document.getElementById('password');
      const passwordConfirm = document.getElementById('rpass');
      
      showPasswordCheckbox.addEventListener('change', function() {
         if (showPasswordCheckbox.checked) {
            passwordInput.type = 'text';
            passwordConfirm.type = 'text';
         } else {
            passwordInput.type = 'password';
            passwordConfirm.type = 'password';
         }
      });
   </script>
 
@endsection
