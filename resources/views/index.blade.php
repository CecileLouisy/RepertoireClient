<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <title>Liste des clients</title>    
</head>
<body>
    <div class="containerArticles">
        <h1>Liste des clients</h1>
        <div >
            <ul>
                @foreach ($contacts as $contact)
                <li class="articles">
                    <a href="/update/{{$contact->id}}" class=show>{{$contact->nom}} {{$contact->prenom}}</a>
                    <form action="/delete/{{$contact->id}}" method="post">
                            @csrf
                            @method("delete")
                        <button class=show><img src="/trash.png" alt="supprimer"></button>
                    </form>
                </li>
                @endforeach 
            </ul>       
        </div>
        <a href="/create" class=add>Ajouter un client</a>
    </div>   
</body>
</html>