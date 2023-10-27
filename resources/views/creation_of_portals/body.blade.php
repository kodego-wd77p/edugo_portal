<!-- @extends('allcreator')

@section('contents')

@foreach ($creators as $creation_of_portals)

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Creators</th>
      <th scope="col">Portal Names</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $creation_of_portals->id }}</th>
      <td>{{ $creation_of_portals->creator_name }}</td>
      <td>{{ $creation_of_portals->portal_name }}</td>
      <td>{{ $creation_of_portals->portal_name }}</td>
    </tr>

  </tbody>
</table>




@endforeach

@stop -->
