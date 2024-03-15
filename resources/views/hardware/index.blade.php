@extends('layouts.app')

    @section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="background-image grid grid-cols-1 m-auto w-full">
            <div class="py-15 border-b border-gray-200">
                <h1 class="text-6xl font-extrabold text-white">
                    Hardware Trailers
                </h1>
            </div>
        </div>
        <div class="gap-4">
            <div
                class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden"
                style="padding-top: 56.25%">
                <iframe
                    class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"
                    src="https://www.youtube.com/embed/wCVPIY2bzIM"
                    allowfullscreen=""
                ></iframe>
            </div>
        </div>

        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl font-bold">
                Other Hardware Trailers
            </h1>
        </div>

        <div class="gap-4 grid grid-cols-3 gap-4">
            <div class="bg-gray-200 rounded-lg overflow-hidden w-full h-80 text-center align-middle font-bold">
                <div
                    class="embed-responsive embed-responsive-16by9 relative w-full"
                    style="padding-top: 56.25%">
                    <iframe
                        class="embed-responsive-item absolute left-0 top-0 h-full w-full"
                        src="https://www.youtube.com/embed/puyBMRWW5nA"
                        allowfullscreen=""
                    ></iframe>
                </div>
                <p>Razer Huntsman V3 Pro Trailer</p>
            </div>
            <div class="bg-gray-200 rounded-lg overflow-hidden w-full h-80 text-center align-middle font-bold">
                <div
                    class="embed-responsive embed-responsive-16by9 relative w-full"
                    style="padding-top: 56.25%">
                    <iframe
                        class="embed-responsive-item absolute left-0 top-0 h-full w-full"
                        src="https://www.youtube.com/embed/qWgkUaHAa2c"
                        allowfullscreen=""
                    ></iframe>
                </div>
                <p>ASUS ROG Strix laptops 2022</p>
            </div>
            <div class="bg-gray-200 rounded-lg overflow-hidden w-full h-80 text-center align-middle font-bold">
                <div
                    class="embed-responsive embed-responsive-16by9 relative w-full"
                    style="padding-top: 56.25%">
                    <iframe
                        class="embed-responsive-item absolute left-0 top-0 h-full w-full"
                        src="https://www.youtube.com/embed/DflFFBM3qPU"
                        allowfullscreen=""
                    ></iframe>
                </div>
                <p>GIGABYTE AORUS 16X 2024</p>
            </div>
            <div class="bg-gray-200 rounded-lg overflow-hidden w-full h-80 text-center align-middle font-bold">
                <div
                    class="embed-responsive embed-responsive-16by9 relative w-full"
                    style="padding-top: 56.25%">
                    <iframe
                        class="embed-responsive-item absolute left-0 top-0 h-full w-full"
                        src="https://www.youtube.com/embed/ewOziFlcU34"
                        allowfullscreen=""
                    ></iframe>
                </div>
                <p>NZXT H5 PC Cases.</p>
            </div>
            <div class="bg-gray-200 rounded-lg overflow-hidden w-full h-80 text-center align-middle font-bold">
                <div
                    class="embed-responsive embed-responsive-16by9 relative w-full"
                    style="padding-top: 56.25%">
                    <iframe
                        class="embed-responsive-item absolute left-0 top-0 h-full w-full"
                        src="https://www.youtube.com/embed/s5lq4Q7YAjE"
                        allowfullscreen=""
                    ></iframe>
                </div>
                <p>Behold, the ASUS ROG Ally</p>
            </div>
            <div class="bg-gray-200 rounded-lg overflow-hidden w-full h-80 text-center align-middle font-bold">
                <div
                    class="embed-responsive embed-responsive-16by9 relative w-full"
                    style="padding-top: 56.25%">
                    <iframe
                        class="embed-responsive-item absolute left-0 top-0 h-full w-full"
                        src="https://www.youtube.com/embed/fmSmcSfC5fk"
                        allowfullscreen=""
                    ></iframe>
                </div>
                <p>Acer Nitro 5 2022</p>
            </div>
            
        </div>
    </div>

@endsection
