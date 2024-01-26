@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col">
            <table class="table table-dark table-hover">
                <thead>
                    <tr class="tr">
                        <th class="th">id</th>
                        <th class="th">Description</th>
                        <th class="th">URL</th>
                        <th class="th">Types</th>
                        <th class="th">Topics</th>
                        <th class="th">Levels</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                 <tr>
                 <th>{{$row->id}}</th>
                 <th>{{$row->description}}</th>
                 <th>{{$row->url}}</th>
                 <th>
                @foreach($row->types as $row1)
                  {{$row1}} <br>
                 @endforeach
                 </th>
                <th> @foreach($row->topics as $row1)
                 {{$row1}} <br>
                 @endforeach
                 </th>
                 <th>
                 @foreach($row->levels as $row1)
                 {{$row1}} <br>
                 @endforeach
                 </th>
                 </tr>
                @endforeach
                </tbody>
            </table>
        </div>
  
</div>








@endsection