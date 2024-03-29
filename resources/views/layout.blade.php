<!DOCTYPE html>
<html>
<head>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<div class="container">



<nav class="navbar navbar-expand-lg navbar-light bg-light" >

 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/profes')}}">profes <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/filieres')}}">filieres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/groupes')}}">groupes</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/stagiaires')}}">Stagiaires</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/modules')}}">Modules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/examens')}}">Examens</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/exercises')}}">Exercices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/seances')}}">Seances</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/notes')}}">Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/realisations')}}">Realisation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/absences')}}">Absences</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Inscription</a>
      </li>
      @else
      <li class="nav-item">
       BienVenue {{Auth::user()->name}}
      </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item">
      <form id="logout-form"action="{{route('logout')}}" method="POST"
        style="display:inline">
        @csrf
        <input type="submit" value="Logout"/>
      </form>
      </li>
      @endguest
    
    </ul>
 
</nav><br><br><br>

@yield('content')