<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('style.css') }}">     --}}
</head>
<body>
    
<h2>Add a Categorie :</h2><br>
<div id="div">
<form  action="{{Route('filieres.update', $filiere->idfiliere)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="libelle">Libelle</label><br>
    <input type="text" name="libelle" id="input" value="{{$filiere->libelle}}" /><br><br>
    @error('libelle')
    <span style="color: red;">{{'*'.$message}}</span><br><br>
    @enderror
    <label for="nom">Infos</label><br>
    <input type="text" name="infos" id="input"  value="{{$filiere->infos}}"><br><br>
    @error('description')
    <span style="color: red;">{{'*'.$message}}</span>
    @enderror
    <br>
    <input type="submit" value="Submit"/>
</form>
</div>
<a href="{{ route('filieres.index') }}" class="btn">Back</a>

@if(session('message'))
  <span>{{session('message')}}</span>
@endif

</body>
</html>