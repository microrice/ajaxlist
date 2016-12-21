
<?php
header("Content-type:text/html;charset=utf-8");
   // $arr=array("att"=> "whiteapply", "Start"=>"0", "Length"=> "7");

   // echo $arr["att"];
    //echo $_POST["Start"];
    $contents = array(array("id"=>"1","username"=>"admin","password"=>"aaaa222","email"=>"888888888@qq.com","lastlogin"=>"2016-7-1 12:09"),array("id"=>"1","username"=>"admin","password"=>"aaaa222","email"=>"888888888@qq.com","lastlogin"=>"2016-7-1 12:09"),array("id"=>"1","username"=>"admin","password"=>"aaaa222","email"=>"888888888@qq.com","lastlogin"=>"2016-7-1 12:09"));
    $json_arr = array("att"=>"user-management","start"=>"0","allcount"=>"20","length"=>"7","data"=>$contents);
    $json_obj = json_encode($json_arr);
    echo $json_obj;
?>