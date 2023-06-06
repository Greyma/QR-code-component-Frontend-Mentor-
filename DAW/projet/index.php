<?php include "API.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="">
    <meta name="description" content="this page is the home page of "/>
  
    <link rel="stylesheet" href="Style.css">

    <!--my web site icon-->
    <link rel="icon" href="./src imgs/png-transparent-hotel-ligarb-tourism-travel-agency-hotel.svg" >
    <!--my web site title-->
    <title>Agence de Voyages</title>
</head>
<body>
    <nav>
        <!--informations des étudiants-->
        <div id="Etudiant">
            <h3>Realisé par :</h3>
            <?php Binom()?>
        </div>
        <div class="ligne"></div></br>
        
        <div id="AjouterVille">
            <a href="./Ajouter ville.php">Ajouter ville</a>
        </div>
    </nav>

    <div id="Bodyleft">
        <!---->
        <header>
                <img height="300px" width="100%" src="./src imgs/guide de voyage.jpg" alt="guide de voyage">
            
            <H1>Le titre de site de voyages</H1>
        </header>
        
        <section>
            <h3>Recherche</h3>
            <form id="Recherche" method="POST">
                <div class="contain">
                    <label for="Continent">Continent </label> 
                    <input type="text" id="Continent" name="Continent" size="10" list="continent" required>
                         <datalist id="continent">
                             <?php listeselect('Contient','Nomcon')?>
                        </datalist>
                </div>

                <div class="contain">
                    <label for="Ville">Ville </label>  <input list="ville" type="text" id="Ville" name="Ville"  >
                        <datalist id="ville" >
                                <?php listeselect('ville','Nomvil');?>
                        </datalist>
                </div>

                <div class="contain">
                    <label for="Pays">Pays </label>  <input type="text" id="Pays" name="Pays"  list="pays" >
                    <datalist id="pays" >
                            <?php listeselect('pays','Nompay'); ?>
                        </datalist>
                </div>

                <div class="contain">
                    <label for="Site">Site </label>  <input type="text" id="Site" name="Site" placeholder="Casbas">    
                </div>

 
            </form>  
            <button id="search" onclick="chercher()" name="search">Valider</button>
            </br>         
        </section>

        <section id="search-Result-Section">
            <div class="ligne"></div>
            </br>

            

            <div id="result">
                <h3>Résultat de la recherche</h3>
                <a href="">Resultat de recherche</a>
                
            <script>
                function chercher(){
                    var tab = <?php echo $JsonFile; ?> ;
                    console.log(tab);
                }
                
            </script>
            <?php Recherche(); ?>
            
            
          </div>

          <div id="rech">
                <p>Hello</p>
            </div>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur delectus in aliquid laudantium totam iusto ducimus eos ullam maiores eius. A officia mollitia iste eum unde placeat asperiores laboriosam quia, hic nisi enim facilis repudiandae laudantium esse consectetur, sit est maxime necessitatibus quidem! Accusamus ducimus, modi minima nostrum iusto ab repellat voluptate aperiam ea labore velit non enim iure corporis. Magni id, nisi ipsa dolorum temporibus distinctio molestiae eum recusandae laudantium eius deserunt amet eligendi, dolor assumenda dolorem tempora? Nulla culpa nobis, magnam sequi quod, delectus magni rem a qui ex aliquid, ipsa repellat molestiae optio repellendus eveniet provident ducimus?
        </section> 
    
    </div>
    
    
    </br>
</body>
</html>