<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Your first HTML form</title>
</head>

<style>
    .champ,
    button {
        margin: 20px;
    }

    #selection {
        background-color: powderblue;
    }
</style>

<body>
    <form action="thanks.php" method="post">
        <div class="champ">
            <label for="name">nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div class="champ">
            <label for="firstname">prenom :</label>
            <input type="text" id="firstname" name="user_firstname">
        </div>
        <div class="champ">
            <label for="mail">e-mail :</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div class="champ">
            <label for="telephone">telephone:</label>
            <input type="telephone" id="telephone" name="user_telephone">
        </div>
        <div class="champ">
            <label> Choisissez le sujet:
                <select name="user_selection">
                    <option value="inscription">inscription</option>
                    <option value="paiement" selected>paiement </option>
                    <option value="facture">facture</option>
                </select>
            </label>
        </div>
        <div class="champ">
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
        <br>



    </form>
</body>

</html>