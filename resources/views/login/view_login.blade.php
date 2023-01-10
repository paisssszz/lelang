<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
        <div class="logo">
            <img src="../foto/logo.jpg" alt="">
        </div>
    <div class="tamp">
        <div class="log">
            <p>Login</p>
            <div class="garis"></div>
        </div>
        <div class="card">
            <form action="{{ url('login/proses') }}" method="post">
                @csrf
            <div class="user">
            <input autofocus type="text" class="form-control
            @error('username')
                is-infalid
            @enderror"
            
            name="username" placeholder="username">
            <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-envelope"></span>
            </div>
            </div>
            @error('username')
            <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror 
            </div>
            <div class="pass">
            <input autofocus type="password" class="form-control
            @error('password')
                is-infalid
            @enderror
            " placeholder="Password" name="password">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror 
            </div>
            <div class="row">
            <div class="rem">
            <div class="icheck-primary">
            <input type="checkbox" id="remember">
            <label for="remember">Remember Me</label>
            </div>
            </div>
            
            <div class="sig">
            <button type="submit" class="button">Sign In</button>
            </div>
            <div class="regg">
                <a href="{{ route('register') }}"><p>Don’t have an account ? <span>Create Now</span> </p></a>
            </div>

            
           <div class="tam2">
            <img src="../foto/logo2.svg" alt="">
           </div>
            
            
        </div>
            </form>
    </div>
</div>
</body>
</html>