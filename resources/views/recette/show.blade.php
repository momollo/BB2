<!DOCTYPE html>
<html>
<head>
    <title>Afficher une recette</title>
</head>
<body>
    <h1>{{ $recette->title }}</h1>
    <p>{{ $recette->body }}</p>

    <a href="{{ route('recettes.index') }}">Retour à la liste des recettes</a>
</body>
</html>
