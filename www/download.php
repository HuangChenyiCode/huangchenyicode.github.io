<?php
echo "<h1><a href=\"index.html\">←返回首页</a></h1><hr><hr>";
$cnt = -2;
foreach (scandir('files') as $file) {
    $cnt++;
    if($cnt>0) {echo "$cnt. <a href=\"files\\$file\">$file</a><hr>";}
}
?>