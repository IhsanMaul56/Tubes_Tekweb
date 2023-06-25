<!DOCTYPE html>
<html>
<head>
    <title>Login - Penyewaan Villa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <style>
        body {
            background-color: #417D7A;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 150px;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            color: #555;
            font-size: 24px;
            margin-bottom: 30px;
        }
        .login-form .form-group {
            margin-bottom: 20px;
        }
        .login-form label {
            font-weight: bold;
            color: #555;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f2f2f2;
            color: #555;
        }
        .login-form button[type="submit"] {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            background-color: #417D7A;
            border: none;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        .login-form button[type="submit"]:hover {
            background-color: #1A3C40;
        }
        .login-form .form-footer {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
        .login-form .form-footer a {
            text-decoration: none;
            color: #417D7A;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }
        .login-form .form-footer a:hover {
            color: #1A3C40;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <form class="login-form" method="post" action="<?php echo site_url('home/proseslogin'); ?>">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="form-footer">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>