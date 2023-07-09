<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Document</title>
</head>

<body>
    {{-- Navbar --}}
    <div class="w-screen h-18 bg-gray-800 px-14 py-4">
        <div class="flex justify-between">
            <div class="text-white font-bold text-lg">Sea Cinemas</div>
            <form action="">
                <input type="text"
                    class="ml-4 border-2 rounded-xl w-72 h-8 appearance-none leading-tight focus:outline-none focus:shadow-outline">
            </form>
            <div class="flex text-gray-400 justify-items-center items-center rounded">
                <ion-icon name="settings" class="text-4xl mr-2"></ion-icon>
                <button
                    class="text-2xl rounded-lg bg-gray-600 px-2 py-1 flex items-center justify-center"><span>Login</span></button>
            </div>
        </div>
    </div>
    {{-- End Navbar --}}

    @yield('contain')
</body>

</html>
