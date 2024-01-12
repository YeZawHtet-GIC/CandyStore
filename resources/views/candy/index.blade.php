@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-6 offset-3 bg-dark p-5 text-warning rounded">
            {{-- Add Button --}}
            <div>
                <a href="{{ route('candy.create') }}" class="btn mb-3 btn-outline-success"><i
                        class="fa-regular fa-square-plus"></i></a>
            </div>
            {{-- Table Start --}}
            <table class="table table-striped table-info">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th colspan="3" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($candies as $candy)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $candy->name }}</td>
                            <td>{{ $candy->size }}</td>
                            <td>{{ $candy->price }}</td>
                            <td>{{ $candy->quantity }}</td>
                            <td><a href="{{ route('candy.show', $candy->id) }}" class="btn btn-outline-info"><i
                                        class="fa-solid fa-circle-info"></i></a></td>
                            <td><a href="{{ route('candy.edit', $candy->id) }}" class="btn btn-outline-info"><i
                                        class="fa-solid fa-pen-to-square"></i></a></td>
                            <td>
                                <form action="{{ route('candy.destroy', $candy->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach

                </tbody>
            </table>
            {{-- Table End --}}
        </div>
    </div>
@endsection
