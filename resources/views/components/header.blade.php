
<nav class="sticky">
    <div class="row">
        <img src="{{asset('house/resources/images/huz1.jpg')}}" alt="huz-tinz" class="logo">
            <ul class="main-nav">
                <li> <a href="/"> Home </a> </li>
                <li> <a href="{{route('about')}}"> About_Us </a> </li>
                <li> <a href="{{route('accommodation.index')}}"> Accommodation </a> </li>
                @if(!auth()->check())
                    <li> <a href="{{route('register')}}"> Sign_Up</a> </li>
                    <li> <a href="{{route('login')}}"> Log_in</a> </li>
                @else
                    <li><a href="#">{{auth()->user()->name}}</a> </li>
                    <li>
                        <a href="{{route('logout')}}"
                            onclick="id = document.getElementById('logout'); id.preventDefault().submit();">Logout</a> </li>
                    <form action="{{route('logout')}}" method="post" style="display: none;" id="logout">
                        {{csrf_field()}}

                    </form>
                @endif
        </ul>
    </div>
</nav>
