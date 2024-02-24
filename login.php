<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>
    <div class="sign-up">
        <h1>SIGN UP</h1>
        <p>Dont have na accoutn yet? Sign up here!</p>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <input type="text" name="email" pplaceholder="E-mail">
            <br>
            <button type="submit" name="submit">SIGN UP</button>
        </form>
    </div>
    <div class="login">
        <h1>LOGIN</h1>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">LOGIN</button>
        </form>
    </form>
</body>
</html>