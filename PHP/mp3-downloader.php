<?php

function get_mp3()
{
    $url = fgets(STDIN);
    $ch = curl_init();

    $url = str_replace("\r","",$url);
    $url = str_replace("\n","",$url);

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Le blog de jeam (www.hikkary.com)');

    $result = curl_exec($ch);
    $posmp3 = strrpos($result,".mp3");

    $result = substr($result,0,$posmp3);
    $posgmt = strrpos($result,"'");
    $result = substr($result,$posgmt + 1);

    $mp3 = file_get_contents($result.".mp3");

    $name = explode("/",$url);
    $name = array_reverse($name);

    if(file_put_contents($name[0].".mp3",$mp3))
    {
      unset($url);
      unset($ch);
      unset($result);
      unset($posmp3);
      unset($mp3);
      unset($name);


      echo "ok !"."\n";
      get_mp3();
    }
    else {
      echo "no non o"."\n";
    }
}
get_mp3();
?>
