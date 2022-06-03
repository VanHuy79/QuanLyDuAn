<?php
 $tg = time();
 //echo $tg;
 $tgout = 9;
 $ip=$REMOTE_ADDR;
 $tgnew = $tg - $tgout;

        include "Connect.php";
        $sql = "insert into truycap(time,ip,trangthai) values($tg,$ip,1)";
        $query = mysqli_query($conn,$sql) or die("can't connect");
        //echo $tgnew;
       
        // xóa khi quá 3phut
        $sql1 = "update truycap set trangthai='false' where time < $tgnew ";
       $query1 = mysqli_query($conn,$sql1) or die("can't connect");
      
        $sql2 = "SELECT * FROM truycap ";
        $query2 = mysqli_query($conn,$sql2) or die("can't connect");
        $user = mysqli_num_rows($query2);
        echo $user;

        $sql3 = "SELECT DISTINCT ip FROM truycap where trangthai='1'";
        $query3 = mysqli_query($conn,$sql3) or die("can't connect");
        $user_ol = mysqli_num_rows($query3);
        echo $user_ol;
?>