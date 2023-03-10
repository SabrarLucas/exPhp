<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <header>
        <img src="src/img/jarditou_logo.jpg" alt="jarditou logo" title="jarditou logo" class="logo">
        <p class="slogan">Tout le jardin</p>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="tableau.html">Tableau</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <img src="src/img/promotion.jpg" alt="jarditou promo" title="jarditou promo" class="promo">
    <section>               
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" id="formulaire">
            <h2>Contact</h2>
            <p>* Ces zones sont obligatoires</p>
            <fieldset>
                <legend>Vos coordonnées</legend>
                <label for="nom">Votre nom* : </label><input type="text" name="nom" id="nom">
                    <span id="RaisonNom"></span> <br>
                <label for="prenom">Votre prénom* : </label><input type="text" name="prenom" id="prenom">
                    <span id="RaisonPrenom"></span> <br>
                <label>Sexe* : </label>
                    <input type="radio" name="sexe" value="feminin" id="feminin"> 
                        <label for="feminin">Féminin</label>
                    <input type="radio" name="sexe" value="masculin" id="masculin">
                        <label for="masculin">Masculin</label>
                        <span id="RaisonSexe"></span><br>
                <label for="date">Date de naissance* :  </label><input type="date" name="ddn" id="date">
                    <span id="RaisonDate"></span><br>
                <label for="code_postal">Code postal* : </label><input type="text" name="code_postal" id="code_postal">
                    <span id="RaisonCodePost"></span><br>
                <label for="adresse">Adresse : </label><input type="text" name="adresse" id="adresse"><br>
                <label for="ville">Ville : </label><input type="text" name="ville" id="ville"><br>
                <label for="email">Email* : </label><input type="text" name="email" id="email">
                    <span id="RaisonMail"></span><br>
            </fieldset>
            <fieldset>
                <legend>Votre demande</legend>              
                <label for="sujet">Sujet* : </label>
                <select id="sujet" name="sujet"> 
                    <option value="selection" selected>Veuillez séléctionner un sujet</option>
                    <option>Mes commandes</option>
                    <option>Question sur un produit</option>
                    <option>Réclamation</option>
                    <option>Autres</option>
                </select>
                <label for="question">Votre question* : </label><textarea name="question" id="question" cols="30" rows="2"></textarea>
                <span id="RaisonQuestion"></span>
            </fieldset>
                <input type="checkbox" id="cb"> * J'accepte le traitement informatique de ce formulaire
                    <span id="RaisonCB"></span>
            <div id="idv_bt">
                <input type="submit" id="envoie" name="envoie" value="Envoyer" >
                <input type="reset" id="annuler" name="annuler" value="Annuler" >
            </div>
        </form>
        <div class="colonne">
            <p>[COLONNE DROITE]</p>
        </div>
    </section>
    <footer>
        <ul>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="#">Horaires</a></li>
            <li><a href="#">Plan du site</a></li>
        </ul>
    </footer>

    <?PHP
    //php -S 127.0.0.1:8080

    echo "Nom : " . $_REQUEST['nom'] . "<br>";
    echo "Prénom : " . $_REQUEST['prenom'] . "<br>";
    echo "Sexe : " . $_REQUEST['sexe'] . "<br>";
    echo "Date de naissance : " . $_REQUEST['ddn'] . "<br>";
    echo "Code postal : " . $_REQUEST['code_postal'] . "<br>";
    echo "Adresse : " . $_REQUEST['adresse'] . "<br>";
    echo "Ville : " . $_REQUEST['ville'] . "<br>";
    echo "Email : " . $_REQUEST['email'] . "<br>";
    echo "Sujet : " . $_REQUEST['sujet'] . "<br>";
    echo "Question : " . $_REQUEST['question'] . "<br>";


    ?>
</body>
</html>