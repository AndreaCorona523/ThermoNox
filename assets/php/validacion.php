<?php
    $valid = true;
    $variables = array();
    
	if(isset($_POST['enviar'])){     
        if($language=='es'){
            if(empty($name)){
                $variables[] = 'nombre';
                $valid = false;
            }
            if(empty($email)){
                $variables[] = 'correo electrónico';
                $valid = false;
            }else{
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo "<p class='error'>* El correo es incorrecto </p>";
                    $valid = false;
                }
            }
            if(empty($subject)){
                $variables[] = 'asunto';
                $valid = false;
            }
            if(empty($message)){
                $variables[] = 'mensaje';
                $valid = false;
            }
            if(empty($city)){
                $variables[] = 'municipio';
                $valid = false;
            }
            if(empty($state)){
                $variables[] = 'estado';
                $valid = false;
            }
            if(empty($zip_code)){
                $variables[] = 'código postal';
                $valid = false;
            }else{
                if(!is_numeric($zip_code)){
                    echo "<p class='error'>* El código postal tiene que ser un número</p>";
                    $valid = false;
                }
            }
            if(empty($country)){
                $variables[] = 'país';
                $valid = false;
            }
    
            foreach ($variables as &$field) {
                echo "<p class='error'>* Ingrese su ". $field ."</p>";
            }
            
        }else{
            if(empty($name)){
                $variables[] = 'name';
                $valid = false;
            }
            if(empty($email)){
                $variables[] = 'email';
                $valid = false;
            }else{
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo "<p class='error'>* The email is invalid </p>";
                    $valid = false;
                }
            }
            if(empty($subject)){
                $variables[] = 'subject';
                $valid = false;
            }
            if(empty($message)){
                $variables[] = 'message';
                $valid = false;
            }
            if(empty($city)){
                $variables[] = 'city';
                $valid = false;
            }
            if(empty($state)){
                $variables[] = 'state';
                $valid = false;
            }
            if(empty($zip_code)){
                $variables[] = 'zip code';
                $valid = false;
            }else{
                if(!is_numeric($zip_code)){
                    echo "<p class='error'>* The zip code has to be numeric</p>";
                    $valid = false;
                }
            }
            if(empty($country)){
                $variables[] = 'country';
                $valid = false;
            }
    
            foreach ($variables as &$field) {
                echo "<p class='error'>* Add your ". $field ."</p>";
            }

        }

        if(!empty($_POST['send_copy'])){
            $send_copy=$_POST['send_copy'];
        }
        if(!empty($_POST['privacy_policy'])){
            $privacy_policy=$_POST['privacy_policy'];
        }
        
        if($valid){
            include("correo.php");
        }
    }
?>


