<?php

//php script that allows user to delete a file from the upload directory 
require('/phpfunctions/db.php');
$id=$_REQUEST['id'];
$filename=$_REQUEST['filename'];
$query = "DELETE FROM filetable WHERE id=$id"; 
$result = mysql_query($query) or die ( mysql_error());
$target = "upload/".$filename.".pdf";
if (file_exists($target)) {
 unlink($target); // Delete File From Directory
}
header("Location: viewfiles.php"); 
?>