<?php

class util{
    static function hellowworld(){
        echo 'hellowFromUtil ';
    }
    
    static function formatop($msg){
    return "<h1>{$msg}</h1>";
    }

    static function formattemp($msg){
    return util::formatop("Temp </br>  {$msg[data_items::alias_temp]} C")."<h4>"."Mode :".data_ctrl::get_currMode()."</br> Speed : ".data_ctrl::get_currSpeed()
            ."</br> Swing : ".data_ctrl::get_currSwing()."</h4>";
    }
}

?>

