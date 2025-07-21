@extends('layouts.default')

@section('main')
<div class="flex flex-col items-center pt-16 px-6 sm:px-12 lg:px-32 max-w-7xl mx-auto">
  <h1 class="text-3xl sm:text-4xl font-extrabold text-blue-800 mb-12 text-center">Our Services</h1>

  <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 w-full">
    @foreach($services as $service)
      <li class="border border-blue-200 bg-white rounded-2xl p-6 cursor-pointer shadow-md hover:shadow-lg hover:scale-[1.02] transition-all duration-300">
        <div>
          <h2 class="text-xl font-bold text-blue-700 mb-2">{{ $service['title'] }}</h2>
          <p class="text-gray-600 leading-relaxed text-[15px]">{{ $service['description'] }}</p>
        </div>
      </li>
    @endforeach
  </ul>
</div>
@endsection
