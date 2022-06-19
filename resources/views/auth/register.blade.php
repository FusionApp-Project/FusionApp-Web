@extends('layouts.main')

@section('title', trans('register.title'))

@section('page_content')
<section>
  <div class="page-header min-vh-75">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
          <div class="card card-plain mt-4">
            <div class="card-header pb-0 text-left bg-transparent">
              <h3 class="font-weight-bolder text-info text-gradient">Welkom!</h3>
              <p class="mb-0">Registreer een nieuw account</p>
            </div>
            <div class="card-body">
              <form role="form" action="{{route('register')}}" method="post">
                @csrf
                <label>Naam</label>
                <div class="mb-3">
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Volledige naam" aria-label="Naam" value="{{ old('name') }}">
                  @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <label>Email</label>
                <div class="mb-3">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}">
                  @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <label>Wachtwoord</label>
                <div class="mb-3">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Wachtwoord" aria-label="Wachtwoord" aria-describedby="password-addon" value="{{ old('password') }}">
                  @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <label>Bevestig wachtwoord</label>
                <div class="mb-3">
                  <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Bevestig wachtwoord" aria-label="Bevestig wachtwoord" aria-describedby="password-addon" value="{{ old('password_confirmation') }}">
                  @error('password_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input @error('tos') is-invalid @enderror" type="checkbox" name="tos" id="tos">
                  <label class="form-check-label" for="tos">Accepteer de voorwaarden</label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Registreren</button>
                </div>
              </form>
            </div>
            <div class="card-footer text-center pt-0 px-lg-2 px-1">
              <p class="mb-4 text-sm mx-auto">
                Al een account?
                <a href="{{route('login')}}" class="text-info text-gradient font-weight-bold">Log in</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('{{asset('img/curved-images/curved5.jpg')}}')"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection