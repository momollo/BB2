<!DOCTYPE html>
<html>
<head>
    <title>Créer une recette</title>
</head>
<body>
    <h1>Créer une recette</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recettes.store') }}" method="POST">
        @csrf
        <div>
            <label>Titre :</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>

        <div>
            <label>Description :</label>
            <textarea name="body">{{ old('body') }}</textarea>
        </div>

        <div>
            <button type="submit">Enregistrer</button>
        </div>
    </form>

    <a href="{{ route('recettes.index') }}">Retour à la liste des recettes</a>
</body>
</html>
