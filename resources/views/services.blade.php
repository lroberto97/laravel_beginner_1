{{-- With extends('name') we call the view we want to include --}}
@extends('app')
{{-- section() allows to change the yield we defined in the view we're extending
with the following text, we use this just for one simple text --}}
@section('title', 'Services')