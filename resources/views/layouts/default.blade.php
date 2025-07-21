<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="border-b-2 border-gray-400 mb-4 shadow-xl">

        <div class=" flex flex-col sm:flex-row gap-4 items-center p-[2rem] w-[50%] mx-auto">
            <img src="{{asset('images/instagram-.jpg')}}" alt="" class="h-[40px]">
            <div class="flex flex-row  container   items-center justify-center    ">
                
                
                
                
                <ul class=" flex flex-col  items-center justify-center font-semibold gap-10 sm:flex-row">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('contact')}}">contact</a></li>
                    
                </ul>
            </div>

</div>
        </nav>
        <div class="w-[50%] mx-auto">

            
            <main>
                @yield('main')
            </main>
            
            <footer></footer>
        </div>

</body>
</html>