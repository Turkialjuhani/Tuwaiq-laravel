@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        @foreach($data as $row)
        <div class="card-body">
            <div class="row mt-2">
                <div class="col-sm-3">
                <img src="/image/{{$row->image}}" width="150" height="150">
                </div>
                <div class="col sm-9 text-start">
                    <h1 class="alert alert-info text-dark">{{$row->itemname}}</h1>
                    <h5>price : {{$row->price}}</h5>
                    <div class="row">
                        <div class="col text-center">
                            <a href="{{route('Addtocart',['id'=>$row->id]) }}"class="btn btn-success">Add To Card</a>
                        </div>
                         </div>

                </div>

            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection