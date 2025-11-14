<!DOCTYPE html>
<html>
<head>
    <title>Modifier une recette</title>
</head>
<body>
    <h1>Modifier une recette</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recettes.update', $recette->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Titre :</label>
            <input type="text" name="title" value="{{ $recette->title }}">
        </div>

        <div>
            <label>Description :</label>
            <textarea name="body">{{ $recette->body }}</textarea>
        </div>
 <div>
            <label>ingrédient :</label>
            <textarea name="ingrédient">{{ $recette->ingrédient }}</textarea>
        </div>

        <div>
            <button type="submit">Mettre à jour</button>
        </div>
    </form>

    <a href="{{ route('recettes.index') }}">Retour à la liste des recettes</a>
</body>
</html>
