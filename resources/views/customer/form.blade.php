@csrf
<div>
    <label for="name">Name</label>
    <input type="text" name="name"
    autocomplete="off"
    {{-- old('name') allows to storage the last data the user send
    and show it --}}
    value="{{ old('name') ?? $customer->name }}">
    {{-- Printing errors --}}
    @error('name')
        <p style="color: red">{{ $message }}</p>
    @enderror
</div>
<div>
    <label for="email">Email</label>
    <input type="text" name="email"
    autocomplete="off"
    {{-- If old() does not exist use $customer->email --}}
    value="{{ old('email') ?? $customer->email }}">
    @error('email')
        <p style="color: red">{{ $message }}</p>
    @enderror
</div>
