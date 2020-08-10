{{-- With extends('name') we call the view we want to include --}}
@extends('app')
{{-- section() allows to change the yield we defined in the view we're extending
with the following text --}}
@section('title', 'About Us Page')