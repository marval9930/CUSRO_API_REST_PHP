<?php
function autoload($class){
    require($class.".php");
    echo $class.".php" ."<br>";
}
spl_autoload_register('autoload');