

    <main id="userRegister">


        <form method="post" action="index.php?register">

            <h1>Bienvenue</h1>

            <p class="choose-email">Rejoins la communauté :</p>

            <div class="inputs">

                <input type="text" id="prenom" name="prenom" placeholder="Prenom" required>
                <input type="text" id="nom" name="nom" placeholder="Nom" required>
                <label for="date_naissance">Date de naissance : </label>
                <input type="date" id="date_naissance" name="date_naissance" placeholder="Date de naissance" required>
                <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required>
                <input type="text" id="adress" name="adress" placeholder="Adresse" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="pass" name="pass" placeholder="Mot de passe" required>

            </div>
            <button type="submit" name="ok">Créer un compte</button>
        </form>
    </main>
