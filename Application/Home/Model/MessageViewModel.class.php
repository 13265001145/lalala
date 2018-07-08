<?php
namespace Home\Model;
use Think\Model\ViewModel;

class MessageViewModel extends ViewModel
{
    public $viewFileds = array(
        'content'=>array('id','content','time'),
        'user'=>array('id','user','_on'=>'user.id=content.id')
    );
}

?>