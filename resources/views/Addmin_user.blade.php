<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>420</title>
</head>
<body>
<p align = "right"><font size = "2"><input type="button"name="longout" onclick="window.location.href='/logout'" value="ออกจากระบบ"></font></p><br>
addmin<br><br>
@foreach($adduser as $adduser)
    {{$adduser->name}} <input type="button"name="add"onclick="window.location.href='{{$adduser->id}}/addstatus'" value="ADD"> <br><br>
@endforeach
</body>
</html>