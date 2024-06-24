<?php
//處理新增資料的請求
include_once "base.php";
// print_r($_POST);
// echo $_POST;
echo $Student->save($_POST);
