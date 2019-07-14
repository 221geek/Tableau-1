<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body{
background-color: rgb(243, 196, 134);

}


td{
border :1px black solid;
padding: 8px ;
background-color: white;

}
.niveauu{
background-color: yellow;

}
</style>
</head>
<body>  

<?php
// definition des variables et valeurs
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
    $nameErr = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
    }
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
} else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
} else {
    $gender = test_input($_POST["gender"]);
}
}

function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
?>

<h2>Formulaire d'inscription</h2>
<p><span class="error">* Obligatoie</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            Prenom: <input type="text" name="name" value="<?php echo $name;?>">
            <br><br>
            Nom: <input type="text" name="name" value="<?php echo $name;?>">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            Genre:
            <input type="radio" name="gender" value="female">Femme
            <input type="radio" name="gender" value="male">Homme 
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            Pays:
            <select name="server" id=" pays">
                    <option value="Senegal" selected="selected">Tunisie </option>
                    <option value="Algerie">Algerie</option>
                    <option value="Mali">Mali </option>
                    <option value="Afrique_du_sud">Afrique_du_Sud </option> 
                    <option value="Albanie">Albanie </option>
                    <option value="Benin">Benin </option>
                    <option value="Allemagne">Allemagne </option>
                    <option value="Madagascar">Andorre </option>
                    <option value="Angola">Angola </option>
                    <option value="Egypte">Egypte </option>
                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                    <option value="Argentine">Argentine </option>
                    <option value="Ghanna">Ghanna</option> 
                    <option value="Australie">Australie </option>
                    <option value="Autriche">Autriche </option>
                    </select>
                    <br><br>
                    Langage:
            <input type="checkbox" name="langage[]"  value="female">php
            <input type="checkbox" name="langage[]"  value="male">Java
            <input type="checkbox" name="langage[]"  value="male">Css
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email;?>">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Date de Naissance: <input type="text" name="website" value="<?php echo $website;?>">
            <br><br>
            Commentaire: <textarea name="comment" rows="5" cols="40" maxlength= "10"><?php echo $comment;?></textarea>
            <br><br>
            <input type="submit" name="submit" value="Enregistrer">  
</form>
<br> <br>
<!--Déclaration du tablau-->
<?php

    $tableau = array(
      array('Fatima Anta','Seck','Femme' ,'Senegal' ,'Java' ,'antafatima@gmail.com','01/02/2000' ,'Merci pour vos explications'),
      array('Fatima Anta','Seck','Femme' ,'Senegal' ,'Java' ,'antafatima@gmail.com','01/02/2000' ,'Merci pour vos explications'),
      array('Fatima Anta','Seck','Femme' ,'Senegal' ,'Java' ,'antafatima@gmail.com','01/02/2000' ,'Merci pour vos explications'),
      array('Fatima Anta','Seck','Femme' ,'Senegal' ,'Java' ,'antafatima@gmail.com','01/02/2000' ,'Merci pour vos explications'),
      array('Fatima Anta','Seck','Femme' ,'Senegal' ,'Java' ,'antafatima@gmail.com','01/02/2000' ,'Merci pour vos explications')
    );
?>
<?php

if(isset($_POST['validation'])){
if(!empty ($_POST['Prenom']) AND !empty($_POST['Nom']) AND !empty($_POST['Genre']) AND !empty($_POST['Pays' ]) AND !empty($_POST['Langage' ]) AND !empty($_POST['Email' ]) AND !empty($_POST['Date de naissance']) AND !empty($_POST['Commentaire' ]))
;

$Prenon= $_POST['Prenom' ];
$Nom= $_POST['Nom' ];
$Genre= $_POST['Genre' ];
$Pays= $_POST['Pays' ]?$_POST['pays' ]:null;
$Langages= $_POST['Langage']?$_POST['Langage' ]:null;
$Email= $_POST['Email' ];
$Date_de_naissance= $_POST['Date de naissance' ];
$Commentaire= $_POST['Commentaire' ];

foreach ($Langages as $value) { 
  $langage = '$langage $value';}

}
  foreach ($Pays as $Payschoisi ){ array_push($tableau, array($Prenom, $Nom, $Genre, $Pays, $Langage, $Email, $Date_de_naissance, $Commentaire));

}
?>





<div class="tableau">

<table>
      <tr class="niveau">
                                                              <td> prenom </td>
                                                              <td> Nom </td>
                                                              <td> Genre</td>
                                                              <td> Pays</td>
                                                              <td> Langage</td>
                                                              <td> Email </td>
                                                              <td> Date de Naissance</td>
                                                              <td> Commentaire </td>
      </tr>

<?php
      foreach($tableau as $lign){
?>

      <tr>
                    <?php
                        foreach($lign as $element){
                            echo '<td>'.$element.'</td>';
                        }
                        
                    ?>
      </tr>
<?php 
}
?>

</table>
    </div>
    
</body>
</html>