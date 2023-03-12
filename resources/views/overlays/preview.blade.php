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
    <div class="absolute bottom-0 left-0 w-full h-16 flex flex-row justify-between bg-black bg-opacity-70 border-t-2 border-gray-300">
        <!-- Logo + Name -->
        <div class="flex justify-center items-center p-2">
            <img class="pr-2" src="https://via.placeholder.com/36" alt="">
            <p class="text-white text-2xl font-sans font-black">RHK3D</p>
        </div>
        <!-- Statistics -->
        <div>
            <div class="flex flex-row h-full items-center justify-center">
                <div class="flex p-2">
                    <p class="text-white text-md font-sans font-black">- Randers</p>
                </div>
                <div class="flex p-2">
                    <p class="text-white text-md font-sans font-black">- 89 km/t</p>
                </div>
            </div>
        </div>
        <!-- Clock -->
        <div class="flex flex-col items-center justify-center p-2">
            <p class="text-white text-md font-sans font-black">10:00</p>
            <p class="text-white text-md font-sans font-black">22.10.22</p>
        </div>
    </div>
</body>
</html>
