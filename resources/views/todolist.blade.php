@extends('layout')
@section('title', 'To Do List')
@section('content')
<div id="myDIV" class="header">
    <h2 style="margin:5px">My To Do List</h2>
    <input type="text" id="myInput" placeholder="Title...">
    <span onclick="newElement()" class="addBtn">Add</span>
  </div>
  
  <ul id="myUL">
    <li>Hit the gym</li>
    <li class="checked">Pay bills</li>
    <li>Waking</li>
    <li>Organize office</li>
  </ul>
  
<script src="{{asset('javascript/todolist.js')}}"></script>
@endsection