<!DOCTYPE html>
<html dir="ltr" lang="@lang('main.language_identifier')">
  <head>
    <meta charset="UTF-8" />
    <title>@lang('register.title') - FusionApp</title>
    <script src="https://kit.fontawesome.com/4e658c380b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    @vite(["resources/css/login.scss"])
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">@lang('register.page_title')</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
              <div
                class="img"
                style="
                  background-image: url({{asset('img/curved-images/curved12.jpg')}});
                "
              ></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">@lang('register.title')</h3>

                  </div>
                  <div class="w-100">
                    <!-- TODO: Add social buttons -->
                    {{-- <p class="social-media d-flex justify-content-end">
                      <a
                        href="#"
                        class="social-icon d-flex align-items-center justify-content-center"
                        ><span class="fa fa-facebook"></span
                      ></a>
                      <a
                        href="#"
                        class="social-icon d-flex align-items-center justify-content-center"
                        ><span class="fa fa-twitter"></span
                      ></a>
                    </p> --}}
                  </div>
                </div>
                @if(session('error'))
                  <div style="margin-top: 20px" class="alert alert-danger">{{session('error')}}</div>
                @endif
                <form action="{{route('register')}}" method="post" class="signin-form">
                  @csrf
                  <div class="form-group mb-3">
                    <label class="label" for="name">@lang('register.form_name')</label>
                    <input
                      type="text"
                      class="form-control @error('name') is-invalid @enderror"
                      placeholder="@lang('register.form_name')"
                      name="name"
                      value="{{old('name')}}"
                    />
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="name">@lang('register.form_email')</label>
                    <input
                      type="text"
                      class="form-control @error('email') is-invalid @enderror"
                      placeholder="@lang('register.form_email')"
                      name="email"
                      value="{{old('email')}}"
                    />
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="password">@lang('register.form_password')</label>
                    <input
                      type="password"
                      class="form-control @error('password') is-invalid @enderror"
                      placeholder="@lang('register.form_password')"
                      name="password"
                    />
                    @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="password">@lang('register.form_password_confirm')</label>
                    <input
                      type="password"
                      class="form-control @error('password') is-invalid @enderror"
                      placeholder="@lang('register.form_password_confirm')"
                      name="password_confirmation"
                    />
                    @error('password_confirmation')<div class="invalid-feedback">{{ $message }}</div>@enderror
                  </div>
                  <div class="form-group">
                    <button
                      type="submit"
                      class="form-control btn btn-primary rounded submit px-3"
                    >
                      @lang('register.form_submit')
                    </button>
                  </div>
                  <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                      <label style="color: black" class="checkbox-wrap checkbox-primary mb-0"
                        >@lang('register.accept_tos')
                        <input type="checkbox" name="tos" />
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
                </form>
                <p class="text-center">
                  @lang('register.has_account_text') <a data-toggle="tab" href="{{route('login')}}">@lang('register.has_account_button')</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
