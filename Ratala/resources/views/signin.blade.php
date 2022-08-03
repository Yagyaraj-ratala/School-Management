
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ratala Login</title>
    <link rel="stylesheet" href="{{'css/registerstyle.css'}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <br>
    <br>
    <br>
    <div class="login-box">
      <h1>Login</h1>
      ​<form action="/loginSubmits" method="POST" enctype="multipart/form-data">
      @csrf 
        <label>Email</label>
        <input type="email" name ="email" placeholder="" />
        <label>Password</label>
        <input type="password" name="password" placeholder="" />
        <input type="submit" value="Submit" />
      </form>
    </div>
    <p class="para-2">
      Not have an account? <a href="{{'sign_up'}}">Sign Up Here</a>
    </p>
  </body>
</html>

