@extends('templates.basic')

@section('content')
        <div>
            <img src="https://camasmedellin.com/wp-content/uploads/2023/09/Base-Camas-Medellin-colchones-camas-base-camas-.png" alt="Logo BCM">
            <div>
                <form action="login" method="POST">
                    @csrf
                    <label for="username">Username</label>
                    <input type="text" placeholder="Username company" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" name="password" id="password">
                    <button submit>Login</button>
                </form>
                @if($errors)
                    <span>{{$errors->first('emailPassword')}}</span>
                @endif    
                <a href="/registration">Register</a>
            </div>
        </div>
@endsection