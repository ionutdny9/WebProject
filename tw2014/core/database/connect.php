<?php
$connect_error='You can\'t connect to the database';
mysql_connect('localhost','root','') or die($connect_error);
mysql_select_db('nelodb') or die ($connect_error);
?>