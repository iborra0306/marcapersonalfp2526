@extends('dopetrope.master')

@section('menu')
    @parent
    <p>¡Hola {{ $nombre ?? 'colega' }}!</p>
@endsection

@section('content')
    <ul>
            @if( count($users) === 1 )
                Solo hay un usuario!
            @elseif (count($users) > 1)
                <li>Hay muchos usuarios!</li>
                @include('users.usersList', ['users' => $users])
            @else
                <li>No hay ningún usuario :(</li>
            @endif
        </ul>
@endsection
