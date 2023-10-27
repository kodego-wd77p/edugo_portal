@extends('try.portal')

@section('content')

<h1>This is for the list</h1>




<div class="tab">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $users)
    <tr>
      <th scope="row">{{ $users->id }}</th>
      <td>{{ $users->name }}</td>
      <td>{{ $users->email }}</td>
      <td>{{ $users->role }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>



<li></li>



<!-- {{print_r($users)}} -->


@stop