<!doctype html>
<head>
<meta charset="utf-8" />
</head>
<h1 style="font-size:36px">ßüőƔſᶺ࿊࿋࿌༃༒྾྿^</h1>
<pre>

<?php

$txt = $_GET['txt'];
if(empty($txt))
$txt='nondir.txt';

$ar = explode("\n", $txt);
$target_out = array_shift($ar);
$target_out = chop($target_out);
if(!preg_match('/^[A-Za-z0-9]+\.(php|txt|html|htm|java|c|cpp)$/', $target_out))
{
  echo "'$target_out' does not match\n";
  $target_out = 'nondir.txt';
  echo 'resetting target out to nondir.txt' . "\n";
  $ar = explode("\n", $txt);
}
$content_out = implode("\n", $ar);
$ar = null;

echo "<a href=\"n/$target_out\">n/$target_out</a> written with " . strlen($content_out) . ' content, <a href="/n/">/n/</a>  <a href="n/">n/</a>';

file_put_contents('n/' . $target_out, $content_out);
?></pre>
