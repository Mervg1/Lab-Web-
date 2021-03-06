@extends('layouts.main')

@section('content')

    <h1>Registro de usuario</h1>

    <form action="{{route('auth.do-login')}}" method = "POST">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <div>
            <label for="">Email</label>
            <input type="text" name='email'>
            <br>
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name='password'>
            <br>
        </div>
      
        
        <input type = 'submit' value = 'Inicio de sesion'>

        
    </form>
    

@endsection