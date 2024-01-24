@extends('layouts.dashbaord')

@section('content')
<div class="containar">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="alert alert-success text-center">بيانات الأصناف </h1>
          <div class="card">
          <div class="card-body">
          <table class="table">
            <thead>
            <tr>
                <th>رقم العنصر</th>
                <th>أسم العنصر</th>
                <th>أسم المجموعة</th>
                <th>الكمية</th>
                <th>السعر</th>
                <th>اللون</th>     
            </tr>
            </thead>
            <tbody>
                @if($data!=null)
                @foreach($data as $row)
                      <tr>
                <th>{{$row->id}}</th>
                <th>{{$row->itemname}}</th>
                <th>{{$row->itemgroupname}}</th>
                <th>{{$row->price}}</th>
                <th>{{$row->qty}}</th>
                <th>{{$row->color}}</th>
            </tr>
            @endforeach
            @endif
     
          
            </tbody>



        </table>
    </div>
</div>
</div>
</div>
</div>

@endsection