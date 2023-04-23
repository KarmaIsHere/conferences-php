<div class="form-group">
    <label for="title-input">Title:</label>
    <input id="title-input" type="text" name="title" value="{{ old('title', optional($conference ?? null)->title) }}" class="form-control">
    @error('title')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="content-input">Content:</label>
    <textarea id="content-input" name="content" class="form-control">{{ old('content', optional($conference ?? null)->content) }}</textarea>
    @error('content')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="date-input">Date:</label>
    <input id="date-input" type="date" name="date" value="{{ old('date', optional($conference ?? null)->date) }}" class="form-control" required>
    @error('date')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="address-input">Address:</label>
    <textarea id="address-input" name="address" class="form-control">{{ old('address', optional($conference ?? null)->address) }}</textarea>
    @error('address')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>

