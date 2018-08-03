<?php

require_once 'data_items.php';


class data_ctrl{
        
    static function hellowworld(){
        echo 'hellowFromdata_ctrl '.data_items::$temp;
    }
    
    static function loadvalues(){
        
        if(!file_exists(data_items::filename)){
            data_ctrl::savevalues();
        }
        data_items::$rem_data = json_decode(file_get_contents(data_items::filename),true);
        //var_dump($temp["temp"]);
    }
    
    static function savevalues(){
        file_put_contents(data_items::filename, json_encode(data_items::$rem_data));
    }
    
    static function get_currMode(){
        return data_items::modes[data_items::$rem_data[data_items::alias_mode]];
    }
    
    static function get_currSpeed(){
        return data_items::speeds[data_items::$rem_data[data_items::alias_speed]];
    }
    
    static function get_currSwing(){
        return data_items::swings[data_items::$rem_data[data_items::alias_swing]];
    }
    
    static function set_default(){
        data_items::$rem_data = data_items::data_default;
        data_ctrl::savevalues();
    }

}

?>
