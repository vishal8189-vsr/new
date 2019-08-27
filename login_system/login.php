<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet"  href="./bootstrap.min.css"/>
<link rel="stylesheet"  href="./login.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    </head>
<body>
  <div class="container">
  <div class="row">
  <div class="col-lg-6">
  <h2>Login form
  <form action="validation.php" method="post">
  <div class="form-group">
  <label>username</label>
  <input type="text" name="user" class="form-control">
  </div>
  <div class="form-group">
  <label>password</label>
  <input type="password" name="password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  </form>  
  </div>
  <div class="col-lg-6">
  <h2>signin form
  <form action="register.php" method="post">
  <div class="form-group">
  <label>username</label>
  <input type="text" name="user" class="form-control">
  </div>
  <div class="form-group">
  <label>password</label>
  <input type="password" name="password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">submit </button>
  <button type="submit" class="btn btn-primary">Reset </button>
  </form>  
  </div>
  </div>
  </div>
</body>
</html>