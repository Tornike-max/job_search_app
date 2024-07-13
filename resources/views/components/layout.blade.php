<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-black text-white pb-16">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href='#'>
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="logo" />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a class="hover:text-blue-600 duration-200 transition-all" href="#">Jobs</a>
                <a class="hover:text-blue-600 duration-200 transition-all" href="#">Careers</a>
                <a class="hover:text-blue-600 duration-200 transition-all" href="#">Salaries</a>
                <a class="hover:text-blue-600 duration-200 transition-all" href="#">Companies</a>

            </div>
            @auth
            <div class="font-semibold flex items-center gap-4">
                <a class="hover:text-blue-600 duration-200 transition-all" href="{{route('jobs.create')}}">Post a
                    jobs
                </a>
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    @method('delete')
                    <button class="hover:text-blue-600 duration-200 transition-all">Logout</button>
                </form>
            </div>
            @endauth
            @guest
            <div class="font-semibold flex items-center gap-4">
                <a class="hover:text-blue-600 duration-200 transition-all" href="{{route('loginpage')}}">Login</a>
                <a class="hover:text-blue-600 duration-200 transition-all" href="{{route('registerpage')}}">Register</a>
            </div>
            @endguest

        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>

</html>