<h1>Add New Customer</h1>

<form action="/customers" method="post">
    {{-- Includig html from other view --}}
    @include('customer.form')
    <button>Add New Customer</button>
</form>
