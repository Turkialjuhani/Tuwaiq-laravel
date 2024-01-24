@extends('layouts.dashbaord')
@section('content')
<div class="container">
<div class="card">
<h1 class="alert alert-success text-center">إضافة منتج : </h1>

      <div class="card-body">
      <div class="row d-flex justify-content-center">
      <div class="col-sm-4">
         <form action="{{route('save-items-dash')}}" method="post">
            @csrf
            <label for="itemname" class="p-2">الاسم</label>
            <input type="text" class="form-control form-control-sm" name="itemname" id="itemname">
            <label for="price" class="p-2">السعر</label>
            <input type="text" class="form-control form-control-sm" name="price" id="price">
            <label for="qty" class="p-2">الكمية</label>
            <input type="text" class="form-control form-control-sm" name="qty" id="qty">
            <label for="color" class="p-2">اللون</label>
            <input type="text" class="form-control form-control-sm" name="color" id="color">
            <label for="color" class="p-2">التصنيف </label>
            <select class="form-select"  name="itemgropno" id="itemgropno" aria-label="Default select example">
            <option selected >الرجاء الاختيار من التصنيفات المتاحة</option>
            @foreach($itemgropno as $row)
            <option value="{{$row->itemgroupname}}" > {{$row->itemgroupname}}</option>
            @endforeach
            </select>
            <div class="row">
               <div class="text-center">
                  <button class="btn btn-primary mt-2"  type="submit">حفظ</button>
            </div>
         </form>
      </div>
     </div>
    </div>

   </div>
   <div class="card mt-3">
      <div class="card-body">
         <table class="table table-borderd text-center">
             <thead>
               <tr>
                  <th>الرقم  </th>
                  <th>الاسم</th>
                  <th>السعر</th>
                  <th>الكمية</th>
                  <th>اللون</th>
                  <th>المجموعة</th>
                  <th>تاريخ الاضافة</th>
                  <th colspan="2">أجراء</th>
               </tr>
            </thead>
            @foreach($data as $row)
            <tr>
               <th>{{$row->id}}</th>
               <th>{{$row->itemname}}</th>
               <th>{{$row->price}}</th>
               <th>{{$row->qty}}</th>
               <th>{{$row->color}}</th>
               <th>{{$row->itemgropno}}</th>
               <th>{{$row->created_at}}</th>
               <th><a href="{{route('deleteitemdash',['x'=>$row->id])}}"><i class="bi bi-trash3"></i></a></th>
               <th><a href="{{route('edititem',['x'=>$row->id])}}"><i class="bi bi-pencil-square"></a></i></th>
            </tr>
            @endforeach
         </table>
      </div>
   </div>
  
</div>



@endsection