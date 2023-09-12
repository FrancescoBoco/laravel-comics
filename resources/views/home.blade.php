@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<h1>
    Homepage
</h1>


<div class="row">

    @foreach ($comics as $comic)
    <div class="col-3 mb-4">
        <div class="card">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
            <div class="card-body">
                <h2 class="text-primary">
                    {{ $comic['title'] }}
                </h2>
                <h3>
                    {{ $comic['series'] }}
                </h3>
                <h4 class="text-success">
                    {{ $comic['price'] }}
                </h4> 
                
                <a href="" class="btn btn-primary">
                    Check single comic
                </a>
            </div>
        </div>
    </div>
    
    @endforeach
</div>

@endsection
