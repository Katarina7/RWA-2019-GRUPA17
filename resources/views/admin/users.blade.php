@extends('layouts.admin')

@section('content')
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ime</th>
      <th scope="col">Email</th>
      <th scope="col">Korisnička grupa</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($users as $user)
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
      	<form method="post" action="{{ route('admin.change-role', ['userId' => $user->id])}}">
      		@csrf
	      	<select name="role_id">
	      		@foreach($roles as $role)
	      			<option
	      				value="{{$role->id}}"
	      				@if($role->id === $user->role_id)
	      				selected
	      				@endif
	      			>
	      				{{$role->role_name}}
	      			</option>
	      		@endforeach
	      	</select>
	      	<span>
	      		<input type="submit" value="Change">
	      	</span>
      	</form>
      </td>
  	@endforeach
  </tbody>
</table>
@endsection