@extends('layouts.default')

@section('main')
@if(session('success'))
  <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4 text-center mx-4">
    {{ session('success') }}
  </div>
@endif
<div class="flex justify-center items-center min-h-screen  px-4">
  <div class="border b-2 rounded-xl shadow-lg w-full ">
    <h2 class="text-blue-700 mb-6 text-center p-8 font-bold text-2xl">Contact Us on Instagram</h2>

    <form action="{{route('instagramContactSubmit')}}" method="POST" class="flex flex-col gap-4">
      @csrf

      <div class="px-4">
        <label for="username" class="block mb-1 font-semibold text-lg ">Instagram Username</label>
        <input type="text" name="username" id="username" placeholder="your username...  "
               class=" border-2 w-full p-2 rounded-xl shadow border-gray-300"
               required>
      </div>

      <div class="px-4">
        <label for="message" class="block mb-1 font-semibold text-gray-700">Message</label>
        <textarea name="message" id="message" rows="4" placeholder="Write your message here..."
                  class=" border-2 w-full p-2 rounded-xl shadow border-gray-300"
                  required></textarea>
      </div>
<div class="text-center p-4">

    <button type="submit"
    class="cursor-pointer  bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition-all duration-200">
    Send Message
</button>
</div>
    </form>
  </div>
</div>
@endsection
