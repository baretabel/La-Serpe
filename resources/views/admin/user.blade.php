@if(Auth::user()->role_id!=3)
 return view('serpe/403');
@endif
@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-md-2">
@include('nav/nav')
</div>
<div class="col-md-8">
<table class="table" >
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Pseudo</th>
        <th scope="col">Role</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            
       
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->pseudo}}</td>
        <td>{{$user->role->role}}</td>  
        <td><a href="/util/{{$user->id}}" class="btn btn-primary" >Utilisateur</a>
          <a href="/mod/{{$user->id}}"  class="btn btn-primary">Moderateur</a>
          <a href="/admin/{{$user->id}}"  class="btn btn-primary" >Administrateur</a></td>
      </tr> 
      @endforeach
     
    </tbody>
  </table>
 
</div>
</div>
@endsection

