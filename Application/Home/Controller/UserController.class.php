<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class UserController extends Controller{
    //注册 注册页面
    public function register(){
        $this->display();
    }
    
    //注册处理 检测空值 重复等
    public function dealRegister(){
          if(is_post)$this->checkRegister($_POST);
          
          $user=$_POST['user'];
          $pwd=$_POST['pwd'];
          $question=$_POST['pwdQuestion'];
          $answer=$_POST['pwdAnswer'];
          
          $m=M('user');
          if(($m->where("user='%s'",$user)->select())!=NULL){
              $this->error('该用户名已被注册');
          }
          $data=[
              'user'=>$user,
              'pwd'=>$pwd,    
              'question'=>$question,
              'answer'=>$answer, 
              'createtime'=>date('Y-m-d H:i:s')
          ];
          if($m->add($data)){
              $this->success('注册成功',U(login));
          }
          else{
              $this->error('注册失败');
        }
    }
    
    //登录 登录页面
    public function login($pwd=''){
        $this->assign('pwd',$pwd);
        $this->display();
    }
    
    //登录处理 检测空值 帐号密码是否正确
    public function dealLogin(){
        if(is_post)$this->checkLogin($_POST);
        
         $verCode=I('code');
         $verify=new \Think\Verify();
         if($verify->check($verCode));
         else $this->error('验证码错误');
        
        $user=$_POST['user'];
        $pwd=$_POST['pwd'];
        
        $m=M('user');
        if(($u=$m->where("user='%s'",$user)->select())==NULL){
            $this->error('用户不存在');
        }
        else{               //select出来的是所有符合的数据，所以是二维数组
            if(strcmp($u[0]['pwd'],$pwd)!=0){//所以$u['pwd']是没有东西的，这里应该是$u[0]['pwd']
                $this->error('密码错误');
            }
            else{
                session('user',$user);
                session('id',$u[0]['id']);
                if(strcmp($user,'admin')==0)$this->redirect("admin/index/index");
                else $this->redirect("home/act/actlist");
            }
        } 
        
    }
    
    //退出登录
    public function logout(){
        if(!session('user')){
            $this->error('你没有登录',U(login));
        }
        else{
            session('user',null);
            session('id',null);
            $this->success('退出登录成功',U(login));
        }
    }
    
     public function verify(){
        ob_clean();
        $verity=new \Think\Verify();
        $verity->entry();
    }
    
    public function persondata(){
        $checkid=session('id');
        if($checkid==null){
            $this->error('请先登录');
        }
        
        $m=M('user');
        
        $id=session('id');
        $sel=$m->where('id=%d',$id)->find();
        
        $this->assign('personal',$sel);
        $this->display();
    }
    
    public function perChangePwd(){
        $checkid=session('id');
        if($checkid==null){
            $this->error('请先登录');
        }
        
        $m=M('user');
        $data=[
            'pwd'=>I('newpwd'),
            'question'=>I('newpwdquestion'),
            'answer'=>I('newpwdanswer')
        ];
        
        $f=$m->where('id=%d',$checkid)->save($data);          
         if($f===false&&$f==0)
            $this->error("修改失败!");
         else $this->success('修改成功!',U('persondata'));
    }
    
    public function forget(){
        $user=I('user');
        $m=M('user');
        $sel=$m->where("user='%s'",$user)->find();
        if($sel==null)$this->error("没有这个用户!");
        
        $this->assign('user',$sel['user']);
        $this->assign('question',$sel['question']);
        $this->display();
    }
    
    public function dealforget(){
        $user=I('user');
        $pwdanswer=I('pwdanswer');
        
        $m=M('user');
        $sel=$m->where("user='%s'",$user)->find();
        
        if(strcasecmp($pwdanswer,$sel['answer'])==0)
            $this->redirect('/Home/user/login?pwd='.$sel['pwd']);
        else $this->error('密保问题错误!');
    }
    
    public function checkRegister($arr){
        if(!ctype_alnum($arr['user']))$this->error('用户名只能为数字或者英文');
        if(strlen($arr['user'])>18)$this->error('用户名不能超过18位哦');
        if(strlen($arr['pwd'])<6 or strlen($arr['pwd'])>18)$this->error('密码不能少于6位或者超过18位哦');
        if(!ctype_alnum($arr['pwd']))$this->error('密码只能为数字或者英文');
        if(strlen($arr['pwdQuestion'])>30 or strlen($arr['pwdAnswer'])>30)$this->error('密保问题或者密保答案不能超过30位');
    }
    
    public function checkLogin($arr){
        foreach($arr as $po){
            if(empty($po))$this->error('用户名密码不允许为空');
            if(!ctype_alnum($po))$this->error('用户名密码只能为数字或者英文');
        }
    }
        /***********************************************************************************
        if(is_post){
            if($_POST['user']==NULL or empty($_POST['pwd']))$this->error('用户名密码不允许为空');
        }
        else{
            $user=$_POST['user'];
            $pwd=$_pwd['pwd'];
        }
        
        if(ctype_alnum($user)==false or ctype_alnum($pwd)==false){
            $this->error('用户名密码只能为数字或者字符');
        }
        *********************************************************************************/

public function test(){
       // ob_clean();
      //  $verity=new \Think\Verify();
       // $verity->entry();
      
        $this->checkRegister($_POST);
        dump($_POST);
       // echo session('user');
      //dump(session());
/**
 *          $m=M('user');
 *         $a=$m->where("user='lalala'")->select();
 *         $b=$a=$m->where("user='lalala'")->find();
 *         dump($a);
 *         echo "<br>";
 *         dump($b);
 *         echo "<br>";
 *         session('a.id',$a['id']);
 *         dump(session());
 *         echo "<br>";        
 *         $this->assign('b',$b);
 *         $this->assign('a',$a);
 *         $this->display();
 */
    }






}
?>