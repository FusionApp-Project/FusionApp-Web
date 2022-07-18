@extends('layout.main')

@section('header')
<header class="topbar" data-navbarbg="skin5">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin6">
      <a class="navbar-brand" href="{{route('dashboard')}}">
        <b class="logo-icon">
          <img
            src="{{asset('img/logo_icon_transparant_200.png')}}"
            alt="homepage"
            height="50px"
          />
        </b>
        <span class="logo-text">
          <img
            src="{{asset('img/logo_header.png')}}"
            alt="homepage"
            height="50px"
          />
        </span>
      </a>
      <a
        class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
        href="javascript:void(0)"
        ><i class="ti-menu ti-close"></i
      ></a>
    </div>
    <div
      class="navbar-collapse collapse bg-dark"
      id="navbarSupportedContent"
      data-navbarbg="skin5"
    >
      <ul class="navbar-nav d-none d-md-block d-lg-none">
        <li class="nav-item">
          <a
            class="nav-toggler nav-link waves-effect waves-light text-white"
            href="javascript:void(0)"
            ><i class="ti-menu ti-close"></i
          ></a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto d-flex align-items-center">
        <li class="in">
          <form role="search" class="app-search d-none d-md-block me-3">
            <input
              type="text"
              placeholder="@lang('main.search_placeholder')"
              class="form-control mt-0"
            />
            <a href="" class="active">
              <i class="fa fa-search"></i>
            </a>
          </form>
        </li>
        <li>
          <a class="profile-pic" href="#">
            <img
              src="{{auth()->user()->getAvatar()}}"
              alt="user-img"
              width="36"
              class="img-circle"
            /><span class="text-white font-medium">{{ auth()->user()->name }}</span></a
          >
        </li>
      </ul>
    </div>
  </nav>
</header>
@endsection

@section('sidebar')
<aside class="left-sidebar" data-sidebarbg="skin6">
  <div class="scroll-sidebar">
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="sidebar-item pt-2">
          <a
            class="sidebar-link waves-effect waves-dark sidebar-link @if($page_id == 'dashboard') active @endif"
            href="{{route('dashboard')}}"
            aria-expanded="false"
          >
            <i class="far fa-clock" aria-hidden="true"></i>
            <span class="hide-menu">@lang('sidebar.dashboard')</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a
            class="sidebar-link waves-effect waves-dark sidebar-link @if($page_id == 'profile') active @endif"
            href="{{route('profile')}}"
            aria-expanded="false"
          >
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class="hide-menu">@lang('sidebar.profile')</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a
            class="sidebar-link waves-effect waves-dark sidebar-link"
            href="basic-table.html"
            aria-expanded="false"
          >
            <i class="fa fa-table" aria-hidden="true"></i>
            <span class="hide-menu">@lang('sidebar.schedule')</span>
          </a>
        </li>
        <li class="text-center p-20 upgrade-btn">
          <a
            href="{{route('logout')}}"
            class="btn d-grid btn-primary text-white"
          >
            @lang('sidebar.logout')</a
          >
        </li>
      </ul>
    </nav>
  </div>
</aside>
@endsection

@section('page_header')
<div class="page-breadcrumb bg-white">
  <div class="row align-items-center">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">@yield('page_title')</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <div class="d-md-flex">
        <ol class="breadcrumb ms-auto"></ol>
        @yield('action_button') {{--
        <a
          href="https://www.wrappixel.com/templates/ampleadmin/"
          target="_blank"
          class="btn btn-danger d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white"
          >Upgrade to Pro</a
        >
        --}}
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
<footer class="footer text-center">
  {{date('Y')}} © <a href="https://github.com/FusionApp-Project" target="_blank">FusionApp</a>
</footer>
@endsection()
