
<?php
header("Content-type:text/html;charset=utf-8");
   // $arr=array("att"=> "whiteapply", "Start"=>"0", "Length"=> "7");

   // echo $arr["att"];
    //echo $_POST["Start"];
    $contents = array(array("ip"=>"127.0.0.1","name"=>"张立","status"=>"分析中...","comment"=>"暂无信息","date"=>"2016.7.1"),array("ip"=>"127.0.0.1","name"=>"张立","status"=>"分析中...","comment"=>"暂无信息","date"=>"2016.7.1"),array("ip"=>"127.0.0.1","name"=>"李立国","status"=>"分析中...","comment"=>"暂无信息","date"=>"2016.7.1"));
    $json_arr = array("att"=>"whiteapply","start"=>"0","allcount"=>"20","length"=>"7","data"=>$contents);
    $json_obj = json_encode($json_arr);
    echo $json_obj;
?>