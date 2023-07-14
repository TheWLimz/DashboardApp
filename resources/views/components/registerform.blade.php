<section class="mt-4 vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action='/register' method='post'>
            @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign up with</p>
            <button type="button" class="btn btn-success btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-success btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-success btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

             <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control form-control-lg  @error('name') is-invalid @enderror"
              placeholder="Enter a valid Name" name="name" required value="{{ old('name') }}"/>
            <label class="form-label" for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  Enter the valid name
                </div>
            @enderror
          </div>

            <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="username" class="form-control form-control-lg @error('username') is-invalid @enderror"
              placeholder="Enter a valid username" name="username" required value="{{ old('username') }}"/>
            <label class="form-label" for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  Please enter a username
                </div>
            @enderror
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg  @error('email') is-invalid @enderror"
              placeholder="Enter a valid email address" name="email" required value="{{ old('email') }}"/>
            <label class="form-label" for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                  Please enter a valid email address
                </div>
            @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" class="form-control form-control-lg  @error('password') is-invalid @enderror"
              placeholder="Enter password" name="password" required/>
            <label class="form-label" for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                Password required. It must be at least 6 - 15 Characters long
                </div>
            @enderror
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-success btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Have an Account? <a href="/login"
                class="link-danger">Login</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-success">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022 Felix Winston. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.twitter.com" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.google.com" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.linkedin.com" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>
