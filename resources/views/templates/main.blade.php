<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>BCM Titapp - Dashboard</title>
</head>
<body>
    <nav>
            <a href="signout">Log Out</a>   
            <div href="signout" id="profile">UI</div>
    </nav>

    <div id="wrapper" >

        <div id="panel" class="content">
        </div>
        <div id="main-content" class="content">
            @yield('content')
        </div>
    </div>
    
</body>
</html>