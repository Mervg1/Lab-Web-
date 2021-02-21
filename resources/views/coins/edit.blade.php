@extends('layouts.main')

@section('content')
<h1>Edit your coin here!</h1>

<form action="{{route('coins.update', $coin->id)}}" method="POST">
    @csrf
    @method('PUT')
  <p>Short Name:<input type="text" name="short_name" value="{{$coin->short_name}}" size="20"> </p>
  <p>Long Name:<input type="text" name="name" value="{{$coin->name}}" size="40"></p>
  <input type="submit" value="Edit">
</form>

@endsection