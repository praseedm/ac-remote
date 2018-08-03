
<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);

//session_start();
require_once './lib/util.php';
require_once './lib/ctrl.php';
require_once './data/data_ctrl.php';

/*if(!isset($_SESSION["temp"]))
    ctrl::resetTemp ();*/
 data_ctrl::loadvalues();
 
?>





<!DOCTYPE html>
<html>
<head>
<title>REMOTE</title>
<link rel="stylesheet" type="text/css" href="./css/theme.css">
</head>
<body>

    <div class="card" style='margin:0px auto;'>
      <?php if(isset($_GET['onButton'])){
                                ctrl::fn_on();
                            } 
      if( ((data_items::$rem_data[data_items::alias_status]) == 0) ||(isset($_GET['offButton'])) ): ?>
        
        <div class="card off" style='margin:0px auto;'>
            <div style='text-align: center;'>
                <?php ctrl::fn_off(); ?>
            </div>
            
        </div>
        
      <?php else: ?>
            <div class="card" style='margin:0px auto;'>
                <div style='text-align: center;' >
                    <?php 
                        if($_GET){
                            if (isset($_GET['addButton'])){
                                ctrl::fn_incTemp();
                            }
                            elseif (isset($_GET['subButton'])){
                                ctrl::fn_decTemp();
                            }
                            elseif (isset($_GET['modeButton'])){
                                ctrl::fn_changeMode();
                            }
                            elseif (isset($_GET['speedButton'])){
                                ctrl::fn_changeSpeed();
                            }
                            elseif (isset($_GET['swingButton'])){
                                ctrl::fn_changeSwing();
                            }
                            elseif (isset($_GET['resetButton'])){
                                ctrl::fn_reset();
                            }
                        echo date("d-l   h:i a");
                        }
                        else {
                            ctrl::fn_off();
                        }
                    ?>
                </div>
            </div>  
        <?php endif; ?>
        
        
        <div class="container" >
           
            <div>
                 <button class="btn on" id="on" name="onButton" onClick='location.href="?onButton=1"'>ON</button>
                 <button class="btn off" id="off" name="offButton" onClick='location.href="?offButton=1"'>OFF</button>
            </div>
            <div>
                 <button class="btn normal" id="add" name="addButton" onClick='location.href="?addButton=1"'>+1</button>
                 <button class="btn normal" id="sub" name="subButton" onClick='location.href="?subButton=1"'>-1</button>
            </div>
            <div>
             <button class="btn normal" id="mode" name="modeButton" onClick='location.href="?modeButton=1"'>mode</button>
             <button class="btn normal" id="speed" name="speedButton" onClick='location.href="?speedButton=1"'>speed</button>
            </div>
            
            <div>
             <button class="btn normal" id="swing" name="swingButton" onClick='location.href="?swingButton=1"'>swing</button>
             <button class="btn reset" id="reset" name="resetButton" onClick='location.href="?resetButton=1"'>reset</button>
            </div>
        
        </div>
        
    </div>

    
    

</body>
</html>



