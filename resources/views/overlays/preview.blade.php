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

    <nav class="bg-black border-b-4 border-sky-600">
    <div class="mx-auto">
        <div class="relative flex h-10 items-center justify-between">
        <div class="flex flex-1 items-center justify-center sm:items-stretch">
            <div class="flex flex-shrink-0 items-center">
                <div class="flex space-x-2">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="text-white text-md font-medium px-3">Lokal tid: <span id="clock" class="font-normal">00:00</span></a>
                    <a href="#" class="text-white text-md font-medium px-3">Lokation: <span id="city" class="font-normal">...</span></a>
                    <a href="#" class="text-white text-md font-medium px-3">Hastighed: <span id="speedometer" class="font-normal">0 km/t</span></a>
                    <a href="#" class="text-white text-md font-medium px-3">Temperatur: <span id="temperature" class="font-normal">0 °C</span></a>
                </div>
            </div>
        </div>
    </div>
    </nav>

</body>
</html>
