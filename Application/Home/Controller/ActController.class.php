<?php
namespace Home\Controller;
use Think\Controller;

class ActController extends Controller{
    public function act(){
        $this->assign('user',session('user'));
        $this->display();
    }
    
    public function actlist(){
        $m=M("act");
        $res=$m->find();
        
        $m2=M("actuser");
        $num=$m2->count();
        $res1=$m2->where("id=%d",session('id'))->find();
        if($res1==null)$ifSign='未选';
        else $ifSign='已选';
        
        $this->assign('ifsign',$ifSign);
        $this->assign('cur_num',$num);
        $this->assign('act',$res);
        $this->assign('user',session('user'));
        $this->display();
    }
    
    
    //报名/取消报名
    public function signInOut($signFlag=1){
        if(session('id')==null)$this->error('请先登录!!!',U("user/login"));
        $user=session('user');
        $id=session('id');
        
        $m=M('actuser');
        $m2=M("act");
        
        if($signFlag==1)
        {
          //  报名时间截止和人数限制
           $sel=$m2->where("id=1")->find();
            
            $cutTime=$sel['deadlinedate'];
            $num=$m->count();
            if(strtotime($cutTime)<time())$this->error('报名已截止');
            if($num>=$sel['allpeoplenum'])$this->error('报名人数已满');
          
            $data=[
                'user'=>$user,
                'id'=>$id,
                'signinTime'=>date('Y-m-d H:i:s')
            ];
            
            if($m->where("id='%d'",$id)->select()==null and $m->add($data)){
              $this->success('报名成功',U(actlist));
            }
            else{
              $this->error('报名失败或者你已经报名');
            }
        }
        else if($signFlag==2)
        {
            
            $res=$m->where("id='%d'",$id)->delete();
            if($res==1){
                $this->success('取消成功!!!');
            }
            else{
                $this->error('取消失败或者你没有报名');
            }
        }
        else
        {
            $this->error('网页异常!!!');
        }      
    }
    
    public function signInCheck(){
        //检测是否已经报名
        
        //检测是否满人
        
        //检测是否截止报名
    }
    
    
    
    
    
    private function wosql($query)
    {
        if(!isset($query))
        {
            die("缺少参数");
        }
        
        $host='localhost';
        $user='root';
        $pwd='';
        $dbname='db_user';

        $link =mysqli_connect($host,$user,$pwd,$dbname);
        if (!$link) { 
	       die('Could not connect to MySQL: ' . mysql_error()); 
        } 
        mysqli_query($link,"SET NAMES UTF8");
        mysqli_query($link,$query);
        mysqli_close($link); 
    }
    
    
    public function test(){
        /*
         $id=1;
         $m=M('act');
         $res=$m->where("id='%d'",$id)->select();
         if($res==null)echo "nulllllll";
         dump($res);
         
         $id2=2;
         $m2=M("actuser");
        $res2=$m2->where("id='%d'",$id2)->select();
        echo "<br><br>";
        dump($res2);
        */
      //  $q="UPDATE tb_act set currentPeopleNum=currentPeopleNum+1";
     // $this->($q);
     // $this->wosql($q);
     /*
     $t=array(
        'now'=>date('Y-m-d H:i:s'),
        'cut'=>'2018-06-22 14:00:00'
     );
     $cut='2018-06-22 14:00:00';
     echo strtotime($cut);
     echo "<br>";
     echo time();
     */
     /*
     $m2=M('act');
     $sel=$m2->where("id=1")->find();
            $cutTime=$sel['deadlinedate'];
            if(strtotime($cutTime)>time()){
                echo $cutTime."<br>".strtotime($cutTime)."<br>".time();
                }
                dump($sel);
                */
     //$d=dir(__APP__);
     echo '今天：'.date('Y-m-d H:i:s');
     echo "<br>";
     echo '前天：'.date('Y-m-d H:i:s',time()-2*24*3600);
     echo "<br>";
     echo uniqid('lala_');
     echo "<br>";
     echo md5('lala');
     echo "<br>";
     $brow=get_browser();
     dump($brow);
     //phpinfo();
     dump($GLOBALS);
    }
    
    
    
}


?>