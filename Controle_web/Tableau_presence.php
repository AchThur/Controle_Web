<DOCTYPE html> 
<html>
<head> 
	<title> Controle </title>
    <link rel="stylesheet" href="StyleSheet/FormulaireCss.css"/>
    <script src = "Js/JavaScript.js"></script> 
    <!--<script type="text/javascript" src="Javascript/Fonction_on_change.js" />--> 
</head>

<body>

<form method="GET" action="Tableau_presence.php">
<select name="Liste" id="Classe"> 
<?php $Etudiant = Array (F1 => $F1, F2 => $F2, L => $L, M => $M);

   foreach ($Etudiant as $key => $Value) {

       echo '<option>';
       echo $key; 
       echo '</option>';



   }

?>
</select>
<input type="submit" name"ValidationSaisie" value="AFFICHER LISTE" id="Validation">

<?php 

if (IsSet($_GET['Liste'])){
       switch ($_GET['Liste']){

        case "F1":
            
            echo '<table>';
            echo '<tr>';
            echo '<td>Photo</td> <td>prenom</td> <td>Nom</td> <td> Presence </td> <td> Commentaire </td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td> <img src=\"Image/Morty.png\" 
                            height=\"50px\"
                            width=\"50px\" 
                            /></td> <td>ACKER </td> <td>Prenom</td>
                            <td>
                            <radiogroup name=\"presence\">
                            <input type =\"radio\"  name=\"presence\" value=\"Present\" checked> Present 
                            <input type =\"radio\"  name=\"presence\"> value=\"Retard\"> Retard
                            <input type =\"radio\"  name=\"presence\">value=\"Absent\"> Absent
                            </radiogroup></td>
                            <td><input type = \"textarea\" value =\"commentaire\" placeholder=\"commentaire\"></td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td> <img src=\"Image/Morty.png\" 
                            height=\"50px\"
                            width=\"50px\" 
                            /></td> <td>ANDRIOLO </td> <td>Caroline</td>
                            <td><input type = \"radio \" value=\"Present\" name=\"presence\" checked>
                            <input type = \"radio\" value=\"Retard\" name=\"presence\">
                            <input type = \"radio\" value=\"Absent\" name=\"presence\"></td>
                            <td> <input type = \"textarea\" value =\"commentaire\" placeholder=\"commentaire\"></td>';
            echo'</tr>';

            break;

            case "F2":

                 
            echo '<table>';
            echo '<tr>';
            echo '<td>Photo</td> <td>prenom</td> <td>Nom</td> <td> Presence </td> <td> Commentaire </td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td> <img src=\"Image/Morty.png\" 
                            height=\"50px\"
                            width=\"50px\" 
                            /> <td>AULEN </td> <td>Lucas</td>
                            <td><input type = \"radio\" value=\"Present\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Retard\" name=\"presence\">
                            <input type = \"radio\" value=\"Absent\" name=\"presence\">
                            <input type = \"textarea\" value =\"commentaire\" placeholder=\"commentaire\">';
            echo'</tr>';

            echo '<tr>';
            echo '<td> <img src=\"Image/Morty.png\" 
                            height=\"50px\"
                            width=\"50px\" 
                            /> <td>GRIMAZ </td> <td>Jeremie</td>
                            <td><input type = \"radio\" value=\"Present\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Retard\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Absent\" name=\"presence\" check>
                            <input type = \"textarea\" value =\"commentaire\" placeholder=\"commentaire\">';
            echo'</tr>';

            break;

            case"L";

             
            echo '<table>';
            echo '<tr>';
            echo '<td>Photo</td> <td>prenom</td> <td>Nom</td> <td> Presence </td> <td> Commentaire </td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td> <img src=\"Image/Morty.png\" 
                            height=\"50px\"
                            width=\"50px\" 
                            /> <td>ACKERMANN </td> <td>Pierre</td>
                            <td><input type = \"radio\" value=\"Present\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Retard\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Absent\" name=\"presence\" check>
                            <input type = \"textarea\" value =\"commentaire\" placeholder=\"commentaire\">';
            echo'</tr>';

            echo '<tr>';
            echo '<td> <img src=\"Image/Morty.png\" 
                            height=\"50px\"
                            width=\"50px\" 
                            /> <td>BOURGUIGNON </td> <td>Kevin</td>
                            <td><input type = \"radio\" value=\"Present\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Retard\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Absent\" name=\"presence\" check>
                            <input type = \"textarea\" value =\"commentaire\" placeholder=\"commentaire\">';
            echo'</tr>';

            break; 

            case"M":


             
            echo '<table>';
            echo '<tr>';
            echo '<td>Photo</td> <td>prenom</td> <td>Nom</td> <td> Presence </td> <td> Commentaire </td>';
            echo '</tr>';

            echo '<tr>';
            echo '<td> <img src=\"Image/Morty.png\" 
                            height=\"50px\"
                            width=\"50px\" 
                            /> <td>Grasset </td> <td>Jordan</td>
                            <td><input type = \"radio\" value=\"Present\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Retard\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Absent\" name=\"presence\" check>
                            <input type = \"textarea\" value =\"commentaire\" placeholder=\"commentaire\">';
            echo'</tr>';

            echo '<tr>';
            echo '<td> <img src=\"Image/Morty.png\" 
                            height=\"50px\"
                            width=\"50px\" 
                            /> <td>HAENHAL </td> <td>VALENTIN</td>
                            <td><input type = \"radio\" value=\"Present\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Retard\" name=\"presence\" check>
                            <input type = \"radio\" value=\"Absent\" name=\"presence\" check>
                            <input type = \"textarea\" value =\"commentaire\" placeholder=\"commentaire\">';
            echo'</tr>';

            break;
       } 
    }
           
       
    
  ?>

</body>
