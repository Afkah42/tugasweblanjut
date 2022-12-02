<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(rgba(226, 224, 224, 0.5), rgba(180, 157, 157, 0.5)), url(bg.jpg);
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 400px;
    min-height: 400px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}

.container .login-text {
    color: #111;
    font-weight: 500;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 20px;
    display: block;
    text-transform: capitalize;
}

.container .login-social {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
    margin-bottom: 25px;
}

.container .login-social a {
    padding: 12px;
    margin: 10px;
    border-radius: 3px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    text-decoration: none;
    font-size: 1rem;
    text-align: center;
    color: #FFF;
    transition: .3s;
}

.container .login-social a i {
    margin-right: 5px;
}

.container .login-social a.facebook {
    background: #3578ff;
}

.container .login-social a.twitter {
    background: #34b1ff;
}

.container .login-social a.google-plus {
    background: #db4a39;
}

.container .login-social a.linkedin {
    background: #2b58fc;
}

.container .login-social a.facebook:hover {
    background: #548dff;
}

.container .login-social a.twitter:hover {
    background: #2baeff;
}

.container .login-social a.google-plus:hover {
    background: #ca4334;
}

.container .login-social a.linkedin:hover {
    background: #3ec1fe;
}

.container .login-email .input-group {
    width: 100%;
    height: 50px;
    margin-bottom: 25px;
}

.container .login-email .input-group input {
    width: 100%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}

.container .login-email .input-group input:focus, .container .login-email .input-group input:valid {
    border-color: #a29bfe;
}

.container .login-email .input-group .btn {
    display: block;
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    border: none;
    background: #a29bfe;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}

.container .login-email .input-group .btn:hover {
    transform: translateY(-5px);
    background: #614cff;
}

.login-register-text {
    color: #111;
    font-weight: 600;
}

.login-register-text a {
    text-decoration: none;
    color: #4e38f7;
}

@media (max-width: 430px) {
    .container {
        width: 300px;
    }
    .container .login-social {
        display: block;
    }
    .container .login-social a {
        display: block;
    }
}
    </style>
</head>
<body>
  <div class="container">
         <form action="{{route('auth.loginproccess')}}" method="POST" class="login-email">
            @csrf
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Sign In</p>
             @if (session('status'))
                <div class="mt-4">
                    <p class="text-success text-center">{{ session('status') }}</p>
                </div>
              @endif
              @if (session('error'))
                <div class="mt-4">
                    <p class="text-danger text-center">{{ session('error') }}</p>
                </div>
              @endif
            <div class="input-group">
                 <input type="text" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="input-group">
                 <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="input-group">
                <button name="submit" class="btn mt-2">Login</button>
            </div>
           
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>