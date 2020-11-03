@extends('Dashboard.index')

@section('content')

<section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12"> 
       <div class="form-horizontal">
                  <div class="form-group">
                <div class="panel-heading"><h1>liste des albums</h1></div>
                    <div class="panel-body">
                         <table  class="table table-bordered table-striped">
                            <thead>
                                <th>Nom</th>
                                <th>Titre</th>
                                <th>Date</th>
                                <th>Photo</th>
                                 <th>Details</th> 
                                <th>Editer</th>
                                <th>Supprimer</th>
                            </thead>
                            <tbody>
                            @foreach($albums as $album)
                                <tr>
                                <td>{{$album->nom}}</td>
                                <td>{{$album->titre}}</td>
                                <td>{{$album->date}}</td>
                                <td> <img src="{{asset('storage/' . $album->photo)}}" alt="" width="100px" height="100px"></td>
                                <td>
                                        <a href="{{route('album_detail', ['id'=>$album->id] )}}"  class="btn btn-sm btn-primary" >Details</a>
                                  </td>
                                  <td>
                                        <a href="{{route('album_modifier', ['id'=>$album->id] )}}" class="btn btn-sm btn-warning" >Editer</a>
                                    </td>
                                    <td>
                                        <a href="{{route('album_delete', ['id'=>$album->id] )}}" class="btn btn-sm btn-danger" >Supprimer</a>
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