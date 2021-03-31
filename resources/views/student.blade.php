<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Système de gestion des apprenants</title>
  </head>
  <body class="bg-light">

  @include('navbar')
   
    @if($layout == 'index')
    <div class="container  mt-4">
                <div class="row">
                    <section class="col-12">
                    @include('studentslist')
                    </section>
                    
                </div>
        </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
                <div class="row">
                    <section class="col-7">
                    @include('studentslist')
                    </section>
                    <section class="col-5">
                      <form action="{{url('/store')}}" method="post">
                      @csrf
                        <div class="form-group">
                            <label class="font-weight-bold" >Matricule</label>
                            <input  name="cne" type="text" class="form-control" placeholder="Matricule">
                        </div>
                        <div class="form-group">
                            <label  class="font-weight-bold" >Prénoms</label>
                            <input  name="firstName" type="text" class="form-control" placeholder="prenoms">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" >Nom</label>
                            <input  name="secondName" type="text" class="form-control" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" >Age</label>
                            <input  name="age" type="text" class="form-control" placeholder="Age">
                        </div>
                        <div class="form-group">
                            <label  class="font-weight-bold"for="exampleFormControlInput1">Spécialité</label>
                            <input  name="speciality" type="text" class="form-control" placeholder="Spécialité">
                        </div>
                          <input type="submit" class='btn btn-info btn-lg' value="Enregistrer">
                        </form>
                    </section>  
                </div>
        </div>
    @elseif($layout == 'show')
    <div class="container-fluid  mt-4">
                <div class="row">
                    <section class="col">
                    @include('studentslist')
                    </section>
                    <section class="col">

                    </section>
                </div>
        </div> 
    @elseif($layout == 'edit')
            <div class="container-fluid  mt-4">
                <div class="row">
                    <section class="col-md-7">
                    @include('studentslist')
                    </section>
                    <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="/img/12.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Entrez les informations du nouvel etudiants</h5>
                            <form action="{{url('/update/'.$student->id)}}" method="post">
                      @csrf
                        <div class="form-group">
                            <label >Matricule</label>
                            <input value='{{$student->cne}}' name="cne" type="text" class="form-control" placeholder="Cne">
                        </div>
                        <div class="form-group">
                            <label >Prénom</label>
                            <input value='{{$student->firstName}}' name="firstName" type="text" class="form-control" placeholder="prenoms">
                        </div>
                        <div class="form-group">
                            <label >Nom</label>
                            <input value='{{$student->secondName}}' name="secondName" type="text" class="form-control" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label >Age</label>
                            <input value='{{$student->age}}' name="age" type="text" class="form-control" placeholder="age">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Spécialité</label>
                            <input value='{{$student->speciality}}' name="speciality" type="text" class="form-control" placeholder="Specialité">
                        </div>
                          <input type="submit" class='btn btn-info' value="modifier ">
                          <input type="reset" class='btn btn-info' value="reset">
                        </form>
                    </div>
                    </section>
                </div>
        </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>