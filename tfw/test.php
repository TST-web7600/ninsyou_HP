<?php

$languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
$languages = array_reverse($languages);

$result = '';

foreach ($languages as $language) {
  if (preg_match('/^ja/i', $language)) {
    $result = 'Japanese';
  } elseif (preg_match('/^en/i', $language)) {
    $result = 'English';
  } elseif (preg_match('/^ko/i', $language)) {
    $result = 'koriaaaa';
  } elseif (preg_match('/^zh-HK/i', $language)) {
    $result = 'Chinese(HK)';
  } elseif (preg_match('/^zh-TW/i', $language)) {
    $result = 'Chinese(TW)';
  } elseif (preg_match('/^zh/i', $language)) {
    $result = 'Chinese';
  }
}

if ($result == '') {
  $result = 'Japanese';
}

echo $result;
echo '<BR>';
echo $language;

?>