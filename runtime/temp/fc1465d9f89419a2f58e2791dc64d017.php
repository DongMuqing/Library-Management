<?php /*a:1:{s:65:"C:\Users\susu\Desktop\tp5\application\index\view\login\index.html";i:1685849336;}*/ ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>login</title>
  <link rel="stylesheet" href="/static/css/login.css">
<!--  <link rel="stylesheet" href="" />-->
</head>
<body>
<div class="container">

  <div class="form-box">
    <!-- 注册 -->
    <form action="/register" method="post">
      <div class="register-box hidden">
        <h1>register</h1>
        <input type="text" placeholder="用户名" name="username">
        <input type="password" placeholder="密码" name="password">
        <button>注册</button>
      </div>
    </form>
    <!-- 登录 -->

    <form action="/login" method="post">
      <div class="login-box">
        <h1>login</h1>
        <input type="text" placeholder="用户名" name="username">
        <input type="password" placeholder="密码" name="password">
        <button>登录</button>
      </div>
    </form>

  </div>
  <div class="con-box left">
    <h2>欢迎来到<span>登录界面</span></h2>
    <img src="/static/img/1.png" alt="">
    <p>已有账号</p>
    <button id="login">去登录</button>
  </div>
  <div class="con-box right">
    <h2>欢迎来到<span>登录界面</span></h2>
    <img src="/static/img/2.png" alt="">
    <p>没有账号？</p>
    <button id="register">去注册</button>
  </div>
</div>
<script>
  // 要操作到的元素
  let login=document.getElementById('login');
  let register=document.getElementById('register');
  let form_box=document.getElementsByClassName('form-box')[0];
  let register_box=document.getElementsByClassName('register-box')[0];
  let login_box=document.getElementsByClassName('login-box')[0];
  // 去注册按钮点击事件
  register.addEventListener('click',()=>{
    form_box.style.transform='translateX(80%)';
    login_box.classList.add('hidden');
    register_box.classList.remove('hidden');
  })
  // 去登录按钮点击事件
  login.addEventListener('click',()=>{
    form_box.style.transform='translateX(0%)';
    register_box.classList.add('hidden');
    login_box.classList.remove('hidden');
  })
</script>
</body>
</html>
