<?php

namespace app\index\controller;
use think\Controller;
use app\index\model\BookModel;
use think\Request;
class BookController extends Controller
{
    //查询列表
    public function index()
    {
        $name = session('username');
        if($name!=null){
            //实例化
            $model = new BookModel();
            //调用实例方法
            $to =$model->show();
            //赋值
            $this->assign('booklist',$to);
            return $this->fetch();
        }
        return $this->error('请先登录!','login/index');
    }
    //添加页面
    public function add(){
        return $this->fetch();
    }

    //添加
    public function adds(Request $request){
        $data=[
//            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'publicationdate'=>$request->publicationdate,
            'publishinghouse'=>$request->publishinghouse
        ];
        //实例化
        $model = new BookModel();
        //调用实例方法
        $to =$model->adds($data);
        if($to){
            //添加成功
            return $this->success('添加成功','index',1);
        }
        return $this->error('添加失败');
    }

    //删除
    public function del(Request $request){
        $id=$request->id;
        $model = new BookModel();
        //调用实例方法
        $to =$model->del($id);
        if($to){
            //添加成功
            return $this->success('删除成功','index',1);
        }
        return $this->error('删除失败');
    }

    //修改页面
    public function edit(Request $request){
        $id=$request->id;
        $model = new BookModel();
        //调用实例方法
        $to =$model->edit($id);
        $this->assign('datas',$to);
        return $this->fetch();
    }

    //修改
    public function edits(Request $request){
        $data=[
            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'publicationdate'=>$request->publicationdate,
            'publishinghouse'=>$request->publishinghouse
        ];
        //实例化
        $model = new BookModel();
        //调用实例方法
        $to =$model->edits($data);
        if($to){
            //添加成功
            return $this->success('修改成功','index',1);
        }
//        return $this->error('修改失败');
    }

    //搜索
    public function search(Request $request){
        $id=$request->name;
        $model = new BookModel();
        //调用实例方法
        $to =$model->search($id);
        $this->assign('booklist',$to);
        return $this->fetch();
    }
}