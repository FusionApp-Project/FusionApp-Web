@extends('layout.app')

@section('page_title', trans('profile.title'))

@section('content')
<div class="row">
    <div class="col-lg-4 col-xlg-3 col-md-12">
        <div class="white-box">
            <div class="user-bg">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)"><img src="{{auth()->user()->getAvatar()}}" class="thumb-lg img-circle" alt="img"></a>
                        <h4 class="text-white mt-2">{{auth()->user()->name}}</h4>
                        <h5 class="text-white mt-2">{{auth()->user()->email}}</h5>
                    </div>
                </div>
            </div>
            <div class="user-btm-box mt-5 d-md-flex">
                <div class="col-md-12 col-sm-4 text-center">
                    <h3>@lang('profile.connections')</h3>
                </div>
            </div>
            <div class="user-btm-box d-md-flex">
                <div class="col-md-4 col-sm-4 text-center">
                    <h1 class="{{(auth()->user()->has('discord_profile'))?"connection-active":"connection-inactive"}}"><i class="fab fa-discord"></i></h1>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <h1 class="{{isset(auth()->user()->github_id)?"connection-active":"connection-inactive"}}"><i class="fab fa-github"></i></h1>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <h1 class="{{isset(auth()->user()->google_id)?"connection-active":"connection-inactive"}}"><i class="fab fa-google"></i></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material" method="post" action="{{route('profile')}}">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">@lang('profile.form_name')</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" placeholder="@lang('profile.form_name')" class="form-control p-0 border-0" name="name" value="{{auth()->user()->name}}"> </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="example-email" class="col-md-12 p-0">@lang('profile.form_email')</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="email" placeholder="@lang('profile.form_email')" class="form-control p-0 border-0" name="email" id="example-email" value="{{auth()->user()->email}}" >
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">@lang('profile.form_password') <small>(@lang('profile.form_password_small'))</small></label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="password" placeholder="@lang('profile.form_password_placeholder')" name="password" class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-sm-12">@lang('profile.form_language')</label>

                        <div class="col-sm-12 border-bottom">
                            <select class="form-select shadow-none p-0 border-0 form-control-line" name="lang">
                                <option value="nl" @if(auth()->user()->language == 'nl')selected @endif>Nederlands</option>
                                <option value="en" @if(auth()->user()->language == 'en')selected @endif>English</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success">@lang('profile.form_submit')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection