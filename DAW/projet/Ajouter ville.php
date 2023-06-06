<?php include "API.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="">
    <meta name="description" content="this page is the home page of "/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <link rel="stylesheet" href="Style.css">

    <!--my web site icon-->
    <link rel="icon" href="./src imgs/png-transparent-hotel-ligarb-tourism-travel-agency-hotel.svg" >
    <!--my web site title-->
    <title>Ajouter Ville</title>
</head>
<body>
    <nav>
        
        <div id="Etudiant">
            <h3>Realisé par :</h3>
             <?php Binom();?>
        </div>

        <div class="ligne"></div> </br>

        <div id="AjouterVille">
            <a href="./index.php">page d’accueil</a>
        </div>
    </nav>
    
    <div id="Bodyleft">
        <!---->
        <header>
            <img height="300px" width="100%" src="./src imgs/guide de voyage.jpg" alt="guide de voyage">
            <H1>Le titre de site de voyages</H1>
        </header>

        <section>    
            <h3>Ajouter une Ville</h3>
            <form id="Recherche-info" method="POST" action="postGet.php">
                <div id="main-info">
                    <div class="contain">
                        <label for="Continent">Continent </label> 
                        <input type="text" id="Continent" name="Continent" size="10" list="continent" required>
                        <datalist id='continent'>
                            <?php listeselect('Contient','Nomcon')?>
                        </dataliste>
                    </div>
                    <div class="contain">
                        <label for="Ville">Ville </label>  <input type="text" id="Ville" name="Ville" size="10" list="ville"  required>
                        <datalist id='ville' >
                            <?php listeselect('ville','Nomvil'); ?>
                        </datalist>
                    </div>
                    <div class="contain">
                        <label for="Pays">Pays </label>  <input type="text" id="Pays" name="Pays" list="pays" size="10" required>
                            <datalist id = "pays">
                                <?php listeselect('pays','Nompay'); ?>
                            </datalist>
                    </div>
                    <div class="contain">
                        <label for="Site">Site </label>  <input type="text" id="Site" name="Site" size="10" placeholder="Casbas" required>    
                    </div>
                </div>

                <div id="details">
                    <div class="contain">
                        <label for="Descriptif">Descriptif </label> <br>
                        <textarea id="Descriptif" name="Descriptif" placeholder="description" size="255" required></textarea>        
                    </div>
                    <div class="contain">
                        <label for="Photos">Photos </label> <br>
                        <input type="url" id="Photos" name="Photos" multiple="multiple" placeholder="photo1.png" required>
                        <button id="add" onclick="" name="add">Ajouter</button>
                        <select name="Photos" size="5" multiple>  
                              
                        </select>        
                    </div>
                </div>

                <h4>plus de details</h4>

                <div id="tourist-areas">
                    <div class="contain">
                        <label for="Hôtels">Hôtels </label> <input type="text" id="Hôtels" name="Hôtels" size="20">
                        <button id="add" onclick="" name="add">Ajouter</button>
                        <select name="Hôtels" size="5" multiple>  
                            <option value="Hôtel1"> Hôtel1 </option>  
                            <option value="Hôtel2"> Hôtel2 </option>  
                            <option value="Hôtel3"> Hôtel3 </option>   
                        </select> 
                    </div>
                    <div class="contain">
                        <label for="Restaurants">Restaurants </label>  <input type="text" id="Restaurants" name="Restaurants" size="20">
                        <button id="add" onclick="" name="add">Ajouter</button>
                        <select name="Restaurants" size="5" multiple>  
                            <option value="Restaurant1"> Restaurant1 </option>  
                            <option value="Restaurant2"> Restaurant2 </option>  
                            <option value="Restaurant3"> Restaurant3 </option>   
                        </select> 
                    </div>
                    <div class="contain">
                        <label for="Gares">Gares </label>  <input type="text" id="Gares" name="Gares" size="20">
                        <button id="add" onclick="" name="add">Ajouter</button>
                        <select name="Gares" size="5" multiple>  
                            <option value="Gare1"> Gare1 </option>  
                            <option value="Gare2"> Gare2 </option>  
                            <option value="Gare3"> Gare3 </option>   
                        </select> 
                    </div>
                    <div class="contain">
                        <label for="Aéroports">Aéroports </label>  <input type="text" id="Aéroports" name="Aéroports" size="20">
                        <button id="add" onclick="" name="add">Ajouter</button>
                        <select name="Aéroports" size="5" multiple>  
                            <option value="Aéroport1"> Aéroport1 </option>  
                            <option value="Aéroport2"> Aéroport2 </option>  
                            <option value="Aéroport3"> Aéroport3 </option>   
                        </select> 
                    </div>
                </div>
                
                <button id="add" onclick="" name="add">Ajouter</button>
            </form>  
            
            </br>
            
        </section>

    </div>
</body>
</html>