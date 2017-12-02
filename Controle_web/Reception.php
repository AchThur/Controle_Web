<?php    
    if (isSet($_COOKIE['compteur'])){
        $message = "Vous êtes déjà venu {$_COOKIE['compteur']} fois </br>";
        $valeur = $_COOKIE['compteur'] + 1;
    }else{
        $message = "Bonjour, c'est votre première visite";
        $valeur = 1;
    }
    SetCookie ('compteur', $valeur);

    echo $message;
    ?>
        <?php
        $date = date("H-i d-m-Y");
        setcookie("DateCookie",$date);
        ?> 
<form method="POST" action="Page_inscription.php" name="Formulaire"/>
	<body> 
		<?php 
        $nom=$_POST['nom'];
        echo"Votre nom est  : ",$nom;
        echo '</br>';
		$mail=$_POST['emailverif'];
        echo "Votre adresse est :\n ",$mail;
        echo '</br>';
        $num=$_POST['Numero'];
        echo " Votre numero de telephone:", $num; 
        echo '</br>'; 
        $sex=$_POST['sex'];
        switch($sex){
            case "Homme" :
                echo'<style type="text/css">
                body
                {background-color : red;}
                </style>';
            break;
            case "Femme" :
                echo'<style type="text/css">
                body
                {background-color : pink;}
                </style>';
            break;
            case "Transgenre" : 
                echo'<style type="text/css">
                body
                {background-color : yellow;}
                </style>';
            break;

        }
        echo"Vous êtes un(e) :\n",$sex;
        echo '</br>';
        $age=$_POST['y'];
        $age=date("Y")-$age;
        echo ("vous avez  : $age ans cette année \n");
        echo '</br>';

    ?> 
    <a href="Tableau_presence.php" > Fiche de presence </a>
        
    


    </body>
</html>