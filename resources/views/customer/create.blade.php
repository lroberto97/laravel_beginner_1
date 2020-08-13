<h1>Add New Customer</h1>

<form action="/customers" method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name"
        autocomplete="off"
        {{-- old('name') allows to storage the last data the user send
        and show it --}}
        value="{{ old('name') }}">
        {{-- Printing errors --}}
        @error('name')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email"
        autocomplete="off"
        value="{{ old('email') }}">
        @error('email')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>

    <button>Add New Customer</button>
</form>
