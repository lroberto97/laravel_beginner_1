{{-- With extends('name') we call the view we want to include --}}
@extends('app')
{{-- section() allows to change the yield we defined in the view we're extending
with the following text, we use this just for one simple text --}}
@section('title', 'Services')
@section('content')
    <h1>Welcome to Laravel 6 from Services</h1>
    <p>With some aditional text from about.</p>

    {{-- ul>li{Services $}*3 shortcut emmet --}}
    <ul>
        <li>Services 1</li>
        <li>Services 2</li>
        <li>Services 3</li>
    </ul>
@endsection