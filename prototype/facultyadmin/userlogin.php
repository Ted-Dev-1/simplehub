<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="ustyles.css">
</head>
<body>
    
    <div class="container">

        <div class="form-box" id="login-form">
            <form action="ulogin_code.php" method="post">
                <h2>Login</h2>
                <input type="email" name="uemail" placeholder="Email" required>
                <input type="password" name="upassword" placeholder="Password" required>
                <select>
                    <option value="admin">Admin</option>
                    <option value="mechanic">Mechanic</option>
                </select>
                <button type="submit" name="log-in"> Login</button>
                <p>Dont have an account? <a href="../contact.php">Contact The Head Admin</a> </p>
            </form>
        </div>
    </div>
</body>
</html>