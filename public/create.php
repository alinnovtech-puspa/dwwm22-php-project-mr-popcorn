    <?php
       /**
        * -------------------------------------------------------
        * Traitement des données provenent du formulaire
        * -------------------------------------------------------
        */

       // Si les données du formulaire sont envoyée via la methode POST, 

       // Alors,
       // 2. Proteger le serveur contre les failles de securité
       //2a. Les failles de type csrf

       //2b. Les robots spameurs

       // 3. Proceder à la validation des données du formulaire

       //4. S'il existe au moins une erreur d"tecter par le systeme,
       // Alors,

       // 4a. Sauvegarder les message d'erreur en session, pour affichage en session

       // 4b. Sauvegarder les anciennes données provenant du formulaire en session

       // 4c. Effectuer une redirection vers la page de laquelle proviennent les informations
       //Puis arreter l'exécution du script.

       //5. Dans le cas contraire,
       // 5a. Arrondir la note à un chiffre après la virgule,

       // 6. Etablir une connexion avec la base de données

       // 7. Effectuer la requete d'insertion du nouveau film dans la table prévue (film)

       // 8. Génerer le message flash de succès

       // 9. Effectuer une redirection vers la page listant les films ajoutés (index.php)
       //puis arreter l'execution du script.
    ?>
    
    <?php 
       $title = "Nouveau film";
       $description = "Ajout d'un nouveau film";
       $keywords = "Cinéma, repertoire, ajout, nouveau, film, dwwm22";
    ?>
    
    
    
    <?php include_once __DIR__ . "/../partials/head.php"; ?>

    <?php include_once __DIR__ . "/../partials/nav.php"; ?>



    <!-- Main -->
    <main class="container">
        <h1 class="text-center my-3 display-5">Nouveau film</h1>

        <!-- Formulaire d'ajout d'un nouveau film -->
         <div class="contaier mt-5">
            <div class="row">
                <div class="col-md-8 col-lg-4 mx-auto p-4 bg-white shadow rounded">
                    <form method="post">
                        <div class="mb-3">
                            <label for="title">Titre <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="rating">Note / 5</label>
                            <input type="number" min="0" max="5" name="rating" step=".5" inputmode="decimal" id="rating" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="comment">Laissez un commentaire</label>
                            <textarea name="comment" id="comment" class="form-control" rows="4"></textarea>
                        </div>
                        <div>
                            <input type="submit" value="Ajouter" class="w-100 btn btn-primary shadow">
                        </div>
                    </form>
                </div>
            </div>
         </div>


    </main>

    <?php include_once __DIR__ . "/../partials/footer.php"; ?>

    <?php include_once __DIR__ . "/../partials/foot.php"; ?>