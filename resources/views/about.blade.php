@extends('layouts.default')

@section('main')
<div class="min-h-screen flex items-center justify-center px-4">

    <div class=" flex  flex-col gap-10   pt-20 border-2 border-blue-200 px-20 shadow-md rounded-2xl  pb-20 " >
        <h1 class=" text-4xl font-extrabold text-blue-800 text-center ">About Us</h1>
        <div class="text-lg font-medium ">
            @include('aboutparg')

</div>
</div>
</div>
@endsection
