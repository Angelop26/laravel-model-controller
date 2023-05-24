@extends('layout.app')

@section('content')
<div class="container">
    <div class="row row-cols-5">
        @foreach ($movies as $item)
            
        <div class="col">
            <div class="card">
                <img src="{{$item->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->title}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection