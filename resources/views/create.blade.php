<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un dragon</title>
</head>
<body>
<div> <form action="/dragons" method="POST">
    @csrf
    <label for="name">Nom:</label>
    <input type="text" name="name" id="name">
    <label for="height">Taille:</label>
    <input type="text" name="height" id="height">
    <label for="type">Type:</label>
    <input type="text"> <option values = "force"><option values = "vitesse"><option values = "technique"></option>
    <label for="level">Niveau:</label>
    <input type="int" name="level" id="level">
    <label for="born_at">Date de naissance:</label>
    <input type="date" name="born_at" id="born_at">
    <label for="is_in_team">Est dans l'équipe:</label>
    <input type="checkbox" name="is_in_team" id="is_in_team">
    <label for="image_path">Image:</label>
    <input type="text" name="image_path" id="image_path">
    <button>Créer</button>
</form></div>