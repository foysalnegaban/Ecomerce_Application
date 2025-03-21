@extends('layout.auth')

@section("style")
<style>
  html,
body {
  height: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 1rem;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>

@endsection

@section('content')
<main class="form-signin w-100 m-auto">
    <form action="{{ route('registerPost') }}" method="POST">
      @csrf
      <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Create your account</h1>
  
      <div class="form-floating">
        <input type="name" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Name</label>
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" name="email"  id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
  
      <div class="form-check text-start my-3">
        <input class="form-check-input" name="rememberme" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
     
      </div>
      @if(session()->has('success'))
      <div class="alart alart-success">
        {{ session()->get('message') }}
      </div>
      @endif
      @if(session()->has('error'))
      <div class="alart alart-success">
        {{ session()->get('message') }}
      </div>
      @endif

      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      <a href="{{ route('login')}}" class="text-center">Already Registered</a>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
    </form>
  </main>

@endsection