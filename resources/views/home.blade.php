@extends('layouts.app')

@section('header')
@include('components.header')
<div class="hero-text-box">
    <h1>Excellent Accommodation. <br>Your Comfort and Satisfaction is our First Priority.</h1>
        <div class="inline-fields">
            <div class="fields">
                 <input type="text" placeholder="House type">
            </div>


            <a class="btn btn-full" href="# "> Search </a>
        </div>

            <!-- <a class="btn btn-ghost" href="# "> Show me more </a>-->
        </div>
</div>
@endsection
@section('main')
<section class="meals">
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="{{asset('house/resources/images/1.jpg')}}" alt="korean bidimap with egg ">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="{{asset('house/resources/images/2.jpg')}}" alt="korean bidimap with egg ">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="{{asset('house/resources/images/3.jpg')}}" alt="korean bidimap with egg ">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="{{asset('house/resources/images/4.jpg')}}" alt="korean bidimap with egg ">
                </figure>
            </li>
        </ul>

        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="{{asset('house/resources/images/5.jpg')}}" alt="korean bidimap with egg ">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="{{asset('house/resources/images/6.jpg')}}" alt="korean bidimap with egg ">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="{{asset('house/resources/images/7.jpg')}}" alt="korean bidimap with egg ">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="{{asset('house/resources/images/8.jpg')}}   " alt="korean bidimap with egg ">
                </figure>

            </li>
        </ul>

    </section>

     <section class="section-cities">
        <div class="row">
            <h2>
                We're currently in these cities
            </h2>

        </div>
        <div class="row">
            <div class="col span-1-of-4 box">
                <img src="{{asset('house/resources/images/lisbon-3.jpg')}}" alt="lisbon">
                <h3>Lisbon</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icon-small"></i> 1600+ happy clients</div>

                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i> 60+ top customers</div>

                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i><a href="#">@@Excellent_lx</a></div>
            </div>
            <div class="col span-1-of-4 box">
                <img src="{{asset('house/resources/images/san-francisco.jpg')}}" alt="San-francisco">
                <h3>San-francisco</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icon-small"></i> 3700+ happy clients</div>

                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i> 160+ top customers</div>

                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i> <a href="#">@@Excellent_sf</a></div>
            </div>
            <div class="col span-1-of-4 box">
                <img src="{{asset('house/resources/images/berlin.jpg')}}" alt="berlin">
                <h3>berlin</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icon-small"></i> 2300+ happy clients</div>

                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i> 110+ top customers</div>

                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i> <a href="#">@@Excellent_berlin</a></div>
            </div>
            <div class="col span-1-of-4 box">
                <img src="{{asset('house/resources/images/london.jpg')}}" alt="london">
                <h3>London</h3>
                <div class="city-feature">
                    <i class="ion-ios-person icon-small"></i> 1200+ happy clients</div>

                <div class="city-feature">
                    <i class="ion-ios-star icon-small"></i> 50+ top customers</div>

                <div class="city-feature">
                    <i class="ion-social-twitter icon-small"></i> <a href="#">@Excellent_london</a></div>
            </div>
        </div>


    </section>
    <section class="section-testimonials">
        <div class="row">
            <h2>Our customers can't leave without us</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    We LOVE our new home and constantly tell people that if they are going to build, they need to use Excellent houses! Mike and Carl made the whole experience wonderful! I've never said that about a home building experience before. They were trustworthy
                    and FUN to work with!

                    <cite> <img src="{{asset('house/resources/images/customer-1.jpg')}}">
                    Alberto Duncan
                </cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    We LOVE our new home and constantly tell people that if they are going to build, they need to use Excellent houses! Mike and Carl made the whole experience wonderful! I've never said that about a home building experience before. They were trustworthy
                    and FUN to work with!
                    <cite> <img src="{{asset('house/resources/images/customer-2.jpg')}}">
                    Joana Silva
                </cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    We LOVE our new home and constantly tell people that if they are going to build, they need to use Excellent houses! Mike and Carl made the whole experience wonderful! I've never said that about a home building experience before. They were trustworthy
                    and FUN to work with!


                    <cite> <img src="{{asset('house/resources/images/customer-3.jpg')}}">
                    Milton Chapman
                </cite>
                </blockquote>
            </div>


        </div>


    </section>

    <section class="section-form">

<div class="row">
    <h2>
        We're happy to hear from you
    </h2>

</div>
<div class="row">

    <form method="post" action="#" class="contact-form">
        <div class="row">
            <div class="col span-1-of-3">
                <label for="name"> Name</label>
            </div>
            <div class="col span-2-of-3">
                <input type="text" name="name" id="name" placeholder="Your Name" required>
            </div>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <label for="email"> Email</label>
            </div>
            <div class="col span-2-of-3">
                <input type="email" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class=" row ">
                <div class="col span-1-of-3 ">
                    <label for="number"> Phone Number</label>
                </div>
                <div class="col span-2-of-3 ">
                    <input type="text" name="Phone-Number" id="Phone-Number" placeholder="Your Number" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <label for="find-us"> How did you find Us?</label>
            </div>
            <div class="col span-2-of-3">
                <select name="find-us" id="find-us">
                    <option value="friends" selected> friends</option>
                    <option value="search" >Search Engine</option>
                    <option value="ad">Advertisement</option>
                    <option value="other">Other</option>
               
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <label for="newsletter"> Newsletter</label>
            </div>
            <div class="col span-2-of-3">
                <input type="checkbox" name="news" id="news" checked> yes please!
            </div>
        </div>
        <div class=" row ">
            <div class="col span-1-of-3 ">
                <label> Drop us a message</label>
            </div>
            <div class="col span-2-of-3 ">
                <textarea name="message" placeholder="your message"> </textarea>
            </div>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <label> &nbsp;</label>
            </div>
            <div class="col span-2-of-3">
                <input type="submit" value="send it">
            </div>
        </div>

    </form>
</div>
</section>
@endsection


@section('footer')  
    @include('components.footer')
@endsection