<!DOCTYPE html>
<html>
<head>
    <title>Recettes</title>
</head>
<body>
    <h1>Recettes</h1>
    <a href="{{ route('recettes.create') }}">Créer une nouvelle recette</a>

    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <ul>
        @foreach ($recettes as $recette)
            <li>
                <a href="{{ route('recettes.show', $recette->id) }}">{{ $recette->title }}</a>
                <a href="{{ route('recettes.edit', $recette->id) }}">Modifier</a>

                <form action="{{ route('recettes.destroy', $recette->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
