<?php
if(isset($_POST['submit'])){
  $email =$_POST['email'];
  $password =$_POST['password'];
  if($email=="admin"&& $password=="admin")
  echo ("Successfully registed");}

echo "error!! enter correct data";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registration Page</h1>

                </div>
                <div class="panel-body">
                    <form action="RegistrationForm.php" method="post">
                      <label for="email">Email:</label>
                       <input type="text" name="email" class="form-control" required/>
                        <br>
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control"required/>
                        <br>
                        <div class="form-group">
                            <label for="Gender">Gender:</label>
                        <br>
                        <input type="radio" id="Male" name="Gender" value="Male">
                        <label for="Male">Male</label><br>
                        <input type="radio" id="javascript" name="Gender" value="Female">
                        <label for="Female">Female</label>

                        </div>
                        <input type="submit" name="submit" value="Submit">
                    </form>
                </div>
                <div class="panel panel-footer text-right">
                  <small>&copy; elaf almozaini 2021</small>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
