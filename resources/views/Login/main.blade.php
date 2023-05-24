@extends('Layouts/LogReg')
@section('title', 'Sign In - Sistem Informasi Moora')
@section('section')
<div class="container">
    <div class="signin-content">
        <div class="signin-image">
            <figure><img src="{{ asset('styleLog/images/signin-image.jpg')}}" alt="sing up image"></figure>
            <a href="#" class="signup-image-link">Create an account</a>
        </div>

        <div class="signin-form">
            <h2 class="form-title">Sign In</h2>
            <form action="/login" method="POST" class="register-form" id="login-form">
                @csrf
                <div class="form-group">
                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="name" id="name" placeholder="Your Name" />
                </div>
                <div class="form-group">
                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                    <input type="password" name="password" id="password" placeholder="Password" />
                </div>
                <div class="form-group form-button">
                    <input type="submit" class="form-submit" />
                </div>
            </form>
            <div class="social-login">
                <ul class="socials">
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection