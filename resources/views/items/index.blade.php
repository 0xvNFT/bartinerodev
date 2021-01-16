@extends('layouts.app')

@section('content')

    <section id="new-deals">

        <div class="container">

            <div class="deals-header d-flex justify-content-between">
                <div class="section-header">
                    <h1>Latest deals</h1>
                </div>
                <div class="sorting d-flex">
                    <h4>Sort by date</h4>
                    <h4>Sort by category</h4>
                </div>
            </div>

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

                    <h1>There are currently no active listings.</h1>

                    <p>There are currently no active listings.</p>

                    @endif

            </div>

        </div>


    </section>


@endsection


