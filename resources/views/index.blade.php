@extends('layouts.app')

<style>
    #map
    {
        width:1280px;
        height:720px;
        border:thin solid #ccc;
    }
</style>

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Gamers don't die. They respawn.
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-green-700 py-2 px-4 font-bold text-xl uppercase">
                    Enter the blog.
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 bg-gray text-white">
        <div>
            <img src="https://cdn.mos.cms.futurecdn.net/WUQFsuWeup4yVTTivCMXKe.jpg" width="2500" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                What does it feel like to be a gamer?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Well, anyone of any race, gender, sexuality, etc. can be a gamer. Being a gamer is pretty enjoyable, whether on PC or console (or sometimes mobile). There is also a faction online known as the PC master race, who compare themselves to console gamers, for bad reasons.
            </p>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            This blog is brought to you by...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Al-Azeem Abdul Rasaq
        </span>
    </div>

    <div class="text-center py-15 bg-blue-900 text-white font-extrabold text-4xl">
        <span class="uppercase text-s text-gray-400">
            About Me
        </span>     		
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-blue-500 rounded-lg text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <h3 class="text-xl font-bold py-10">
                    As some of you may or may not know, I am a passionate gamer. In fact, I own a PS5 and gaming laptop. I've been fascinated with gaming ever since I was a kid.
                </h3>
                <h5>
                    Image taken from Reddit
                </h5>     		
            </div>
        </div>
        <div>
            <img src="https://i.redd.it/5s54k4ifzm1b1.jpg" alt="">
        </div>
    </div>
@endsection
