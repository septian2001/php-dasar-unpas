<?php 

// catatan jagan pernah membuat 
// link login menggunakan variable 
// $_GET
// harus pake variable 
// $_POST
if (isset($_POST["submit"]))

    if ($_POST["username"] == "admin" && $_POST["password"] == "woiasu"){
        header("location:admin.php");
        exit;
    }else {
        $error = true;
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
<?php if(isset($error)) : ?>
    <p style="color:cornflowerblue; font-style:italic;">username / password salah</p>
<?php endif ?>

    <ul>
    <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password  :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">LOGIN</button>
            </li>
    </form>
    </ul>
</body>
</html>
