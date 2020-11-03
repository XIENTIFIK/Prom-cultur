@extends('Dashboard.index')

@section('content')

<section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12"> 
       <div class="form-horizontal">
                  <div class="form-group">
                   <div class="panel-heading"><h1> Editer  l'album {{$album->id}}</h1></div>
                        <form action="{{route('album_modifier', ['id'=>$album->id])}}"  method="POST" >
                        {{ csrf_field() }}
                        <div class="form-group">
                                <label for="nom" class="col-sm-2 control-label">Nom </label>
                                <div class="col-sm-8">
                                    <input type="text" name="nom" id="nom" class="form-control" value="{{$album->nom}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="titre" class="col-sm-2 control-label">Titre </label>
                                <div class="col-sm-8">
                                    <input type="text" name="titre" id="titre" class="form-control" value="{{$album->titre}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-2 control-label">Date </label>
                                <div class="col-sm-8">
                                    <input type="text" name="date" id="date" class="form-control" value="{{$album->date}}">
                                </div>
                            </div>
                    <div class="form-group ">
                      <label for="date" class="control-label col-lg-2">Date</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="date" type="" name="date" value="{{$album->date}}"/>
                      </div>
                    </div>
                           
                           
                            <button type="submit" class="btn btn-success btn-lg">Modifier</button>
                    </form>
             </div>        
         </div>
    </div> 
    </section>
    </section>
    @endsection