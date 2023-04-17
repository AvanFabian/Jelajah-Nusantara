<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    {{-- bootstrap in bootstrap/css/ --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
    <title>Welcome to Our World</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          @csrf
          <form action="{{ url('/login') }}" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>

            {{-- USERNAME --}}
            <div class="input-field @error('username') error @enderror">
              <i class="fa fa-user"></i>
              {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
              <input type="text" name="username" placeholder="Username" />
              @error('username')
                <span class="error-message">{{ $message }}</span>
              @enderror
            </div>
            

            {{-- PASSWORD --}}
            <div class="input-field @error('password') error @enderror">
              <i class="fas fa-lock"></i>
              {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
              <input type="password" name="password" placeholder="Password" />
              @error('password')
                <span class="error-message">{{ $message }}</span>
              @enderror
            </div>
            <input type="submit" value="Login" id="btn" class="btn" />


            {{-- PLATFORM --}}
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
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>

            {{-- USER-SIGN --}}
            <div class="input-field @error('username') error @enderror">
              <i class="fas fa-user"></i>
              {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
              <input type="text" name="username" value="{{ old('username') }}" placeholder="Username" />
              @error('username')
                <span class="error-message">{{ $message }}</span>
              @enderror
            </div>

            {{-- EMAIL-SIGN --}}
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
              <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
            </div>

            {{-- PASS-SIGN --}}
            <div class="input-field">
              <i class="fas fa-lock"></i>
              {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
              {{-- Beri name sesuai jenis input agar dikenal Controller register/login --}}
              <input type="password" name="password" value="{{ old('password') }}"  placeholder="Password" />
            </div>
            <input type="submit" id="btn" value="Signup" class="btn"/>

            <p class="social-text">Or Sign up with social platforms</p>
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
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            <button class="btn transparent" id="sign-up-btn" onclick="location.href=('home')">Back</button>
            
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn" >
              Sign in
            </button>
            <button class="btn transparent" id="sign-in-btn" onclick="location.href=('home')">Back</button>

          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script defer src="{{ url('js/login.js') }}"></script>
    <script defer
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
  ></script>
  </body>
</html>