<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>420</title>
</head>
<body>
user<br>
<form method="post"  action="/checkstatus">
    <?php echo csrf_field(); ?>
    {{$addstatus->name}}<input type="hidden" name="statususer" value="{{$addstatus->name}}">
    <div>
        FBS
        <input type="text" name="FBS"><br>
        BPmin
        <input type="text" name="BPmin"><br>
        BPmix
        <input type="text" name="BPmix"><br>
        comment
        <textarea name="comment"></textarea>
        <input type="submit"name="add"><br>
    </div></form>
</body>
</html>