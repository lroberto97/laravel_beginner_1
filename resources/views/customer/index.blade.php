<h1>Customer</h1>

<a href="/customers/create">Add New Customer</a>

@forelse ($customers as $customer)
    <p>
        <strong>
            {{-- Sending id in url --}}
            <a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a>
        </strong>
        ({{ $customer->email }})
    </p>
@empty
    <p>No Customers to show</p>
@endforelse
