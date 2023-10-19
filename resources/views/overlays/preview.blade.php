<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview overlay - RHK3D</title>
    <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/overlay.js')
</head>
<body>

    <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            </div>
            <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="text-white text-sm font-medium px-3 py-2">Lokal tid: <span class="font-normal">12:34</span></a>
                <a href="#" class="text-white text-sm font-medium px-3 py-2">Lokation: <span class="font-normal">Skanderborg, DK</span></a>
                <a href="#" class="text-white text-sm font-medium px-3 py-2">Hastighed: <span class="font-normal">79 km/t</span></a>
            </div>
            </div>
        </div>
    </div>
    </nav>

    <div class="flex justify-center">
        <div class="flex flex-row text-red-600 mt-4">
            <div class="bg-black backdrop-blur-sm rounded-md bg-opacity-90 p-2">
                <h1 class="text-lg font-medium">Lokal tid</h1>
                <p id="clock" class="text-2xl font-semibold">00:00</p>
            </div>
            <div class="bg-black backdrop-blur-sm rounded-md bg-opacity-90 p-2 ml-2">
                <h1 class="text-lg font-medium">Lokation</h1>
                <p id="city" class="text-2xl font-semibold">...</p>
            </div>
            <div class="bg-black backdrop-blur-sm rounded-md bg-opacity-90 p-2 ml-2" id="speedometer-container">
                <h1 class="text-lg font-medium">Hastighed (BETA)</h1>
                <p id="speedometer" class="text-2xl font-semibold"></p>
            </div>
        </div>
    </div>
    <div class="hidden absolute bottom-4 right-4 p-2 flex flex-col rounded-md">
        <span class="text-5xl text-blue-800 font-semibold">RHK3D</span>
    </div>
</body>
</html>
