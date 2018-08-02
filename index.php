<?php
echo "Here are our files </br>";
$path = ".";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
	$arr1 = str_split($file);
    if($arr1[0] != "." && $file != ".." && $file != "index.php" && $file != "error_log" && $file != "cgi-bin") {
        echo "<a href='$path/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?> 