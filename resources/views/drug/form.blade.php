@extends('layouts.sidebar')
@section('container')

<form method="post" action="{{ isset($drug) ? route('drug.update', $drug->id) : route('drug.store') }}" autocomplete="off">
    @csrf
    @if (isset($drug))
        @method('put')
    @endif

    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ isset($drug) && $drug->category_id === $category->id ? 'selected' : '' }}>
                            {{ $category->categories }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ isset($drug) ? $drug->description : old('description') }}">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control @error('image')is-invalid @enderror"
                value="{{ isset($drug)? $drug->image : old('image') }}">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                @if (@isset($menu))
                    <img src="{{ URL::to('storage/'. $drug->image) }}" alt="image" width="20%">
                @endif
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" class="form-control @error('price')is-invalid @enderror"
                value="{{ isset($menu)? $menu->price : old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('drug.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</form>
@endsection