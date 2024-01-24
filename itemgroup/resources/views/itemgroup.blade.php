@extends('layouts.app')
@section('content')
<div class="container">
   <div class="card">
      <div class="card-body">
      <div class="row d-flex justify-content-center">
      <div class="col-sm-4">
         <form action="{{route('save-group')}}" method="post">
            @csrf
            <label for="itemgroupname" class="p-2">أدخل أسم المجموعة </label>
            <input type="text" class="form-control form-control-sm" name="itemgroupname" id="itemgroupname">
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
                  <th>رقم المجموعة</th>
                  <th>أسم المجموعة</th>
                  <th colspan="2">أجراء</th>
               </tr>
            </thead>
            @foreach($data as $row)
            <tr>
               <th>{{$row->id}}</th>
               <th>{{$row->itemgroupname}}</th>
               <th><a href="{{route('deletegroup',['x'=>$row->id])}}"><i class="bi bi-trash3"></i></a></th>
               <th><a href="{{route('deletegroup',['x'=>$row->id])}}"><i class="bi bi-pencil-square"></a></i></th>
            </tr>
            @endforeach
         </table>
      </div>
   </div>
  
</div>

@endsection