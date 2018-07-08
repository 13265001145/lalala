<?php
namespace Admin\Controller;
use Think\Controller;

class ActController extends Controller{
    public function act(){
        $m1=M('act');
        $sel1=$m1->where("id=1")->find();
        
        $m2=M('actuser');
        $num=$m2->count();
        $page=new \Think\Page($num,10);
        $sel2=$m2->limit($page->firstRow,$page->listRows)->select();
        $p=$page->show();
        
        $this->assign('num',$num);
        $this->assign('sel1',$sel1);
        $this->assign('actuserlist',$sel2);
        $this->assign('page',$p);
        $this->display();
    }
    
    public function actUpdate(){
        $this->checkAd();
        
        $upid=$_GET['upid'];
        $title=$_GET['title'];
        $val=$_GET['val'];
        
        $data=[
            $title=>$val
        ];
        
        $m=M('act');
        
        $f=$m->where("id=%d",$upid)->save($data);
        
        if($f===false&&$f==0)
            $this->error("�޸�ʧ��!");
    }
    
    public function actUserDel(){
        $this->checkAd();
        
        $id='';
        if(isset($_GET))$id=$_GET['delid'];
        else die('��ҳ�쳣!!!');
        
        $m=M('actuser');
        
        $res=$m->where("id='%d'",$id)->delete();
        if($res==1){
            $this->success('ɾ���û������ɹ�!!!');
        }
        else{
            $this->error('ɾ���û�����ʧ��!!!');
        }
    }
    
    private function checkAd(){
        if(isset($_SESSION)){
            if(strcmp(session('user'),'admin')!=0){
            die("�㲻�ǹ���Ա!!!");
            }
        }
        else{
            $this->error('���ȵ�¼����Ա!!!');
        }
    }
}

?>