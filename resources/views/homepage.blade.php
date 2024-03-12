<div>
    <h1>Page d'accueil OMG</h1>
    <h2>Liste des users</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
    @endforeach
</div>
