<?php

namespace app\index\model;
use think\Db;
use think\Model;
class BookModel
{
    //显示数据
    public function show()
    {
        // 获取数据库连接对象
        $db = Db::connect();
        // 使用连接对象进行数据库操作
        $result = $db->name('tbl_book')->select();
        return $result;
    }

    //添加
    public function adds($data){
        $adds=Db::table('tbl_book')->insert([
            'name'=>$data['name'],
            'price'=>$data['price'],
            'publicationdate'=>$data['publicationdate'],
            'publishinghouse'=>$data['publishinghouse'],
        ]);
        return $adds;
    }

    //删除
    public function del($id){
        $del=Db::table('tbl_book')->where('id',$id)->delete();
        return $del;
    }

    //修改
    public function edits($data){
        $edits=Db::table('tbl_book')->where('id',$data['id'])->update([
            'name'=>$data['name'],
            'price'=>$data['price'],
            'publicationdate'=>$data['publicationdate'],
            'publishinghouse'=>$data['publishinghouse'],
        ]);
        return $edits;
    }

//    查询单行数据
    public function edit($id){
        $find=Db::table('tbl_book')->where('id',$id)->find();
        return $find;
    }

    //根据id查询
    public function search($id){
        $find=Db::table('tbl_book')->where('name','like','%'.$id.'%')->select();
        return $find;
    }
}