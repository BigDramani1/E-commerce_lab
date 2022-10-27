<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<style>
   
    .form-group{
        width:400px;
    }
</style>
<body>
            <div class="container" style="margin-top:100px; margin-left:500px;">
                <form action="loginprocess.php" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required onfocus="this.placeholder = ''">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required onfocus="this.placeholder = ''">
                    </div>
                    <button type="submit" name="submit"class="btn btn-danger">Login</button>
                    <div><br>New User?<strong><a href="register.php">Sign In!</a></strong></div>
                </form>
            </div>
</body>
</html>
