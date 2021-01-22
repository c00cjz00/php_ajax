<?php
$cmd='/usr/bin/curl -X POST "http://203.145.221.165:9999/" \
-H  "accept: application/json" \
-H  "Content-Type: multipart/form-data" \
-F "email=s" -F "usr=1" -F "age=1" \
-F "file=@fix.png;type=image/png"';
$cmd="ls";
$cmd='curl -d "user=xxx&password=1234" http://example.com/login.cgi';

$proc = popen($cmd, 'r');
while (!feof($proc))
{
     echo fread($proc, 1000);
     @ flush();
}
// echo "<pre>";
 //echo shell_exec($cmd);
 