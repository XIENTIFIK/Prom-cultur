@extends('Dashboard.index')

@section('content')

<section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12"> 
       <div class="form-horizontal">
                  <div class="form-group">
                   <div class="panel-heading"><h1> Editer  l'acteur {{$acteur->id}}</h1></div>
                        <form action="{{route('acteur_modifier', ['id'=>$acteur->id])}}"  method="POST" >
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nom" class="col-sm-2 control-label">Nom :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nom" id="nom" class="form-control" value="{{$acteur->nom}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="col-sm-2 control-label">Prenom :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="prenom" id="prenom" class="form-control" value="{{$acteur->prenom}}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" id="email" class="form-control" value="{{$acteur->email}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="profession" class="col-sm-2 control-label">Profession :</label>
                                <div class="col-sm-8">
                                    <input type="text"  value="{{$acteur->profession}}" class="form-control" name="profession" id="profession" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telephone" class="col-sm-2 control-label">telephone:</label>
                                <div class="col-sm-8">
                                    <input type="telephone" name="telephone" id="telephone" class="form-control" value="{{$acteur->telephone}}">
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