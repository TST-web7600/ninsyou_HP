<?php

$languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
$languages = array_reverse($languages);

$result = '';

foreach ($languages as $language) {
  if (preg_match('/^ja/i', $language)) {
    $result = 'ja';
  } elseif (preg_match('/^en/i', $language)) {
    $result = 'en';
  } elseif (preg_match('/^ko/i', $language)) {
    $result = 'ko';
  } elseif (preg_match('/^zh-HK/i', $language)) {
    $result = 'zh-hant';
  } elseif (preg_match('/^zh-TW/i', $language)) {
    $result = 'zh-hant';
  } elseif (preg_match('/^zh/i', $language)) {
    $result = 'zh-hans';
  }
}

if ($result == '') {
  $result = 'ja';
}

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="refresh" content="0;url=./';
echo $result;
echo '/start.html"></head><body></body></html>';

?>