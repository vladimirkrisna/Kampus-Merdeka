<style>
    body {
        background-color:whitesmoke;
    }
    .container{
        width:250px;
        height:300px;
        background-color:pink;
        margin-left:40%;
        margin-top:10%;
        border-radius:20px;
    }
    h3{
        padding-top:50px;
        text-align:center;
    }
</style>

<?php
function cekLogin($nama, $password){
    if ($nama == 'admin' && $password == 'mimin') header("location: home/home.html");
    else echo "<script>alert('Username atau Password Salah !!')</script>";
}
if (isset($_POST["sign-in"])) cekLogin($_POST['username'], $_POST['password']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Login</title>
</head>
<body>
    <div class="container">
        <h3>Login</h3>
            <ul>
                <form action="" method="post">
                <table>
                    <tr>
                        <td><label for="username">Username</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="username" id="username"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password : </label></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sign-in" value="Sign-in" onclick="<?php cekLogin($username, $password) ?>" /></td>
                    </tr>
                </table>
                </form>
            </ul>
    </div>
</body>
</html>