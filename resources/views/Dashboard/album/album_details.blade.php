@extends('Dashboard.index')

@section('content')
<section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12"> 
       <div class="form-horizontal">
                  <div class="form-group">
                  
                   <div class="panel-heading"><h1> Affichage d'un Album {{$album->id}}</h1></div>
                        <form >
                        <div class="form-group">
                                <label for="id" class="col-sm-2 control-label">ID :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$album->id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nom" class="col-sm-2 control-label">Nom de l'artist:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$album->nom}}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="titre" class="col-sm-2 control-label">Titre :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$album->titre}}">
                                </div>
                            </div>
                                <div class="form-group ">
                                    <label for="date" class="control-label col-lg-2">Date</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="date" type="" name="date" value="{{$album->date}}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                     <label for="photo" class="col-sm-2 control-label">Photo:</label>
                                        <div class="col-sm-8">
                                            <td> <img src="{{asset('storage/' . $album->photo)}}" alt="" width="100px" height="100px"></td>
                                            <td>
                                        </div>
                                 </div>
                    </form>
             </div>        
         </div>
    </div> 
    @endsection
    </section>
    </section>