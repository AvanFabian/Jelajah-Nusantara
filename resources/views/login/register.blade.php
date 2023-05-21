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
            <div class="input-field">
               <i class="fas fa-envelope"></i>
               {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
               <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Username"
                  required />
            </div>

            {{-- EMAIL-SIGN --}}
            <div class="input-field">
               <i class="fas fa-envelope"></i>
               {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
               <input type="email" id="email" class="autofilled" name="email" value="{{ old('email') }}"
                  placeholder="Email" />
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
            <div class="input-field">
               <i class="fas fa-lock"></i>
               <input type="password" id="rpass" name="password_confirmation" placeholder="Confirm Password" />
               <a href="#" class="ms-3" id="showPass"><i class="fas fa-eye"></i></a>
            </div>
            <input type="submit" id="btn" name="submit" class="mt-4" value="Register">
         </form>
      </div>

      <div class="panels-container">
         <div class="panel left-panel">
            <div class="content">
               <h3>Already Have Account ?</h3>
               <p>
                  Come and Login Then Enjoy Our Budaya Nusantara Content
               </p>
               <button class="btn transparent" id="sign-up-btn" onclick="location.href=('login')">Sign In</button>
               <button class="btn transparent" id="sign-up-btn" onclick="location.href=('home')">Back</button>
            </div>
         </div>
      </div>
   </div>

   <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"
      integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
   <script defer src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
   <script src="{{ url('js/regisValid.js') }}"></script>

@endsection
