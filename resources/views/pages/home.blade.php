@extends('layouts.base', ['title' => 'gatekeeper'])
@section('content')
    <section class="pt-20 py-20">
        <h1 class="text-5xl font-display text-orange-500 tracking-widest">GATEKEEPER</h1>
        <div class="my-10 text-black font-inter font-extrabold text-xl">
        @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="p-2 border-2 border-black rounded-lg shadow-md">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="p-2 rounded-lg underline hover:text-orange-500 italic">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    <section>
@endsection