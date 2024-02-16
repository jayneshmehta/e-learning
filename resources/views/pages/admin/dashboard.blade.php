@extends('layouts.admin')
@section('content')
@include('includes.admin.sidebar')
<h1>Dashboard</h1>
<div class="h-full ml-14  mb-10 md:ml-64">
      <div class="max-w-full h-[300px] border-1 border-blue-gray-600 rounded-2xl mx-4 my-2 ">
        <img class="object-cover  h-[300px] w-full rounded-2xl  " src="{{ url('public/images/home/pic1.jpg')}}" alt="">
      </div>
</div>
@stop