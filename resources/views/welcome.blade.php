@extends('layout')
@section('title', 'Welcome')
@section('content')
    <div class="prakash">
        
        {{-- <a href="/nikash">click here</a> <br>
    <a href="/firstView">First View</a> --}}
    <ol>
        <a href="/nikash"><li>Home </li></a>
        <a href="/todolist"><li>About us</li></a>
        <li>Faculty
        </li>
       
        <a href="/news"> <li>News and Notice</li></a>
        <li>Contact us</li>
    </ol>
    </div>
    


@endsection