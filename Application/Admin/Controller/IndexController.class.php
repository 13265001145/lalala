<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        $this->checkAd();
        
        $m1=M('user');
        $m2=M('actuser');
        $m3=M('act');
        
        $num=[
            'num1'=>$m1->count(),
            'num2'=>$m2->count(),
            'num3'=>$m3->count()
        ];
        
        $this->assign('num',$num);        
        $this->assign('aduser',session('user'));  
        $this->display();
    }
    
     public function UserList(){
        $this->checkAd();
        
        $m=M('user');
        $num=$m->count();
        $page=new \Think\Page($num,10);
        $sel=$m->limit($page->firstRow,$page->listRows)->having("id<>0")->select();
        $p=$page->show();
        $this->assign('list',$sel);
        $this->assign('page',$p);;
        $this->display();  
    }
    
    public function userUpdate(){
        $this->checkAd();
        
        $upid=$_GET['upid'];
        $title=$_GET['title'];
        $val=$_GET['val'];
        
        $data=[
            $title=>$val
        ];
        
        $m=M('user');
        
        $f=$m->where("id=%d",$upid)->save($data);
        
        if($f===false&&$f==0)
            $this->error("修改失败!");
    }
    
    public function userDel(){
        $this->checkAd();
        
        $id='';
        if(isset($_GET))$id=$_GET['delid'];
        else die('网页异常!!!');
        
        $m=M('user');
        
        $res=$m->where("id='%d'",$id)->delete();
        if($res==1){
            $this->success('删除用户成功!!!');
        }
        else{
            $this->error('删除用户失败!!!');
        }
    }
    
    public function changePwd(){
        $this->checkAd();
        $newPwd=$_REQUEST['newPwd'];
        if(strlen($newPwd)<6 or strlen($arr['pwd'])>18)$this->error('密码不能少于6位或者超过18位哦');
        if(!ctype_alnum($newPwd))$this->error('密码只能为数字或者英文');
        $m=M('user');
        $m->where("user=admin")->setField("pwd",$newPwd);
    }
    
    private function checkAd(){
        if(isset($_SESSION)){
            if(strcmp(session('user'),'admin')!=0){
            die("你不是管理员!!!");
            }
        }
        else{
            $this->error('请先登录管理员!!!');
        }
    }
    
    public function test(){
        /*
         $m=M('actuser');
         $num=$m->count();
         $page=new \Think\Page($num,1);
         $sel=$m->limit($page->firstRow,$page->listRows)->select();
         $p=$page->show();
         $this->assign('sel',$sel);
         $this->assign('page',$p);;
         */
         
         
         $upid=$_REQUEST['upid'];
         $title=$_REQUEST['title'];
         $val=$_REQUEST['val'];
         dump($_REQUEST);
         $this->display();
         
         //dump(session());  
    }
}