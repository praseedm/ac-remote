<?php

class data_items{
    const temp_default = 18;
    const filename = "remotedb.json";
    const modes = array("cool","normal","hot");
    const speeds = array("fast","medium","slow");
    const swings = array("turbo","quiet");
    const def_mode = 1;
    
    const data_default = array(data_items::alias_status => 1, data_items::alias_temp => data_items::temp_default, data_items::alias_mode => 1,
                data_items::alias_speed => 1, data_items::alias_swing => 0);
    
    const cool = array(data_items::alias_status => 1, data_items::alias_temp => 06, data_items::alias_mode => 0,
                data_items::alias_speed => 0, data_items::alias_swing => 0);
    
    const normal = data_items::data_default;
    
    const hot = array(data_items::alias_status => 1, data_items::alias_temp => 30, data_items::alias_mode => 2,
                data_items::alias_speed => 2, data_items::alias_swing => 1);
    
    const mode_array = array(data_items::cool,data_items::normal,data_items::hot);
    
    static $rem_data = data_items::data_default;

    const alias_temp = "temp";
    const alias_mode = "mode";
    const alias_swing = "swing";
    const alias_speed = "speed";
    const alias_status = "status";
    
}

?>

