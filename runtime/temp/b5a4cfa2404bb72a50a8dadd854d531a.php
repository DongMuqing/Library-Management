<?php /*a:1:{s:64:"C:\Users\susu\Desktop\tp5\application\index\view\book\index.html";i:1685958971;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
    <link rel="stylesheet" href="/static/css/book.css">
</head>

<body>

<main class="table">
    <section class="header">
        <h1>书籍</h1>

        <form action="<?php echo url('book/search'); ?>" method="post" class="search">
            <div class="input-group">
                <input type="search" placeholder="请输入查询的书名" name="id">
                <button class="seabtn"> <img src="/static/img/search.png"></button>
            </div>
        </form>
        <button><a href="<?php echo url('book/add'); ?>">添加</a></button>
    </section>
    <section class="shell">
        <table>
            <thead>
            <tr>
                <th>书名</th>
                <th>价格</th>
                <th>出版日期</th>
                <th>出版社</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($booklist) || $booklist instanceof \think\Collection || $booklist instanceof \think\Paginator): $i = 0; $__LIST__ = $booklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo htmlentities($vo['id']); ?></td>
                <td><?php echo htmlentities($vo['price']); ?></td>
                <td><?php echo htmlentities($vo['publicationdate']); ?></td>
                <td><?php echo htmlentities($vo['publishinghouse']); ?></td>
                <td>
                    <a href="<?php echo url('book/edit',['id'=>$vo['id']]); ?>">修改</a>
                    <a href="<?php echo url('book/del',['id'=>$vo['id']]); ?>">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </section>
</main>
</body>
</html>