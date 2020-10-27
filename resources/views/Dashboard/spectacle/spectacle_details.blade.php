@extends('Dashboard.index')

@section('content')
<section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12"> 
       <div class="form-horizontal">
                  <div class="form-group">
                  
                   <div class="panel-heading"><h1> Affichage de Spectacle {{$spectacle->id}}</h1></div>
                        <form >
                        <div class="form-group">
                                <label for="id" class="col-sm-2 control-label">ID :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$spectacle->id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="titre" class="col-sm-2 control-label">Nom :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$spectacle->titre}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contenu" class="col-sm-2 control-label">Prenom :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$spectacle->contenu}}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="photo" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-8">
                                    <input type="photo" class="form-control" value="{{$spectacle->photo}}">
                                </div>
                            </div>
                            
                           
            
                    </form>
             </div>        
         </div>
    </div> 
    @endsection
    </section>
    </section>