<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>@lang('login.title') - FusionApp</title>
    <script src="https://kit.fontawesome.com/4e658c380b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{mix('css/login.css')}}" />
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">@lang('login.page_title')</h2>
            @if(isset($message))
              <div style="margin-top: 20px" class="alert alert-info">@lang('messages.'.$message)</div>
            @endif
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
              <div
                class="img"
                style="
                  background-image: url({{asset('img/curved-images/curved9.jpg')}});
                "
              ></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">@lang('login.title')</h3>
                  </div>
                  <div class="w-100">
                    <!-- TODO: Add social buttons -->
                    <p class="social-media d-flex justify-content-end">
                      <a
                        href="{{route('discordLogin')}}"
                        class="social-icon d-flex align-items-center justify-content-center"
                        ><span class="fab fa-discord"></span
                      ></a>
                      {{-- <a
                        href="#"
                        class="social-icon d-flex align-items-center justify-content-center"
                        ><span class="fa fa-twitter"></span
                      ></a> --}}
                    </p>
                  </div>
                </div>
                @if(session('error'))
                  <div style="margin-top: 20px" class="alert alert-danger">@lang('messages.'.session('error'))</div>
                @endif
                <form action="{{route('login')}}" method="post" class="signin-form">
                  @csrf
                  <div class="form-group mb-3">
                    <label class="label" for="name">@lang('login.form_email')</label>
                    <input
                      type="text"
                      class="form-control @error('email') is-invalid @enderror"
                      placeholder="@lang('login.form_email')"
                      name="email"
                    />
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="password">@lang('login.form_password')</label>
                    <input
                      type="password"
                      class="form-control @error('password') is-invalid @enderror"
                      placeholder="@lang('login.form_password')"
                      name="password"
                    />
                    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                  </div>
                  <div class="form-group">
                    <button
                      type="submit"
                      class="form-control btn btn-primary rounded submit px-3"
                    >
                      @lang('login.form_submit')
                    </button>
                  </div>
                  <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                      <label class="checkbox-wrap checkbox-primary mb-0"
                        >@lang('login.form_remember')
                        <input type="checkbox" checked="" />
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="w-50 text-md-right">
                      <a href="#">@lang('login.forgot_password')</a>
                    </div>
                  </div>
                </form>
                <p class="text-center">
                  @lang('login.no_account_text') <a data-toggle="tab" href="{{route('register')}}">@lang('login.no_account_button')</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
