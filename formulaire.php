<?php
if( isset ( $_POST['nombre1']) && isset( $_POST [ 'nombre2']) && isset($_POST['func']) )

{
$num1=$_POST['nombre1'];
$num2=$_POST['nombre2'];
$func=$_POST['func'];
}
if ($func=='+')
{

echo $num1+$num2;
}

elseif ($func=='-')

{ 
    
    echo $num1-$num2;
}

elseif ($func=='/')
{

    
    echo $num1/$num2;
}
else 
{

echo $num1*$num2;

}
?>

<!doctype <!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculatrice</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>

    <div class="calculatrice">


<form method= "post"action="">
                    <p> nombre1: <input type="text" name="nombre1"></p>
                    <p> nombre2: <input type="text" name="nombre2"></p>
                    <p>operateur:</p>
                        <select name="func">
                            <option value="+"> add[+] </option>
                            <option value="-"> sub[-] </option>
                            <option value="/"> div[/] </option>
                            <option value="*"> mul[*] </option>
                            
                        /select>
                        <input type="submit" value="calculer">
                        
</form>

    </div>
    </body>
</html>