<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form action="{{ route('login')}}" method="POST">
        @csrf

      <div class="input-box">
        <input name="email" type="text" placeholder="Enter your email" required>
      </div>

      <div class="input-box">
        <input name="password" type="password" placeholder="password" required>
      </div>

      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>

    </form>
  </div>
</body>
</html>
