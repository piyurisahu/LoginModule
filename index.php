<!DOCTYPE html>
<html>
    <head>
        <link ref="stylesheet" href="style.css"/>
    </head>

    <body>
    <form method="post" action="router.php?operation=1">
        <fieldset>
            <legend>LOGIN</legend>

            <table>
                <tr><td><input type="text" name="txtemail" placeholder="email" required></td></tr>
                <tr><td><input type="password" name="txtpass" placeholder="password" required></td></tr>
                <tr><td><input type="submit" value="login"></td></tr>
                <tr><td><a href="registration.php">Sign Up here</td></tr>
            </table>
    </body>

</html>