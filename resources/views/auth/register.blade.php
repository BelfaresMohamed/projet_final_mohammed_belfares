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
                            <a href="/login" class="btn_3">Loguin</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please register in now</h3>

                            <form class="row contact_form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Username">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input class="form-control" id="email" type="email" name="email"
                                        placeholder="Email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input class="form-control" id="password" type="password" name="password" required
                                        placeholder="Password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input class="form-control" id="password_confirmation" type="password"
                                        name="password_confirmation" required placeholder="Confirm Password">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                </div>
                                <div class="col-md-12 form-group">

                                    <button type="submit" value="submit" class="btn_3">
                                        Register 
                                    </button>
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
