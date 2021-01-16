@extends('layouts.app')

@section('content')

<section id="hero">
    <div class="container">

        <div class="row align-items-center justify-content-center">
            {{-- Left Column --}}
            <div class="col-lg-4">
                <h1>A hub for the<br>Las Piñas barter<br>community.</h1>

                {{-- Buttons --}}
                <div class="hero-cta">
                    <a href="#about" class="cta-regular">Why barter?</a>
                    <a href="/register" class="cta-filled">Start bartering now</a>
                </div>
            </div>

            {{-- Right Column --}}
            <div class="col-lg-4">
                <img class="img-fluid" src="{{ asset('img/barter-arrows-alt.png') }}" alt="">
            </div>
        </div>
        
    </div>
</section>

<section id="hero-byline">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-3 d-flex align-items-baseline">

                <div class="d-flex justify-content-center align-items-center byline-icon">
                    <i class="fas fa-plus"></i>
                </div>

                <div class="byline-text">
                    <h1>Post a deal.</h1>
                    <p>Barter old or new items. Even services.</p>
                </div>
                    
            </div>

            <div class="col-lg-3 d-flex align-items-baseline">

                <div class="d-flex justify-content-center align-items-center byline-icon">
                    <i class="fas fa-mouse-pointer"></i>
                </div>

                <div class="byline-text">
                    <h1>Choose an offer.</h1>
                    <p>Plenty of options to choose from.</p>
                </div> 

            </div>

            <div class="col-lg-3 d-flex align-items-baseline">

                <div class="d-flex justify-content-center align-items-center byline-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                
                <div class="byline-text">
                    <h1>Trade with ease.</h1>
                    <p>Communicate within the site.</p>
                </div>
                
            </div>

        </div>

    </div>
</section>

<section id="product-categories">

    <div class="container">

        <h1>Look for the things you need</h1>
        <p>Choose among these categories for new or used items and services</p>

        <div class="row justify-content-around">

            <div class="col">
                <a href="/">
                    <i class="fas fa-utensils"></i>
                    <h3>Food</h3>
                </a>
            </div>

            <div class="col">
                <a href="/">
                    <i class="fas fa-mobile"></i>
                    <h3>Electronics</h3>
                </a>
            </div>

            <div class="col">
                <a href="/">
                    <i class="fas fa-leaf"></i>
                    <h3>Gardening</h3>
                </a>
            </div>

            <div class="col">
                <a href="/">
                    <i class="fas fa-tshirt"></i>
                    <h3>Clothing</h3>
                </a>
            </div>

            <div class="col">
                <a href="/">
                    <i class="fas fa-tools"></i>
                    <h3>Services</h3>
                </a>
            </div>

            <div class="col">
                <a href="/">
                    <i class="fas fa-car"></i>
                    <h3>Automotives</h3>
                </a>
            </div>

            <div class="col">
                <a href="/">
                    <i class="fas fa-heart"></i>
                    <h3>Wellness</h3>
                </a>
            </div>

            <div class="col">
                <a href="/">
                    <i class="fas fa-couch"></i>
                    <h3>Furniture</h3>
                </a>
            </div>

            <div class="col">
                <a href="/">
                    <i class="fas fa-shapes"></i>
                    <h3>Others</h3>
                </a>
            </div>

        </div>

    </div>

</section>

<section id="latest-deals">

    <div class="container">

        <h1>Check out these latest deals</h1>
        <p>Start trading with a Las Piñero</p>

        <div class="wrapper">
            
            @if ($posts->count())
            
            @foreach ($posts as $post)

            <div class="card">

                
                
                <div class="card-top">
                    <img src="/storage/img/{{$post->images}}" alt="" class="card-img-top">
                </div>
                
                <div class="card-body">
                    <p>{{ $post->user->username }} • {{ $post->category }} • {{ $post->created_at->diffForHumans() }}</p>
                    <h5 class="card-title">
                        <a href="/items/{{$post->id}}">{{ $post->title }}</a>
                    </h5>
                </div>
            </div>

    

            @endforeach

            @else

            <p>There are currently no active listings.</p>

            @endif 
       
        </div>

        <div class="ld-cta justify-content-center d-flex"><a href="/items" class="cta-regular">View more posts</a></div>

    </div>

</section>

<section id="about">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            Bartering doesn't<br>involve money.
                        </h1>
                        <p>Trade an item you own or service you can render for what you want or need.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            Bartering is<br>environment-friendly.
                        </h1>
                        <p>It not only saves money but also helps reduce waste.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            Bartering empowers<br>your community.
                        </h1>
                        <p>Forge and strengthen your relationships with neighbors and friends in the Las Piñas area.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="cta-footer d-flex align-items-center justify-content-center">
            <a href="/about" class="cta-regular">Read more about Bartinero</a>
            <a href="/register" class="cta-filled">Join the Las Piñas barter community</a>
        </div>

    </div>
</section>

           
 

@endsection