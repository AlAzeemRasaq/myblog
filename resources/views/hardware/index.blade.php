@extends('layouts.app')

    @section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Hardware Trailers
            </h1>
        </div>

        <div class="container mx-auto px-5 py-2 lg:px-1 lg:pt-1">
            <div class="-m-1 flex flex-wrap md:-m-2">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe 
                        class="block h-full w-full rounded-lg object-cover object-center"
                        src="https://www.youtube.com/embed/wCVPIY2bzIM" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>

@endsection