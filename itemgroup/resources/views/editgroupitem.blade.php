@extends('layouts.app')
@section('content')
<div class="container">
<div class="row d-flex justify-content-center">
    <h1 class="alert alert-success"> تعديل بيانات مجموعة الاصناف </h1>
    <div class="col">
        <div class="card">
           <div class="card-body">
                 <form action="{{route('updateGroup')}}"  method="post" >
                   @csrf
                   <input type="hidden" name="id" value="{{$itemGroup->id}}">
                 <label for="namegruop" class="p-2">أسم المجموعة </label>
                 <input type="text"  name="namegruop" id="namegruop" value="{{$itemGroup->itemgroupname}}">
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