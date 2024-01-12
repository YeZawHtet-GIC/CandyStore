@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-6 offset-3 bg-dark p-5 text-warning rounded">
            <form action="{{ route('candy.store') }}" method="post">
                @csrf
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" placeholder="Enter Candy Name"
                    class="form-control mb-3 @error('name')
                    is-invalid
                @enderror"
                    value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="size" class="form-label">Size</label>
                <input type="text" name="size" placeholder="Enter Candy Size"
                    class="form-control mb-3 @error('size')
                    is-invalid
                @enderror"
                    value="{{ old('size') }}">
                @error('size')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" placeholder="Enter Candy Price"
                    class="form-control mb-3 @error('price')
                    is-invalid
                @enderror"
                    value="{{ old('price') }}">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" placeholder="Enter Candy quantity"
                    class="form-control mb-3 @error('quantity')
                    is-invalid
                @enderror"
                    value="{{ old('quantity') }}">
                @error('quantity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="group mt-3">
                    <a href="{{ route('candy.home') }}" class="btn btn-outline-primary">Back</a>
                    <input type="submit" value="Submit" class="btn btn-outline-success">
                </div>

            </form>
        </div>
    </div>
@endsection
