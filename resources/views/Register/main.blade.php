@extends('Layouts/LogReg')
@section('title', 'Sign Up - Sistem Informasi Moora')

@section('section_up')
<div class="container">
    <div class="signup-content">
        <div class="signup-form">
            <h2 class="form-title">Sign up</h2>
            <form action="/register" method="POST" class="register-form" id="register-form">
                @csrf
                <div class="form-group">
                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="name" id="name" placeholder="Your Name" required value="{{ old('name')}}" />
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                    <input type="email" name="email" id="email" placeholder="Your Email" required value="{{ old('email')}}" />
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password"><i class="zmdi zmdi-lock"></i></label>
                    <input type="password" name="password" id="password" placeholder="Password" required />
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group form-button">
                    <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                </div>
            </form>
        </div>
        <div class="signup-image">
            <figure><img src="{{ asset('styleLog/images/signup-image.jpg')}}" alt="sing up image"></figure>
            <!-- <a href="#" class="signup-image-link">I am already member</a> -->
        </div>
    </div>
</div>
@endsection