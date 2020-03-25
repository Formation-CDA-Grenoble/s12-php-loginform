<?php

setcookie('USERNAME', null, time() - 3600);
header('Location: index.php');
