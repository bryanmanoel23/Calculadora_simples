<?php
//valida botões

if(isset($_POST['btn'])){
    $string = $_POST['criptografar'] ;
    $criptografia = base64_encode($string) ;
 }else{
        $criptografia = null;

    }
if(isset($_POST['btn2'])){
    $string2 = $_POST['descriptografar'] ;
    $descriptografia = base64_decode($string2) ;
       
    }else{
        $descriptografia = null ;
    }


?>
//cria formulario que recebe a criptografia e descriptografa
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="./mains.css" rel="stylesheet" />

</head>
<body background= "./wp2726641.jpg" bgproperties="fixed">

    <div class="formulario">
    <form  method="post">
        <fieldset><legend>formulario</legend>
        <label class="inputlabel">Recebe valor a ser criptografado:</label>
        <div class="inputbox">
        <input type="text" name="criptografar" class="inputtext" id="criptografar"  />    
        </div> 
        <div class="inputsubmit">
            <br/>  
        <input type="submit" name="btn" id="submit" value="criptografar" /><br/>
        </div>
            <br>
        <label class="inputlabel">Recebe a criptografia:</label>
        <div class="inputbox">
        <input type="text" name="descriptografar" class="inputtext" id="descriptografar" value="<?php print $criptografia ;?> " />     
        </div>
        <br/>
        <div class="inputsubmit">
        <input type="submit" name="btn2"  class="btn2" id="submit" value="descriptografar" /><br/>
        </div>
        <br/>
        <label class="inputlabel">Recebe Texto Original:</label>       
        <div class="inputbox">
        <input type="text" name="descriptografado" class="inputtext" id="descriptografado" value="<?php print "$descriptografia" ; ?> " />
        </div>
    </fieldset>
    

    </form>
    </div>
</body>
</html>

//arquivo css para estilazar

body {
    font-family: Arial, Helvetica, sans-serif;
}
.formulario {
    position: absolute;
    top: 50% ;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(24, 22, 22, 0.9);
    padding: 18px;
    border-radius: 20px;
    color: white;

       
     

}
fieldset {
    border : 4px solid rgb(25, 255, 25) ;
    text-align: center; 
    padding: 110px;   
    border-radius: 15px;
}
legend {
    border: 1px solid rgb(25, 255, 25) ;
    text-align: center;
    padding: 10px;
    background-color: rgb(25, 255, 25) ;
    border-radius: 8px;
 }
#submit {
    background-image: linear-gradient(to right, rgba(44, 255, 44, 0.808),rgb(11, 129, 0));
    width: 100%;
    border:none;
    padding: 15px;
    color: white;
    font-size:15px;
    cursor:pointer;
    border-radius: 10px;
}
#submit:hover {
    background-image: linear-gradient(to right, rgba(13, 121, 13, 0.808),rgb(16, 102, 16));
}
.inputtext {
    background: none;
    border: none;
    border-bottom: 2px solid white;
    font-size: 15px;
    outline: none;
    width: 100%;
    color:white;
}
