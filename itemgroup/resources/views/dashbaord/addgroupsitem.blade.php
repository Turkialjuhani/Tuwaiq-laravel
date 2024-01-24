@extends('layouts.dashbaord')
@section('content')
<div class="containar">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1 class="alert alert-success text-center">أضافة مجموعات الأصناف </h1>
               <div class="card">
                  <div class="card-body">
                  <form action="{{route('save-group-dash')}}" method="post">
                        @csrf
                        <label for="itemgroupname" class="p-2">أدخل أسم المجموعة </label>
                        <input type="text"  name="itemgroupname" id="itemgroupname">
                        <div class="row mt-3 p-3">
                            <div class="col">
                                <button class="btn btn-primary " type="submit">حفظ</button>
                            </div>
                        </div>
                    </form>
                      <table class="table">
                          <thead>
                                 <tr>
                                      <th>رقم العنصر</th>
                                      <th>أسم المجموعة</th>
                                      <th colspan="2">إجراء</th>
                                        
                                 </tr>
                         </thead>
                         <tbody>
                         @foreach($data as $row)
                         <tr>
                             <th>{{$row->id}}</th>
                             <th>{{$row->itemgroupname}}</th>
                             <th><a href="{{route('deletegroupdash',['x'=>$row->id])}}"><i class="bi bi-trash3"></i></a></th>
                             </tr>
                          @endforeach
                       </tbody>



        </table>
    </div>
</div>
</div>
</div>
</div>

@endsection