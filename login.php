
<?php
session_start();
//cek cookie
if(isset($_COOKIE['login']) ) 
{
    if( $_COOKIE['login']=='true')
    {
        $_SESSION['username']= true;
    }
}
if(isset($_SESSION['username']))
{
    header("location:index.php");
}
$message ="";

if(isset($_POST['login']))
{
    if(empty($_POST['username_user']) || empty($_POST['password_user']))
    {
        $message = "<div class = 'alert alert-danger'>Harus diisi</div>";
    }
    else
    {
        $username = "Fajar";
        $password = "2680";

        if($_POST['username_user']==$username)
        {
            if($_POST['password_user']==$password)
            {
                if( isset($_POST['remember']) ) 
                {
                    //buat cookie
                    setcookie('login','true', time() + 60 );
                }
                $_SESSION['username'] = $_POST['username_user'];
                echo $_SESSION['username'];
                header("location:index.php");
            }
            else
            {
                $message = "<div class = 'alert alert-danger'>Salah password</div>";
            }
        }
        else
        {
            $message = "<div class = 'alert alert-danger'>Salah username</div>";
        }
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>
            Login
        </title>
    </head>

    <body class="bg-light">
        <div class="container mx-auto p-5">
                <div class="card">
                    <div class="card-header text-dark">
                        Login Form
                    </div>
                    <div class="card-body">
                        <span> 
                            <?php echo $message; ?> 
                        </span>
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" name="username_user" placeholder="username" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password_user" placeholder="password" required>
                            </div>
                            </div  class="field">
                                <label class="checkbox">
                                    <input type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                        </form>
                        <div class="card-footer text-muted">
                            Username : Fajar
                            <br>
                            Password : 2680
                        </div>
                </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        -->
    </body>
</html>
```