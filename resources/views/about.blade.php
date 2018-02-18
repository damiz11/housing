<?php
/**
 * Created by PhpStorm.
 * User: kibb
 * Date: 2/18/18
 * Time: 7:22 AM
 */?>

@extends('layouts.app')

@section('header')
    @include('components.header')
    <div class="hero-text-box">
        <h1>Excellent Accommodation. <br>Is Nigeria's Leading Property Platform.</h1>
        <!-- <p> Our goal is to provide our users the best property search experience be it online or offline. To achieve this, we have created a fast and smooth online search system
        </p> -->

    </div>
@endsection

@section('main')

    <section class="section-testimonials">
        <div class="row">
            <div class="row">
                <div class="header-section">
                    <h2>About Excellent Accommodation</h2>
                    <p>
                        To be comfortable,healthy and happy is everybody's right.And it should be no different when you leave your home to start preparing yourself for your future. Here the wellbeing of students is the primary focus of all our activities.Accommodation is more
                        than four walls and a roof-it should be a home where you feel safe and comfortable. While also using technology to connect you with legitimate and verified real estate agents to ensure the offline/physical aspect of your property
                        search is equally seamless.
                    </p>
                    <br>
                    <p>
                        We acts on behalf of both parties to ensure the wellbeing of all involved in the leasing process. This has provided the company with a unique capability that enables us to facilitate almost any type of accommodation request. Irrespective of your budget,
                        housing requirements or other preferences, we will be able to find you the perfect spot where you feel at home. When your house becomes your home you are able to relax and pay attention to what really matters: Focusing on your
                        studies and preparing for your future.We also ensure your peace of mind – not only for tenants, but for their parents or guardians as well as for the owners of the properties.

                    </p><br>

                    <p>
                        SERVICES:We provides an all-inclusive off-campus student accommodation service for any housing need.Housing solutions can be tailored to the individual’s needs – irrespective of your budget. We act as an agent between owners and tenants. Services include
                        rent collection, maintenance, and cleaning services. Owners have the peace of mind that their investment works for them while we take care of the day-to-day management.
                    </p><br>
                    <p>Motto: Your comfort and satisfaction is our first priority.</p><br>

                    <section class="section-cities">
                        <div class="row">
                            <h2>
                                Our Team
                            </h2>

                        </div>
                        <div class="row">
                            <div class="col span-1-of-4 box">
                                <img src="{{asset('house/resources/images/customer-3.jpgz')}}" alt="lisbon">
                                <h3>Isaiah Bello</h3>
                                <div class="city-feature">
                                    <i class="ion-ios-person icon-small"></i> CEO & Co-Founder</div>

                                <div class="city-feature">
                                    <i class="ion-ios-star icon-small"></i> 09807757938</div>

                                <div class="city-feature">
                                    <i class="ion-social-twitter icon-small"></i><a href="#">@Excellent_lx</a></div>
                            </div>
                            <div class="col span-1-of-4 box">
                                <img src="{{asset('house/resources/images/customer-2.jpg')}}" alt="San-francisco">
                                <h3>Aina Gambo</h3>
                                <div class="city-feature">
                                    <i class="ion-ios-person icon-small"></i> CEO & Cto</div>

                                <div class="city-feature">
                                    <i class="ion-ios-star icon-small"></i> 08669745755</div>

                                <div class="city-feature">
                                    <i class="ion-social-twitter icon-small"></i> <a href="#">@Excellent_sf</a></div>
                            </div>
                            <div class="col span-1-of-4 box">
                                <img src="{{asset('house/resources/images/customer-1.jpg')}}" alt="berlin">
                                <h3>Eludiora Akhigbe</h3>
                                <div class="city-feature">
                                    <i class="ion-ios-person icon-small"></i> COO & Co-Founder</div>

                                <div class="city-feature">
                                    <i class="ion-ios-star icon-small"></i> 09797847573</div>

                                <div class="city-feature">
                                    <i class="ion-social-twitter icon-small"></i> <a href="#">@Excellent_berlin</a></div>
                            </div>
                            <div class="col span-1-of-4 box">
                                <img src="{{asset('house/resources/images/416x416.jpg')}}" alt="london">
                                <h3>Odejobi Oluwaranti</h3>
                                <div class="city-feature">
                                    <i class="ion-ios-person icon-small"></i> CBO & Co-Founder</div>

                                <div class="city-feature">
                                    <i class="ion-ios-star icon-small"></i> 098363478348</div>

                                <div class="city-feature">
                                    <i class="ion-social-twitter icon-small"></i> <a href="#">@Excellent_london</a></div>
                            </div>
                        </div>


                    </section>




                </div>
            </div>
        </div>
    </section>
    @endsection

