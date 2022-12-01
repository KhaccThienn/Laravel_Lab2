@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            @forelse ($products as $item)
                <div class="col-lg-3  mt-5">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $item->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $item->name }}
                            </h5>
                            <p class="card-text">
                                {{ $item->price }}
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @empty
                <h3>0 Data Returned</h3>
            @endforelse
        </div>
    </div>
@endsection
