
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
      <?php if(isset($_POST['onButton'])){
                                ctrl::fn_on();
                            } 
      if( ((data_items::$rem_data[data_items::alias_status]) == 0) ||(isset($_POST['offButton'])) ): ?>
        
        <div class="card off" style='margin:0px auto;'>
            <div style='text-align: center;'>
                <?php ctrl::fn_off(); ?>
            </div>
            
        </div>
        
      <?php else: ?>
            <div class="card" style='margin:0px auto;'>
                <div style='text-align: center;' >
                    <?php 
                        if($_POST){
                            if (isset($_POST['addButton'])){
                                ctrl::fn_incTemp();
                            }
                            elseif (isset($_POST['subButton'])){
                                ctrl::fn_decTemp();
                            }
                            elseif (isset($_POST['modeButton'])){
                                ctrl::fn_changeMode();
                            }
                            elseif (isset($_POST['speedButton'])){
                                ctrl::fn_changeSpeed();
                            }
                            elseif (isset($_POST['swingButton'])){
                                ctrl::fn_changeSwing();
                            }
                            elseif (isset($_POST['resetButton'])){
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
                <form action='indexpost.php' method="post">
                    <button class="btn on" type="submit" name="onButton" value="1">ON </button>
                    <button class="btn off" type="submit" name="offButton" value="1">OFF </button>
                </form>
            </div>
            <div>
                <form action='indexpost.php' method="post">
                    <button class="btn normal" type="submit" name="addButton" value="1">+1 </button>
                    <button class="btn normal" type="submit" name="subButton" value="1">-1 </button>
                </form>
            </div>
            <div>
                <form action='indexpost.php' method="post">
                    <button class="btn normal" type="submit" name="modeButton" value="1">mode </button>
                    <button class="btn normal" type="submit" name="speedButton" value="1">speed </button>
                </form>
            </div>
            
            <div>
                <form action='indexpost.php' method="post">
                    <button class="btn normal" type="submit" name="swingButton" value="1">swing </button>
                    <button class="btn reset" type="submit" name="resetButton" value="1">reset </button>
                </form>
            </div>
        
        </div>
        
    </div>

    
    

</body>
</html>



