<?php

$hostDB = 'ec2-34-236-94-53.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'd9jhq5ngnur7it';
$userDB = 'rpjaaunfyrpytc';
$pwDB = '59bab24fea3bf6185c66932aedddfbe65221f019e889584fbd8d46d1af4c4101';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

// if($connection){

// }else{
 
// }
?>