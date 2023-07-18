@extends('layout.main')

@section('title', "home")

@section('content')
<div class="container mb-5">
  <h1>Hello, world!</h1>
  <p>Hello i'm {{ $name }} my Role {{ $role }}</p>
  <br>
  <h3>This is my team</h3>

  <table class="table">
      <tr>
          <th>No</th>
          <th>Name</th>
      </tr>

      @foreach ($team as $data)
          <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $data }}</td>
          </tr>
      @endforeach

    </table>
</div>
@endsection
