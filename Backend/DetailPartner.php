<?php
include "header.php";
?>
<?php
include_once "Connect.php";
?>
<div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
    <div class="au-card-inner">
        <div class="table-responsive">
            <table class="table table-top-countries">
                <tbody>
                    <?php
                     include "Connect.php";
                     $MANCC=$_GET['MANCC'];
                     $query=mysqli_query($conn,"select * from NHACUNGCAP where MANCC=$MANCC");
                     while($value=mysqli_fetch_array($query))
                        {
                            echo'
                            <tr>
                                <td>MÃ NHÀ CUNG CẤP</td>
                                <td class="text-right">'.$value['MANCC'].'</td>
                            </tr>
                            <tr>
                                <td>TÊN NHÀ CUNG CẤP</td>
                                <td class="text-right">'.$value['TENNCC'].'</td>
                            </tr>
                            
                            <td><a href="EditPartner.php? MANCC='.$value['MANCC'].'"><button class="btn btn-warning">Edit</button></a></td>
                            ';
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include "fooder.php";
?>