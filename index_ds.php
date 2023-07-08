<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire en PHP</title>
</head>
<body>
<form  action="thanks.php" method="POST">
      <label for="lastname">Nom :</label>
      <input type="text"  id="lastname"  name="lastname" placeholder="Nom"><br><br>
      <label for="firstname">Prénom :</label>
      <input type="text"  id="firstname"  name="firstname" placeholder="Prénom"><br><br>
      <label  for="email">Courriel :</label>
      <input  type="email"  id="email"  name="email" placeholder="Courriel"><br><br>
      <label  for="phoneNumber">Téléphone :</label>
      <input  type="tel"  id="phoneNumber"  name="phoneNumber" placeholder="Téléphone"><br><br>
      <label  for="subject">Sujet :</label>
      <select name="subject" id="subject">
        <option value="" ></option>
        <option value="question">Demande de renseignement</option>
        <option value="commentaire">Commentaire</option>
        <option value="problème">Signaler un problème</option>
      </select><br><br>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message" placeholder="Message"></textarea><br><br>
      <button  type="submit">Envoyer votre message</button>
  </form>
</body>
</html>