@extends('Dashboard.index')

@section('content')

<section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12"> 
       <div class="form-horizontal">
                  <div class="form-group">
                <div class="panel-heading"><h1>liste des actualites</h1></div>
                    <div class="panel-body">
                         <table  class="table table-bordered table-striped">
                            <thead>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Photo</th>
                                 <th>Details</th> 
                                <th>Editer</th>
                                <th>Supprimer</th>
                            </thead>
                            <tbody>
                            @foreach($actualites as $actualite)
                                <tr>
                                <td>{{$actualite->titre}}</td>
                                <td>{{$actualite->contenu}}</td>
                                <td> <img src="{{asset('storage/' . $actualite->photo)}}" alt="" width="100px" height="100px"></td>
                                 <td>
                                        <a href="{{route('actualite_detail', ['id'=>$actualite->id] )}}"  class="btn btn-sm btn-primary" >Details</a>
                                  </td>
                                  <td>
                                        <a href="{{route('actualite_modifier', ['id'=>$actualite->id] )}}" class="btn btn-sm btn-warning" >Editer</a>
                                    </td>
                                    <td>
                                        <a href="{{route('actualite_delete', ['id'=>$actualite->id] )}}" class="btn btn-sm btn-danger" >Supprimer</a>
                                    </td>
                                    </tr>
                                  <td>
                                       
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