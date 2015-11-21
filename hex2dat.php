<?php
$file = pathinfo($argv[1]);
$IN = $file['basename'];
$OUT = $file['filename'].'.scr';

try{
	if(!file_exists($IN))
		throw new Exception();
}catch(Exception $e){
    die('File not found');
}
$in_file = fopen($IN, "r");
$out_file = fopen($OUT,"w");

while(($line = fgets($in_file)) !== false){
	if(strpos($line,"add")!==false || strpos($line,"name")!==false || !strlen(trim($line)))
		continue;
    $t3 = explode(" ",$line);
    fwrite($out_file,'sendevent '.rtrim($t3[0],':')." ".intval($t3[1],16)." ".intval($t3[2],16)." ".intval($t3[3],16)."\n");
}

fclose($in_file);
fclose($out_file);

echo "\n\nSuccess, output into \"".$OUT."\"";
?>