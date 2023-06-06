<?php

function connecter(){ 
    return new mysqli('localhost' , 'root' , '' , 'voyage',3308);
}
  
function Sauvgarder(){ 
        $connect = connecter();
        if ( !($connect) ) {
            die ('Connection Failed');
        }else{
            $incr++;
            $name= $_POST['Continentajout'];
            $query = "insert into contient values ('$incr','$name');";
            $result = mysqli_query($connect, $query);
            echo "vous avez sauvgarder avec succés !";
        }
    }

function listeselect($table,$code){
    $connect = connecter();
    if ( !($connect) ) {
        die ('Connection Failed');
    }else{
        $sql2 = $connect->query("SELECT * FROM ".$table.";");
        $a = $sql2->fetch_all(MYSQLI_ASSOC);
        if ($a == null)
        echo "<option value='VIDE'>";
        else {
        foreach ($a as $i) {
            echo "<option value=".$i[$code].">".$i[$code]."</option>";
            }
        }
        $sql2=$a=null;
    }   
}

function insertVill(){
    $connect = connecter();
    if ( !($connect) ) {
        die ('Connection Failed');
    }else{
        $nom= $_POST['nomVilInsert'];
        $CodePays= $_POST['CodePaysInsert'];
    }
}
$JsonFile = array();
function Recherche()
{
    $connexion = connecter();
    if (!$connexion)
        echo "there are some probleme";

    $sql = "SELECT * from ville join pays, contient where ville.idpay = pays.idpay AND pays.idcon= contient.idcon;";

    $sql2 = $connexion->query($sql);
    if ($sql2 == null)
        echo"<p>Vide</p>";
    else {
        $a = $sql2->fetch_all(MYSQLI_ASSOC);
        if ($a == null)
        echo"<p>Vide</p>";
        else {
            foreach($a as $i ) {
                echo"<p style margin='10px';
                border-style='1px solide'; 
                border-radius = '3px'; >".$i['Nomvil']."</p>";
            }
        }
    }
}

function Binom(){
    echo"
<ul>
<li class='Grey'>OUAHABI Benhenni </li>
<li class='Atoui'>ATOUI Rayane </li>
<li>Spécialité : INFO </li>
<li>Section : 1 </li>
<li>Groupe : 6 </li>
<li>E-Mail :
    <ul>
        <li class='email'>Grey.lanisteur123@gmail.com    </li>
        <li class='email'>At.rayane03@gmail.com    </li>
    </ul> 
</li>

</ul>";
}



?>