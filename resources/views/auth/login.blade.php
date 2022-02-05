@extends('layouts.master')
@section('content')
    <!-- ----------------------- sign up start ----------------------- -->
    <section id="sign_in" class="mg_top">
        <div class="container">
            <div class="row column_change">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="sign_img sign_in_img">
                        <img src="{{url('assets/theme/images/sign-in.jpg')}}" alt="Sign up">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    @if(session('message'))
                                        <div class="alert alert-info" role="alert">
                                            {{ session('message') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                        <div class="sign_form">
                            <h1 class="heading_two mb-3">DIU Parent Portal</h1>

                            <div class="form_groups">
                                <div class="input_group full_width">
                                    <label for="email" class="paragraph sign_input_text mb-1">Email Address</label>
                                    <input id="email" name="email" type="text" class="input_field mb-2 {{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form_groups">
                                <div class="input_group full_width">
                                    <label for="password" class="paragraph sign_input_text mb-1">Password</label>
                                    <input id="password" name="password" type="password" class="input_field mb-3 {{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                                    @if($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password') }}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form_groups">
                                <div class="input_group">
                                    <input type="submit" value="Sign In" class="btn btn regular_btn submit_btn mb-3">
                                </div>
                            </div>

                            <div class="form_groups">
                                <p class="paragraph mb-1">Don't have an account? <span><a href="{{route('register')}}" class="s_text">Sign Up</a></span></p>

                                @if(Route::has('password.request'))
                                    <p>
                                        <a class="paragraph f_text" href="{{ route('password.request') }}">
                                            {{ trans('global.forgot_password') }}
                                        </a>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </form>

                    <div class="ahead_text">
                        <p class="paragraph text_bold a_text">You are one step ahead for:
                        </p>

                        <ul>
                            <li class="paragraph a_text">- Getting access to our campus updates and important news</li>
                            <li class="paragraph a_text">- Having insights into your student’s progress and financial records</li>
                            <li class="paragraph a_text">- Receiving our monthly e-newsletter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------- sign up end ----------------------- -->



{{--<div class="row justify-content-center">--}}
{{--    <div class="col-md-6">--}}
{{--        <div class="card mx-4">--}}
{{--            <div class="card-body p-4">--}}
{{--                <h1>{{ trans('panel.site_title') }}</h1>--}}

{{--                <p class="text-muted">{{ trans('global.login') }}</p>--}}

{{--                @if(session('message'))--}}
{{--                    <div class="alert alert-info" role="alert">--}}
{{--                        {{ session('message') }}--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <form method="POST" action="{{ route('login') }}">--}}
{{--                    @csrf--}}

{{--                    <div class="input-group mb-3">--}}
{{--                        <div class="input-group-prepend">--}}
{{--                            <span class="input-group-text">--}}
{{--                                <i class="fa fa-user"></i>--}}
{{--                            </span>--}}
{{--                        </div>--}}

{{--                        <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">--}}

{{--                        @if($errors->has('email'))--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                {{ $errors->first('email') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                    <div class="input-group mb-3">--}}
{{--                        <div class="input-group-prepend">--}}
{{--                            <span class="input-group-text"><i class="fa fa-lock"></i></span>--}}
{{--                        </div>--}}

{{--                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">--}}

{{--                        @if($errors->has('password'))--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                {{ $errors->first('password') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                    <div class="input-group mb-4">--}}
{{--                        <div class="form-check checkbox">--}}
{{--                            <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />--}}
{{--                            <label class="form-check-label" for="remember" style="vertical-align: middle;">--}}
{{--                                {{ trans('global.remember_me') }}--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-6">--}}
{{--                            <button type="submit" class="btn btn-primary px-4">--}}
{{--                                {{ trans('global.login') }}--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 text-right">--}}
{{--                            @if(Route::has('password.request'))--}}
{{--                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">--}}
{{--                                    {{ trans('global.forgot_password') }}--}}
{{--                                </a><br>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


@endsection
