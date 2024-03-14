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
                Example of a Gamer Discord Server:
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                This is the Razer Discord Server.
            </p>

            <body>
                <iframe src="https://discord.com/widget?id=342761229544194048&theme=dark" width="600" height="500" allowtransparency="true" frameborder="0"></iframe>
            </body>
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

    <div class="text-center py-15 bg-grey text-white">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Map of Gamers
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>

        <!-- Google Maps -->
        <div id=map></div>
        <script src=https://maps.googleapis.com/maps/api/js?key=AIzaSyA7t2cRC1VnrMEJq59mYMSyjwdmMejdoOE&loading=async&callback=loadMap&libraries=marker></script>       		
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Map of Gamers
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>     		

                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection
