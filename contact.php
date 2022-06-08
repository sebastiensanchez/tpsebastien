



<?php include('header.php'); ?>
<div class="titre_contact">
    <!--<h3>Contactez-nous</h3>-->
</div>

<div class="container-formulaire">
    <form action="action_page.php">

        <label for="fname">Prénom</label>
        <input type="text" id="fname" name="firstname" placeholder="Prénom">
        <label for="lname">Nom</label>
        <input type="text" id="lname" name="lastname" placeholder="Nom">

        <label for="country">Pays</label>
        <select id="country" name="country">
            <option value="australia">France</option>
            <option value="canada">Belgique</option>
            <option value="usa">Alemagne</option>
        </select>

        <label for="lname">Code postal</label>
        <input type="text" id="lpostal" name="codePostal" placeholder="Code Postal">

<label for="le_nom">Vous avez entendu parler de nous via ?</label><br />
       <select name="le_nom" id="le_nom">
           <option value="ta_valeur">Internet</option>
           <option value="ta_valeur">La presse</option>
           <option value="ta_valeur">Un ami </option>
           <option value="ta_valeur">FaceBook</option>
                   
</select>

<label for="start">Date à laquelle vous souhaitez être recontacté</label>

<input type="date" id="start" name="trip-start"
       value="2022-01-01"
       min="2022-01-01" max="2022-12-31"><br><br>



        <label for="subject">Le sujet de votre message</label>
        <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

        <input type="submit" value="Envoyer">

    </form>
</div>


<?php include('footer.php'); ?>