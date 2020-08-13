<h1>Customer Details</h1>

<form action="/customers/{{ $customer->id }}" method="post">
    @csrf
    {{-- To use patch method we need to defined whith @method('METHOD'),
    and need to be post in the form because we're sending data --}}
    @method('PATCH')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name"
        autocomplete="off"
        value="{{ $customer->name }}">
        {{-- Printing errors --}}
        @error('name')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email"
        autocomplete="off"
        value="{{ $customer->email }}">
        @error('email')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>

    <button>Save Customer</button>
</form>
