<?php

//---------------
// Made by Daedalus email : daedalus at hotmail dot fr
//---------------

$db_serv = 'localhost';			//the address of the database goes here

$db_user = 'root';				//your sql username goes here
$db_pass = '';					//your sql password goes here

$db_name = 'l2jdb';				//your database name goes here

$filename = './world01.js';		//generated javascript file you need to put attribute 777 in your folder

//-----------------------------------------------------------------------------------------------

mysql_connect ( $db_serv, $db_user, $db_pass ) or die ('Coudn\'t connect to host');
mysql_select_db( $db_name ) or die ('Couldn\'t select database');

$sql = @mysql_query('SELECT active_period,date,dawn_stone_score,dusk_stone_score,dawn_festival_score,dusk_festival_score,avarice_owner,gnosis_owner,strife_owner FROM `seven_signs_status`') or die('Query failed!');
$query = @mysql_fetch_array($sql);

$twilScore = $query['dawn_stone_score'] + $query['dawn_festival_score'];
$dawnScore = $query['dusk_stone_score'] + $query['dusk_festival_score'];
$totalScore = $query['dawn_stone_score'] + $query['dusk_stone_score'] + $query['dawn_festival_score'] + $query['dusk_festival_score'];

$dawnPoint = ($totalScore == 0) ? 0 : round(($dawnScore / $totalScore) * 1000);
$twilPoint = ($totalScore == 0) ? 0 : round(($twilScore / $totalScore) * 1000);

$date = $query['date'] - 1;

$gen  = 'var nthDay = ' . $date . ';'."\n";
$gen .= 'var currTime = \'' . date('m/d/Y h:iA T') . '\';'."\n";
$gen .= 'var ssStatus = ' . $query['active_period'] . ';'."\n";
$gen .= 'var dawnPoint = ' . $dawnPoint . ';'."\n";
$gen .= 'var twilPoint = ' . $twilPoint . ';'."\n";
$gen .= 'var maxPointWidth = 150;'."\n";
$gen .= 'var seal1 = ' . $query['avarice_owner'] . ';'."\n";
$gen .= 'var seal2 = ' . $query['gnosis_owner'] . ';'."\n";
$gen .= 'var seal3 = ' . $query['strife_owner'] . ';'."\n";
	
$handle = @fopen($filename, 'w+');
@fwrite($handle, $gen);
@fclose($handle);

?>