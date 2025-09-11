<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST["mssv"])){
        $mssv=$_REQUEST["mssv"];
    }
    print_r(value: $_REQUEST);
    echo"Thông tin đã nhận được";
    echo"MSSV: $mssv" ;
}
?>