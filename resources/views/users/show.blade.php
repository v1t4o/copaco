@extends('master')

@section('content_header')
  <h1>{{ $user->username }} </h1>
@stop

@section('content')
    @include('messages.flash')
    @include('messages.errors')
<div>
    <a href="{{action('App\Http\Controllers\UserController@edit', $user->username )}}" class="btn btn-warning">Editar</a>
</div>
<br>
<div class="card">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Nome:</b> {{ $user->name }}</li>
    <li class="list-group-item"><b>Email:</b> {{ $user->email }}</li>
    <li class="list-group-item"><b>Grupos:</b>
        <ul>
            @foreach ( $user->roles()->get() as $role)        
                <li><a href="/roles/{{ $role->id }}"> {{ $role->nome }} </a></li>
            @endforeach
        </ul>
     </li>
  </ul>
</div>
<br>
<div>
    <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
</div>

@stop

