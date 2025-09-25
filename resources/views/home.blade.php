<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @auth
      <h1>You are in !!!</h1>
      <form  action="/logout" method="post">
        @csrf
        <input type="submit" name="logout" value="logout">
      </form>
    @else
    <div class="register" style="border:1px solid black;padding:5px">
      <form  action="/register" method="post">
        <h2>Create An Account.</h2>
        @csrf
        <input type="text" name="name" placeholder="username">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="register"  value="Create Account">
      </form>
    </div>
    <div class="login" style="border:1px solid black;padding:5px">
      <form  action="/login" method="post">
        <h2>Login To get Full Experience.</h2>
        @csrf
        <input type="text" name="loginname" placeholder="username">
        <input type="password" name="loginpassword" placeholder="password">
        <input type="submit" name="login" value="login">
      </form>
    </div>
    @endauth

  </body>
</html>
