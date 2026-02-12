@extends('task.layout')
@section('title-name')
Daily Tasks
@endsection
@section('content')
<!-- pass a success messages  -->
@if(Session('success'))
<div class="alert alert-success">
<span>{{session('success')}}</span>
</div>
@endif
 @foreach($editdata as $row) 
  <div class="task-card task-important">
    <form method="post">
        @csrf
    <div class="task-info">
      <div>
        <strong><input
            type="text"
            id="id"
            name="title" value="{{$row->title}}"
            placeholder="placeholder"
            class="w-[300px] border border-slate-200 rounded-lg py-3 px-5 outline-none	bg-transparent"
        /></strong>
        <br>
        <p>Assign Users :<input
            type="text"
            id="id"
            name="title" value="{{$row->assignto}}"
            placeholder="placeholder"
            class="w-[300px] border border-slate-200 rounded-lg py-3 px-5 outline-none	bg-transparent"
        /></strong></p>
        <div class="small">{{$row->start_time}} - {{$row->end_time}}</div>
      </div>
    </div>
</form>
   
  </div>
 @endforeach

@endsection