<DOCTYPE html> 
<html>
<head> 
	<title> Site internet </title>
    <link rel="stylesheet" href="Css/style.css"/>

    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <script src = "Js/JavaScript.js"></script> 
</head>
<body id="js"> 
<form class="form-basic" method="post" name="INSCRIPTION" action="Reception.php">
                <h1>INSCRIPTION</h1>


                <label>
                    <h4>NOM COMPLET</h4>
                    <input type="button" placeholder="Votre Nom "  id="nom" name="Nom" />
                </label>


                <label>
                     <h4> Veuillez saisir un mot de passe </h4>
                     <input type="password" name="MDP" placeholder="Mot De Passe" required id="mdpasse">
                 </label>

                 <label>
                     <h4> Verifier votre mot de passe </h4>
                     <input type="password" name="MDPVerif" placeholder="Mot De Passe verifaction" onBlur="validation();" required >
                 </label>


                <label>
                    <h4>Email</h4>
                    <input type="email" name="emailverif" onchange="change();" placeholder="aaa@bbb.com" required id="email">
                </label>


                <label>
                    <h4>Numero</h4>
                    <input type="number" name="Numero"  placeholder="Facultatif">
                </label>


                <label>
                     <h4>Date de naissance</h4>
                </label>
            <?php
                    echo "<SELECT name='i' Size='1'>";
                    
                        for($i=1; $i<=31;$i++){        //Lister les jours
                    
                                if ($i < 10){            //Lister les jours pour pouvoir leur ajouter un 0 devant
                                echo "<OPTION>0$i JOURS <br></OPTION>";
                                    }
                                else {
                                echo "<OPTION>$i JOURS <br></OPTION>";
                                        }
                                            }
                    echo "</SELECT>";
                    
                    echo '<SELECT name="d" Size="1">';
                    
                        for($d=1; $d<=12;$d++){        //Lister les mois
                    
                                if ($d < 10){            //Lister les mois pour pouvoir leur ajouter un 0 devant
                                echo "<OPTION>0$d MOIS<br></OPTION>";
                                    }
                                else {
                                echo "<OPTION>$d MOIS <br></OPTION>";
                                        }
                                            }
                    echo "</SELECT>";
                    
                    $date = date('Y');       //On prend l'année en cours
                        
                    echo '<SELECT name="y" Size="1">';
                    
                        for ($y=1900; $y<=$date; $y++) {           //De l'année 1900 à l'année actuelle
                            echo "<OPTION><br>$y ANNEE <br></OPTION>"; }
                    echo "</SELECT>";
?>
                        <label><h4>Vous êtes un(e) : </h4></label>

                        <label>
                            <h4>Homme</h4>
                            <input type="radio" name="sex" value="Homme" checked>
                           
                        </label>


                        <label>
                            <h4>Femme</h4>
                            <input type="radio" name="sex"value="Femme" >
                            
                        </label>


                        <label>
                             <h4>Transgenre</h4>
                            <input type="radio" name="sex"value="Transgenre" >
                            
                        </label>


                        <label>
                            <input type="submit" name="VALIDER"  value="envoyer" >
                        </label>

 </body>
 </html>