@extends('layout.main')

@section('title', "Student")

@section('content')
<div class="container mb-5">
  <h1>Hello, world!</h1>
  @foreach ($studentlist as $data)

  <p>{{ $data->name }}</p>

  @endforeach
@endsection
