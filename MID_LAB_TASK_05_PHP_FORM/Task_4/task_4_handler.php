<?php
	
	if(isset($_REQUEST['Submit'])){

        if(isset($_REQUEST['gender'])){

            if($_REQUEST['gender']=="Male"){
                $error="Valid Gender";
                $mGender= 'checked' ;
            }
            if($_REQUEST['gender']=="Female"){
                $error="Valid Gender";
                $fGender= 'checked' ;
            }
            if($_REQUEST['gender']=="Other"){
                $error=" Valid Gender";
                $oGender= 'checked' ;
            }

        }
        else{
            $error="Invalid Gender";
            
        }
    }
?>