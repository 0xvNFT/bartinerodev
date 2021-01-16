{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.app')

@section('content')

<section id="dashboard">
    <div class="container">

        <div class="nav justify-content-between">
            <div class="greeting">
                <h1>Welcome, {{ auth()->user()->firstname }}!</h1>
                <p><i class="fas fa-location-arrow"></i>{{ auth()->user()->barangay }}</p>
            </div>
        </div>

        <div class="wrapper">

            {{-- Posts --}}
            <div class="dashboard-grid">

                <h3>Your active listings</h3>

                <div class="messages">
                    @include('inc.messages')
                    @yield('content')
                </div>

                @if ($posts->count())
            
                @foreach ($posts as $post)

                <div class="listings">

                    <h5><a href="/items/{{$post->id}}">{{ $post->title }}</a></h5>
                    <p>{{ $post->category }} • {{ $post->created_at->diffForHumans() }}</p>

                    <div class="listings-footer d-flex">
                        
                        <a href="/items/{{$post->id}}/edit" class="btn"><i class="fas fa-edit"></i>Edit</a>

                        <form action="{{ route('items.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn"><i class="fas fa-trash"></i>Delete</button>
                        </form>
                    </div>
                    

                </div>

    

            @endforeach

            @else

            <p>There are currently no active listings.</p>

            @endif 
                    

            </div>

            {{-- Messages --}}
            <div class="dashboard-grid d-flex justify-content-center align-items-center">

                <h1>No new messages.</h1>

            </div>

            {{-- Account --}}
            <div class="account-grid">

                <h3>Account</h3>

                <ul>
                    <li><a href="">Reset Password</a></li>
                    <li><a href="">Enable 2FA</a></li>
                    <li><a href="">Upload Avatar</a></li>
                </ul>
    
                {{-- <div class="avatar">
    
                    <div class="card-body">
                        <form action="/upload" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" id="avatar">
                            <input type="submit" value="upload">
                        </form>
                    </div> 
    
                </div>
     --}}
            </div>

        </div>

       
            

      
    

    </div>
</section>

@endsection