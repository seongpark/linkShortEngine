<?php 
    $link = $_POST['link'];

    
function random_str($length = 32)
{
    return bin2hex(random_bytes($length / 2));
}
 
$length = 7;
$rand_str = random_str($length);

$file = fopen("index.html", "w");
fwrite($file, '<meta http-equiv="refresh" content="0;url='.$link.'">');

    $folderName = $rand_str;
    $makeDir = mkdir($folderName, 777);
    if ($makeDir) {
      echo "https://unic.gq/"."{$folderName} 링크 생성에 성공했습니다.";
    } else {
      echo "단축 링크 생성 실패";
    }
?>