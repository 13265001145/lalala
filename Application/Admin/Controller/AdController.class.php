<?php
namespace Admin\Controller;
use Think\Controller;

class AdController extends Controller{
    public function index(){
        $this->display();
    }
    
    public function changePwd(){
        $this->checkAd();
        
        $newPwd=$_REQUEST['newPwd'];
        $surepwd=$_REQUEST['surepwd'];
        
        if(strcmp($newPwd,$surepwd)==0 && strlen($newPwd)>6 && strlen($newPwd)<18 && ctype_alnum($newPwd))
        {
            $m=M('user');
            $f=$m->where("id=0")->setField("pwd",$newPwd);
            if($f>0)$this->success("修改成功");
            else $this->error("修改失败");
        }
        else{
            $this->error("两次密码不一致或者密码长度和格式不符合要求");
        }
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
}

?>