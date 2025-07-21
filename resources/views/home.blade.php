@extends('layouts.default')
@section('main')
<div class="min-h-screen">

    <div class="flex flex-col sm:flex-row items-center justify-center gap-6 p-6 border-2 px-10  py-20 rounded-2xl  mt-20 ">
        <div>
            
            <img src="{{ asset('images/instagram-.jpg') }}" alt="Instagram Preview" 
            class="rounded-lg shadow-md " />
        </div>
        
        <div class="text-center sm:text-left">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{$header}}</h1>
        <p class="text-lg text-gray-600 mb-4">
            Stay connected and inspired with our latest updates on Instagram. From behind-the-scenes looks to daily tips,
            our page is a blend of creativity, authenticity, and community. Whether you're here for motivation, fun, or just to explore,
            you're always welcome!
        </p>
        <p class="text-md text-gray-500">
            Join our growing family and never miss a moment.
            
            <span class="font-semibold text-blue-600">#RealMoments #OurJourney</span>
        </p>
        
        
        <p>
            
            <a href="https://instagram.com"  
            class="py-4 px-4 mt-4  bg-blue-600 hover:opacity-[90%] rounded-xl transition-all duration-0.5 inline-block font-semibold">
            Visit Our Instagram
        </a>
    </p>
</div>

</div>
</div>
@endsection