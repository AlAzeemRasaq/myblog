@extends('layouts.app')

    @section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="w-4/5 m-auto text-center">
            <div class="py-15 border-b border-gray-200 font-extrabold text-white">
                <h1 class="text-6xl">
                    Discord Servers
                </h1>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-3 gap-6 flex text-center">
        <div>
            <h2 class="font-bold text-5xl">Razer</h2>
            <iframe src="https://discord.com/widget?id=342761229544194048&theme=dark" width="600" height="500" allowtransparency="true" frameborder="0"></iframe>
        </div>
        <div>
            <h2 class="font-bold text-5xl">ASUS ROG</h2>
            <iframe src="https://discord.com/widget?id=548423355213021184&theme=dark" width="600" height="500" allowtransparency="true" frameborder="0"></iframe>
        </div>
        <div>
            <h2 class="font-bold text-5xl">AORUS</h2>
            <iframe src="https://discord.com/widget?id=469999230162042881&theme=dark" width="600" height="500" allowtransparency="true" frameborder="0"></iframe>
        </div>
        <div>
            <h2 class="font-bold text-5xl">Logitech G</h2>
            <iframe src="https://discord.com/widget?id=1110612021877153902&theme=dark" width="600" height="500" allowtransparency="true" frameborder="0"></iframe>
        </div>
        <div> 
            <h2 class="font-bold text-5xl">NZXT</h2>
            <iframe src="https://discord.com/widget?id=238090316320604161&theme=dark" width="600" height="500" allowtransparency="true" frameborder="0"></iframe>
        </div>
        <div>
            <h2 class="font-bold text-5xl">Elgato</h2>
            <iframe src="https://discord.com/widget?id=581549424518365226&theme=dark" width="600" height="500" allowtransparency="true" frameborder="0"></iframe>
        </div>
    </div>
@endsection
