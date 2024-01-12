@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="col-6 offset-3 bg-dark p-5 text-warning rounded">
            <div class="card text-warning bg-dark">
                <div class="card-header"><h1>Candy Detail</h1></div>
                <div class="card-body">Candy Name <h2 class="text-center">{{ $candy->name }}</h2>
                    <hr> Candy Size <h2 class="text-center">{{ $candy->size }}</h2>
                    <hr>
                    Quantity <h2 class="text-center">{{ $candy->quantity }}</h2>
                </div>
                <div class="card-footer">Candy Price <h2 class="text-center">{{ $candy->price }}</h2>
                </div>
            </div>
                <a href="{{ route('candy.home') }}" class="btn btn-lg mt-3 btn-outline-primary">Back</a>
        </div>
    </div>
@endsection
