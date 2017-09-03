<!DOCTYPE html>
<html>
<head>
    <link ref="stylesheet" href="style.css"/>
</head>

<body>
<form method="post" action="router.php?operation=2">
    <fieldset>
        <legend>REGISTER</legend>

        <table>
            <tr><td><input type="text" name="txtemail" placeholder="email" required></td></tr>
            <tr><td><input type="text" name="txtmobile" placeholder="mobile" required></td></tr>

            <tr><td><input type="password" name="txtpass" placeholder="password" required></td></tr>
            <tr><td><input type="submit" value="Register"></td></tr>
            <tr><td><a href="index.php">HOME</td></tr>
        </table>
</body>

</html>