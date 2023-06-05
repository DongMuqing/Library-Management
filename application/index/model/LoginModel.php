<?php

namespace app\index\model;
use think\Db;
use think\Model;
class LoginModel extends Model
{
    public function login($data)
    {
        $db = Db::connect();
        // 使用连接对象进行数据库操作
        $where = array(
            'username' => $data['username'],
            'password' => $data['password'],
        );
        $result = $db->name('tb_user')->where($where)->select();
        return $result;
    }


    public function register($data)
    {
        $add=Db::table('tb_user')->insert([
            'username'=>$data['username'],
            'password'=>$data['password'],
        ]);
        return $add;
    }
}