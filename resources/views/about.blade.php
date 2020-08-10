{{-- With extends('name') we call the view we want to extend to use as a base --}}
@extends('app')
{{-- section() allows to change the yield we defined in the view we're extending
with the following text, we use this just for one simple text --}}
@section('title', 'About Us Page')
{{-- For more than a text, for example html, we use @endsection to
enclose a full section --}}
@section('content')
    <h1>Welcome to Laravel 6</h1>
    <p>With some aditional text from about.</p>
@endsection