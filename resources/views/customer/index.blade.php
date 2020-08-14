<h1>Customer</h1>

<a href="{{ route('customers.create') }}">Add New Customer</a>
{{-- We can send a parameter even if is not defined it's taken as query --}}
<a href="{{ route('customers.index', ['active' => 1]) }}">Active</a>
<a href="{{ route('customers.index', ['active' => 0]) }}">Inactive</a>

@forelse ($customers as $customer)
    <p>
        <strong>
            {{-- Sending id in url --}}
            <a href="{{ route('customers.show', ['customer' => $customer->id]) }}">{{ $customer->name }}</a>
        </strong>
        ({{ $customer->email }})
    </p>
@empty
    <p>No Customers to show</p>
@endforelse
