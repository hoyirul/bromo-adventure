@extends('layouts.main')

@section('content')
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5" data-id="title">Sign in</h3>
            <form action="{{ route('login') }}" method="POST">
              @csrf
              
              <div class="form-outline mb-4">
                <label class="form-label" for="typeEmailX-2" data-id="lblEmail">Email</label>
                <input type="email" data-id="inputEmail" name="email" value="{{ old('email') }}" id="typeEmailX-2" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="typePasswordX-2" data-id="lblPassword">Password</label>
                <input type="password" data-id="inputPassword" name="password" id="typePasswordX-2" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                <label class="form-check-label" for="form1Example3"> Remember password </label>
              </div>

              <div class="d-flex">
                <button data-id="btnLogin" style="background-color: #508afc; border: #508afc" type="submit" class="btn btn-primary btn-lg btn-block w-100" type="submit">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
