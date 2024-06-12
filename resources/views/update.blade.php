<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un client</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <h1>Modifier un client</h1>
    <form action="{{url('/update/'.$contact->id)}}" method="POST">
        @method("put")
        @csrf
        <div>
            <label for="nom">Nom *</label>
            <input type="text" name="nom" id="nom" 
            class="@error('nom') is-invalid @enderror"
            value="{{old('nom',$contact->nom)}}">
            @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="prenom">Prénom *</label>
            <input type="text" name="prenom" id="prenom" 
            class="@error('prenom') is-invalid @enderror"
            value="{{old('prenom',$contact->prenom)}}">
            @error('prenom')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="entreprise">Entreprise </label>
            <input type="text" name="entreprise" id="entreprise" 
            class="@error('entreprise') is-invalid @enderror"
            value="{{old('entreprise',$contact->entreprise)}}">
            @error('entreprise')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="telephone">Téléphone </label>
            <input type="number" name="telephone" id="telephone" 
            class="@error('telephone') is-invalid @enderror"
            value="{{old('telephone',$contact->telephone)}}">
            @error('telephone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div>
            <label for="email">Email </label>
            <input type="email" name="email" id="email"             
            class="@error('email') is-invalid @enderror"
            value="{{old('email',$contact->email)}}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="adresse">Adresse *</label>
            <input type="text" name="adresse" id="adresse" 
            class="@error('adresse') is-invalid @enderror"
            value="{{old('adresse',$contact->adresse)}}">
            @error('adresse')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="codePostal">Code postal *</label>
            <input type="text" name="codePostal" id="codePostal" 
            class="@error('codePostal') is-invalid @enderror"
            value="{{old('codePostal',$contact->codePostal)}}">
            @error('codePostal')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="ville">Ville *</label>
            <input type="text" name="ville" id="ville" 
            class="@error('ville') is-invalid @enderror"
            value="{{old('ville',$contact->ville)}}">
            @error('ville')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>               
        
        <div>
            <button type="submit" name="subFormUpdate" class="add">Enregistrer</button>
        </div>
    </form>
</body>
</html>