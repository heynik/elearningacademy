<?php

header("Content-type: application/mp4");
header("Content-Disposition: attachment;filename=1.mp4");
header("Pragma: no-cache");
readfile("1.mp4");
exit;
?>