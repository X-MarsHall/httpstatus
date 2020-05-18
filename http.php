<?php

echo "
   __   __  __           __       __         
  / /  / /_/ /____  ___ / /____ _/ /___ _____  Author : MarsHall
 / _ \/ __/ __/ _ \(_-</ __/ _ `/ __/ // (_-<  Team   : Xai Syndicate
/_//_/\__/\__/ .__/___/\__/\_,_/\__/\_,_/___/
            /_/                              
";

echo "\n";
$list = file_get_contents("s.txt");
$sl = explode("\n", $list);

foreach($sl as $http){
$get = get_headers($http, 1);

echo "[+] $http => $get[0]\n";

}