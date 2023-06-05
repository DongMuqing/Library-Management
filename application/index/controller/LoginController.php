<?php

namespace app\index\controller;
use think\Controller;
use app\index\model\LoginModel;
use think\Request;
class LoginController extends Controller
{
    public function index()
    {
      return $this->fetch();
    }

    public function login(Request $request){
        $data=[
            'username'=>$request->username,
            'password'=>$request->password,
        ];
        if($data['username']!=null && $data['password']!=null){
            //实例化
            $model = new LoginModel();
            //调用实例方法
            $to =$model->login($data);
            if($to){
                session('username',$data['username']);
                return $this->success('登录成功','book/index',1);
            }
            return $this->error('用户名或者密码错误');
        }
        return $this->error('请输入用户名和密码!');
    }

    public function register(Request $request)
    {
        $data=[
            'username'=>$request->username,
            'password'=>$request->password,
        ];
        if($data['username']!=null && $data['password']!=null){
            //实例化
            $model = new LoginModel();
            //调用实例方法
            $to =$model->register($data);
            if($to){
                return $this->success('注册成功');
            }
            return $this->error('注册失败');
        }
        return $this->error('请正确输入!');
    }
}