
<div class="card mb-3">
      <img src="/img/29493.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center font-weight-bold">Liste des Etudiants</h5>
        <p class="card-text text-center">Les informations de l'ensemble des etudiants</p>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Matricule</th>
            <th scope="col">Prénoms</th>
            <th scope="col">Nom</th>
            <th scope="col">Age</th>
            <th scope="col">Spécialité</th>
            <th scope="col">Opérations</th>
          </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
          <tr>
            <td>{{$student->cne}}</td>
            <td>{{$student->firstName}}</td>
            <td>{{$student->secondName}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->speciality}}</td>
            <td>
            
            <a href="{{url('/edit/'.$student->id)}}" class="btn  btn-info">Editer</a>
            <a href="{{url('/delete/'.$student->id)}}" class="btn  btn-danger">Supprimer</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>

