@extends('layouts.main')

@section('content')

    <h1>Registro de usuario</h1>

    <form action="{{route('auth.do-register')}}" method = "POST">
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
            <label for="">Name</label>
            <input type="text" name='name'>
            <br>
        </div>
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
        <div>
            <label for="">Confirmación de password</label>
            <input type="password" name="password_confirmation" id="">
            <br>
        </div>
        
        <input type = 'submit' value = 'Submit'>

        
    </form>
    

@endsection