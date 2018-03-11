@extends('layouts.app')

@section('header')
    @include('components.header')
    <p>
    <div>
        <form action="{{route('login')}}" method="post">
            {{csrf_field()}}
            <h1>Login</h1>
            <fieldset>
                <div class="login"> <br>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                            </ul>
                        </div>
                    @endif
                    <legend><span class="number">1</span>You're Welcome</legend>
                    <label for="mail">Email:</label>
                    <input type="email" id="mail" name="email">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                    <a href="#" id="forgot-password-link" class="forgot-password-link">
                        Forgot Password?
                    </a>
                    <div class="sign_up">
                        Need an account? <a href="{{route('register')}}">Sign up now!</a>
                    </div>
                </div>
            </fieldset>
            <button type="submit">Login</button>
        </form>
    </div>
    </p>

    @endsection
@section('main')
    <p>

    </p>
@endsection

@section('footer')
    @include('components.footer')
    @endsection
