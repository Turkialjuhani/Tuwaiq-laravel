@extends('layouts.app')
@section('content')

<?php $c = 0; ?>

<div class="container">
    <h1 class="alert alert-dark text-center">SALLA STOR </h1>

    @while($c < $count)

    <div class="row text-center d-flex align-items-center justify-content-center">
        <div class="col-sm-4 text-center">
        <a href="{{route('ShowProd',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data[$c]->itemgroupname}}</h4>
                    <h3><i class="bi bi-collection" style="font-size: larger;"></i></h3>
                </div>
            </div>
        </a>
        </div>

        <?php $c++;?>
        @if($c < $count)
        <div class="col-sm-4 text-center">
        <a href="{{route('ShowProd',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data[$c]->itemgroupname}}</h4>
                    <h3><i class="bi bi-collection"></i></h3>
                </div>
            </div>
        </a>
        </div>
        <?php $c++;?>
        @endif

        @if($c < $count)
        <div class="col-sm-4 text-center">
        <a href="{{route('ShowProd',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data[$c]->itemgroupname}}</h4>
                    <h3><i class="bi bi-collection"></i></h3>
                </div>
            </div>
        </a>
        </div>
        <?php $c++;?>
        @endif
        
    </div>

    @endwhile
</div>

@endsection