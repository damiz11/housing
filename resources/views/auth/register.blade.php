@extends('layouts.app')

@section('header')
    @include('components.header')
    <p>
        <div>
            <form action="{{route('register')}}" method="post">
                {{csrf_field()}}

                <h1>Sign Up</h1>

                <fieldset>
                    <div class="sign_up"> <br>
                        <legend><span class="number">1</span>Your basic info</legend>
                        <div></div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="name">Name:</label>
                        <input type="text"  id="name" name="name">

                        <label for="mail">Email:</label>
                        <input type="email" id="mail" name="email">

                        <label for="number">Phone_number:</label>
                        <input type="text" id="number" name="phone">


                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">


                        <label for="re-type_password">Re-type_Password:</label>
                        <input type="password" id="re-type_password" name="password_confirmation">
                    </div>

                </fieldset>
    <p>
        <br>
    <div class="sign_up">
        already have an account! <a href="{{route('login')}}"> login!</a>
    </div>


    </p>
    <br>

    <button type="submit">Sign Up</button>
    </form>
    </div>
    </p>
    @endsection
@section('main')
@endsection
