@extends('Dashboard.index')

@section('content')

<section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12"> 
       <div class="form-horizontal">
                  <div class="form-group">
                   <div class="panel-heading"><h1> Editer  l'actualite {{$actualite->id}}</h1></div>
                        <form action="{{route('actualite_modifier', ['id'=>$actualite->id])}}"  method="POST" >
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="titre" class="col-sm-2 control-label">Titre :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="titre" id="titre" class="form-control" value="{{$actualite->titre}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contenu" class="col-sm-2 control-label">Contenu :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="contenu" id="contenu" class="form-control" value="{{$actualite->contenu}}">
                                </div>
                            </div>
                            
                            <!-- <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" id="email" class="form-control" value="{{$actualite->email}}">
                                </div>
                            </div> -->
                           
                            <button type="submit" class="btn btn-success btn-lg">Modifier</button>
                    </form>
             </div>        
         </div>
    </div> 
    </section>
    </section>
    @endsection