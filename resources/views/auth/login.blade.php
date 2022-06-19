@extends('layouts.main')

@section('title', trans('login.title'))

@section('page_content')
<section>
  <div class="page-header min-vh-75">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
          <div class="card card-plain mt-4">
            <div class="card-header pb-0 text-left bg-transparent">
              <h3 class="font-weight-bolder text-info text-gradient">@lang('login.page_title')</h3>
              <p class="mb-0">@lang('login.page_subtitle')</p>
              @if(session('status'))
                <div style="margin-top: 20px" class="alert alert-danger">{{session('status')}}</div>
              @endif
            </div>
            <div class="card-body">
              <form role="form" action="{{route('login')}}" method="post">
                @csrf
                <label>@lang('login.form_email')</label>
                <div class="mb-3">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="@lang('login.form_email')" aria-label="Email" aria-describedby="email-addon">
                  @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <label>@lang('login.form_password')</label>
                <div class="mb-3">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="@lang('login.form_password')" aria-label="Password" aria-describedby="password-addon">
                  @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember">
                  <label class="form-check-label" for="remember">@lang('login.form_remember')</label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">@lang('login.form_submit')</button>
                </div>
              </form>
            </div>
            <div class="card-footer text-center pt-0 px-lg-2 px-1">
              <p class="mb-4 text-sm mx-auto">
                @lang('login.no_account_text')
                <a href="{{route('register')}}" class="text-info text-gradient font-weight-bold">@lang('login.no_account_button')</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('{{asset('img/curved-images/curved6.jpg')}}')"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection