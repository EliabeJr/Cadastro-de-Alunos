<?php
$id_nums = array(1,6,12,18,24);

$id_nums = implode(", ", $id_nums);

$sqlquery = "Select name,email,phone from usertable where user_id IN ($id_nums)";

// $sqlquery becomes "Select name,email,phone from usertable where user_id IN (1,6,12,18,24)"

echo $sqlquery;
?>