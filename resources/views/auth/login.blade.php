@extends('layouts.frontend')
@section('content')

    <!--================login_part Area =================-->
    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="/register" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>

                            <form class="row contact_form" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="col-md-12 form-group p_star">
                                    <input class="form-control"id="email" type="email" name="email"
                                        placeholder="Email" required>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input class="form-control" id="password" type="password" name="password"
                                        placeholder="Password" required>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
@endsection
