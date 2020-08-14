<h1>Customer Details</h1>

<form action="/customers/{{ $customer->id }}" method="post">
    {{-- To use patch method we need to defined whith @method('METHOD'),
    and need to be post in the form because we're sending data --}}
    @method('PATCH')
    @include('customer.form')

    <button>Save Customer</button>
</form>
