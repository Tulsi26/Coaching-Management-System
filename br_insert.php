<?php
include_once("dbc_br.inc");

extract($_GET);
$db=new dbc();
$db->branch($branch_id, $branch_name, $course_fee);
echo "<center>Submitted";
?>