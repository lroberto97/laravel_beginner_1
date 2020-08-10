{{-- With extends('name') we call the view we want to exted to use as a base--}}
@extends('app')
{{-- section() allows to change the yield we defined in the view we're extending
with the following text, we use this just for one simple text --}}
@section('title', 'Services')
@section('content')
    <h1>Welcome to Laravel 6 from Services</h1>
    <p>With some aditional text from about.</p>

    {{-- ul>li{Services $}*3 shortcut emmet --}}
    <ul>
        {{-- Using for else to print every service in our array, if
        there is no services, the empy is gonna be printed--}}
        @forelse ($services as $service)
            <li>{{ $service }}</li>
        @empty
            <li>No services available</li>
        @endforelse
    </ul>
@endsection