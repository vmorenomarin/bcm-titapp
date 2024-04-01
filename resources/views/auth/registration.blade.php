@extends('templates.basic')

@section('content')
        <div>

        <img src="https://camasmedellin.com/wp-content/uploads/2023/09/Base-Camas-Medellin-colchones-camas-base-camas-.png" alt="Logo BCM">
        <div>
            <form action="/register" method="POST">
                @csrf
                <label for="username" >Username</label><br>
                <input type="text" name="username" id="username" placeholder="Username company">
                @if($errors->has('username'))
                    <span>{{ $errors->first()}}</span>
                @endif
                <br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" placeholder="Password">
                @if($errors->has('password'))
                    <span>{{ $errors->first('password')}}</span>
                @endif
                <button submit>Register</button>
            </form>
            <a href="/">Login</a>
        </div>
            
        </div>
@endsection