<?php
include("config.php");
session_start();
$comm = mysql_query("select name,comment,post_time from comments");
while($row=mysql_fetch_array($comm)){
	$name=$row['name'];
	$comment=$row['comment'];
    $time=$row['post_time'];
?>
<div class="chats"><strong><?=$name?>:<p><p></strong> <?=$comment?> <p style="float:right"><?=date("j/m/Y g:i:sa", strtotime($time))?></p></div>
<?php
}
?>