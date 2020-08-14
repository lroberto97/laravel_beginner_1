<h1>Customer Details</h1>

<div><a href="/customers">< Back</a></div>

<strong>Name</strong>
<p>{{ $customer->name }}</p>

<strong>Email</strong>
<p>{{ $customer->email }}</p>

<div>
    <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}">Edit</a>

    <form action="{{ route('customers.destroy', ['customer' => $customer->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</div>
