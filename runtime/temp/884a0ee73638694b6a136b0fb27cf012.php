<?php /*a:1:{s:70:"C:\Users\susu\Desktop\php-booksys\application\index\view\book\add.html";i:1686109701;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>add</title>
        <link rel="stylesheet" href="/static/css/add.css">
</head>
<body>
<div class="container">
    <h1>添加</h1>
    <div class="form">
        <form action="<?php echo url('book/adds'); ?>" method="post">
            <input type="text" name="name" placeholder="书名">
            <input type="text" name="price" placeholder="单价">
            <input type="text" name="publicationdate" placeholder="出版时间">
            <input type="text" name="publishinghouse" placeholder="出版社">
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