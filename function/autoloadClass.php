<?php
/**
 * @param $pClassName
 */
function my_autoload ($pClassName) {
    include("../models/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");