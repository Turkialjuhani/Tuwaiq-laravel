@extends('layouts.app')
@section('content')

<div class="container">

<div class="card">
      <div class="card-body">
      <div class="row d-flex justify-content-center">
      <div class="col-sm-4">
         <form action="{{route('updateitem')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$item->id}}">
            <label for="itemname" class="p-2">الاسم</label>
            <input type="text" class="form-control form-control-sm" name="itemname" id="itemname" value="{{$item->itemname}}">
            <label for="price" class="p-2">السعر</label>
            <input type="text" class="form-control form-control-sm" name="price" id="price" value="{{$item->price}}">
            <label for="qty" class="p-2">الكمية</label>
            <input type="text" class="form-control form-control-sm" name="qty" id="qty" value="{{$item->qty}}">
            <label for="color" class="p-2">اللون</label>
            <input type="text" class="form-control form-control-sm" name="color" id="color" value="{{$item->color}}">
            <label for="color" class="p-2">التصنيف </label>
            <select class="form-select"  name="itemgropno" id="itemgropno" aria-label="Default select example">
            <option selected >الرجاء الاختيار من التصنيفات المتاحة</option>
            @foreach($item as $row)
            <option value="{{$item->itemgropno}}" > {{$item->itemgropno}}</option>
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
</div>

@endsection