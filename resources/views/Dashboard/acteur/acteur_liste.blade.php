@extends('Dashboard.index')

@section('content')

<section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12"> 
       <div class="form-horizontal">
                  <div class="form-group">
                <div class="panel-heading"><h1>liste des acteurs</h1></div>
                    <div class="panel-body">
                         <table  class="table table-bordered table-striped">
                            <thead>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                 <th>Details</th> 
                                <th>Editer</th>
                                <th>Supprimer</th>
                            </thead>
                            <tbody>
                            @foreach($acteurs as $acteur)
                                <tr>
                                <td>{{$acteur->nom}}</td>
                                <td>{{$acteur->prenom}}</td>
                                <td>{{$acteur->email}}</td>
                                <td>
                                        <a href="{{route('acteur_detail', ['id'=>$acteur->id] )}}"  class="btn btn-sm btn-primary" >Details</a>
                                  </td>
                                  <td>
                                        <a href="{{route('acteur_modifier', ['id'=>$acteur->id] )}}" class="btn btn-sm btn-warning" >Editer</a>
                                    </td>
                                    <td>
                                        <a href="{{route('acteur_delete', ['id'=>$acteur->id] )}}" class="btn btn-sm btn-danger" >Supprimer</a>
                                    </td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    <!--main content end-->
 
    @endsection