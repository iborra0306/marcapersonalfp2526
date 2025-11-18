<<<<<<< HEAD
@extends('dopetrope.master')
=======
@extends('layouts.master')
>>>>>>> e6b53c483049c183d0912b88bb5d2f14776b17ca

    @section('content')
        <ul>
        @foreach ($users as $user)
            <li>Usuario {{ $user['name'] }} con identificador: {{ $user['id'] }}</li>
        @endforeach
        </ul>
    @endsection
