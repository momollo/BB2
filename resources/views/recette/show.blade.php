<!DOCTYPE html>
<html>
<head>
    <title>Afficher une recette</title>
</head>
<body>
    <h1>Titre: {{ $recette->title }}</h1>
    <p>Recette: {{$recette->body }}</p>
    <p>Ingrédient: {{$recette->ingrédient}}
    <a href="{{ route('recettes.index') }}">Retour à la liste des recettes</a>
</body>
</html>
