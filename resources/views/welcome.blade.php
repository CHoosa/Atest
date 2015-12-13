<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>420</title>
</head>
<body>
<form method="POST" action="/login">
    <?php echo csrf_field(); ?>
    <center><font size = "5">  Login</font></center><br>
    <div><center><font size = "5">
                Email:
                <input type="email" name="email"></font></center><br>
    </div>

    <div><center><font size = "5">
                Password:
                <input type="password" name="password" id="password"></font></center><br>
    </div>
    {{Session::get('name')}}
    <div>
        <center><font size = "2"><button type="submit">Login</button></font></center><br>
    </div>
</form>
</body>
</html>