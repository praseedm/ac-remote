<?php

class ctrl{
    static $name;
    static function hellowworld(){
        echo 'hellowFromCtrl ';
    }
    
    static function limitTemp($val){
        if($val >= 30 ) {
            return 30;
        }
        elseif ($val <= -10) {
            return -10; 
            
        }
        return $val;        
    }
            


    static function resetTemp()
    {
        data_items::$rem_data[data_items::alias_temp]= data_items::temp_default;
        data_ctrl::savevalues();
    }
    
    static function fn_on()
       {    
            data_items::$rem_data[data_items::alias_status] = 1;
            data_ctrl::savevalues();   
            $op = util::formattemp(data_items::$rem_data);
            echo  $op;
       }
       
    static function fn_off()
       {
          data_items::$rem_data[data_items::alias_status] = 0;
          data_ctrl::savevalues(); 
          $msg = "Switch ON";
          $op = util::formatop($msg);
          echo  $op;
       }
    
    static function fn_incTemp()
       {
        $check = data_items::$rem_data[data_items::alias_temp];
        data_items::$rem_data[data_items::alias_temp] = ctrl::limitTemp($check += 1);
        data_items::$rem_data[data_items::alias_mode]= data_items::def_mode;
        data_ctrl::savevalues();   
        $op = util::formattemp(data_items::$rem_data);
        echo  $op;
       }

    static function fn_decTemp()
       {
         $check = data_items::$rem_data[data_items::alias_temp];
        data_items::$rem_data[data_items::alias_temp] = ctrl::limitTemp($check -= 1);
         data_items::$rem_data[data_items::alias_mode]= data_items::def_mode;
         data_ctrl::savevalues();   
         $op = util::formattemp(data_items::$rem_data);
         echo  $op;
       }

    static function  fn_reset(){
        data_ctrl::set_default();
        $op = util::formattemp(data_items::$rem_data);
        echo  $op;
       }
    
       static function fn_changeMode(){
           $i = data_items::$rem_data[data_items::alias_mode];
           $i += 1;
           $i = $i % sizeof(data_items::modes);
           data_items::$rem_data[data_items::alias_mode] = $i;
           ctrl::setMode($i);  
           $op = util::formattemp(data_items::$rem_data);
           echo  $op;
       }
       
       static function fn_changeSwing(){
           $i = data_items::$rem_data[data_items::alias_swing];
           $i += 1;
           $i = $i % sizeof(data_items::swings);
           data_items::$rem_data[data_items::alias_swing] = $i;
           data_items::$rem_data[data_items::alias_mode]= data_items::def_mode;
           data_ctrl::savevalues();   
           $op = util::formattemp(data_items::$rem_data);
           echo  $op;
       }
       
       static function fn_changeSpeed(){
           $i = data_items::$rem_data[data_items::alias_speed];
           $i += 1;
           $i = $i % sizeof(data_items::speeds);
           data_items::$rem_data[data_items::alias_speed] = $i;
           data_items::$rem_data[data_items::alias_mode]= data_items::def_mode;
           data_ctrl::savevalues();   
           $op = util::formattemp(data_items::$rem_data);
           echo  $op;
       }
       
       static function setMode($int){
           data_items::$rem_data = data_items::mode_array[$int];
           data_ctrl::savevalues();
       }
       
    }
?>