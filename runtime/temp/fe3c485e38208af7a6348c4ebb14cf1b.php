<?php /*a:1:{s:63:"C:\Users\susu\Desktop\tp5\application\index\view\book\edit.html";i:1685954493;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>edit</title>
    <link rel="stylesheet" href="/static/css/add.css">
</head>
<body>
<div class="container">
    <h1>修改</h1>
    <div class="form">
        <form action="<?php echo url('book/edits',['id'=>$datas['id']]); ?>" method="post">
            <input type="text" name="id" value="<?php echo htmlentities($datas['id']); ?>">
            <input type="text" name="price" value="<?php echo htmlentities($datas['price']); ?>">
            <input type="text" name="publicationdate" value="<?php echo htmlentities($datas['publicationdate']); ?>">
            <input type="text" name="publishinghouse" value="<?php echo htmlentities($datas['publishinghouse']); ?>">
            <button class="btn-login" type="submit">提交</button>
        </form>
    </div>
</div>
<ul class="bg-squares">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
</body>
</html>