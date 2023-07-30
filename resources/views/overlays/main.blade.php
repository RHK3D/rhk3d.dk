<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/overlay.js')
</head>
<body>
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
            <!--div class="bg-black backdrop-blur-sm rounded-md bg-opacity-90 p-2 ml-2">
                <h1 class="text-lg font-medium">Højde over havet</h1>
                <p id="altitude" class="text-2xl font-semibold"></p>
            </div-->
            <div class="bg-black backdrop-blur-sm rounded-md bg-opacity-90 p-2 ml-2" id="speedometer-container">
                <h1 class="text-lg font-medium">Hastighed (BETA)</h1>
                <p id="speedometer" class="text-2xl font-semibold"></p>
            </div>
        </div>
    </div>
    <div class="absolute bottom-4 right-4 p-2 flex flex-col rounded-md">
        <span class="text-5xl text-blue-800 font-semibold">RHK3D</span>
    </div>
</body>
</html>
