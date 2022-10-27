<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<style>
   
    .form-group{
        width:400px;
    }
</style>
<body>
            <div class="container"style="margin-top:100px; margin-left:500px;">
                <form action="registerprocess.php" method="post">
                    <!-- <form> -->
                    <div class="form-group">
                        <label>Full name</label>
                        <input type="text" class="form-control" name="full_name" id="full_name" required onfocus="this.placeholder = ''" pattern="[A-Za-z]{3,32}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email" required onfocus="this.placeholder = ''"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="email must be eg. a.dramani@gmail.com">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" required onfocus="this.placeholder = ''" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" name="country" id="country" required onfocus="this.placeholder = ''"pattern="[A-Za-z]{3,32}" title="Country must be at least 3 letters">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" id="city" required onfocus="this.placeholder = ''"pattern="[A-Za-z]{3,32}" title="City must be at least 3 letters">
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="tel" class="form-control" name="contact"  id="contact" required onfocus="this.placeholder = ''" pattern="^[\W][0-9]{3}?[\s]?[0-9]{2}?[\s]?[0-9]{3}[\s]?[0-9]{4}$" title="Phone number should start with +233 and remaing 9 digit with 0-9. eg +233 548342821">
                    </div>
                    <button type="submit" name="submit"class="btn btn-primary">Sign up</button>
                    <div class="text-center add_top_10">Already have an account? <strong><a href="login.php">Sign In!</a></strong></div>
                </form>
            </div>
</body>
</html>

<!-- <script>
    $('.submit').on('click', function() 
    {
        $.ajax
        ({
                url: "registerprocess.php",
                type:"POST",
                data:{
                    full_name = document.getElementById("full_name").value,
                    email = document.getElementById("email").value,
                    password = document.getElementById("password").value,
                    country = document.getElementById("country").value,
                    city = document.getElementById("city").value,
                    contact =document.getElementById("contact").value,
                },
                success: function(dataResult){
                    console.log("testing");
                }

         });
    });
   
</script> -->
