{{-- With extends('name') we call the view we want to exted to use as a base--}}
@extends('app')
{{-- section() allows to change the yield we defined in the view we're extending
with the following text, we use this just for one simple text --}}
@section('title', 'Services')
@section('content')
    <h1>Welcome to Laravel 6 from Services</h1>
    <form action="/service" method="post">
        {{-- csrf protects our app to not recieve outside data --}}
        @csrf
        <input type="text" name="name" autocomplete="off"/>
        <button>Add Service</button>
    </form>
    {{-- If name does not pass the validations is gonna return an error
    message for name --}}
    <p style="color: red">@error('name'){{ $message }}@enderror</p>
    {{-- ul>li{Services $}*3 shortcut emmet --}}
    <ul>
        {{-- Using for else to print every service in our array, if
        there is no services, the empy is gonna be printed--}}
        @forelse ($services as $service)
            {{-- We use name because service is an object
                we can use the id or created_at, uopdated_at,
                the fields we have in our db --}}
            <li>{{ $service->name }}</li>
        @empty
            <li>No services available</li>
        @endforelse
    </ul>
@endsection
