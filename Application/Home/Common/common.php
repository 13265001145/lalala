 <?php
function clickNum()
    {

        if(isset($_REQUEST['yonghuming'])){
        setcookie("zhanghao",$_REQUEST['yonghuming'],time()+3600*12*7,"/www/");}

        $clicknum_file='clickNumber.txt';
        $clicknum=file_get_contents($clicknum_file);
        $clicknum=$clicknum+1;
        file_put_contents($clicknum_file,$clicknum);
        /*
        $beijing=imagecreate(1360,682);
        $beijing=imagecreatefrompng("image/±³¾°.png");
        imagepng($beijing);
        imagedestroy($beijing);
        */
    }
    
function wosql($query)
{
        if(!isset($query))
        {
            die("È±ÉÙ²ÎÊý");
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
?>