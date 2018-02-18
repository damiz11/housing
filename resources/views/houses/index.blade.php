<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 2/18/18
 * Time: 7:33 AM
 */
?>
@extends('layouts.app')
@section('header')
    @include('components.header')
    <div class="hero-text-box">
        <h1>Excellent Accommodation. <br>Your Comfort and Satisfaction is our First Priority.</h1>
        <div class="inline-fields">
            <div class="fields">
                <input type="text" placeholder="Search for your Home">
            </div>


            <a class="btn btn-full" href="# "> Search </a>
        </div>

        <!--            <a class="btn btn-ghost" href="# "> Show me more </a>-->

    </div>
@endsection

@section('main')
    <section class="section-cities">
        <div class="row">
            <h2>
                Available Properties
            </h2>

        </div>

        <div class="row">
            <?php $x =1;?>
            @foreach($houses as $house)
                <div class="col span-1-of-4 box">
                    <img src="{{asset('house/resources/images/lisbon-3.jpg')}}" alt="lisbon">
                    <h3>{{$house->location}} <br> {{$house->type}}
                    </h3>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i> 08056748356</div>

                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i> #{{$house->price}} / year</div>

                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i><a href="#">@yahoo.com</a></div>
                </div>
                @if($x % 4 ==0)
                    </div>
                    <div class="row">
                @endif
                        <?php $x++;?>
            @endforeach
        </div>
    </section>
@endsection

@section('footer')

    @include('components.footer')
@endsection
