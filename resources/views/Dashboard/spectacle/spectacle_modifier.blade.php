@extends('Dashboard.index')

@section('content')

<section id="main-content">
      <section class="wrapper">
         <div class="row">
          <div class="col-lg-12"> 
                <div class="form-horizontal">
                <div class="form-group">
                   <div class="panel-heading"><h1> Editer  l'spectacle {{$spectacle->id}}</h1></div>
                        <form action="{{route('spectacle_modifier', ['id'=>$spectacle->id])}}"  method="POST" >
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="titre" class="col-sm-2 control-label">Titre :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="titre" id="titre" class="form-control" value="{{$spectacle->titre}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contenu" class="col-sm-2 control-label">Contenu :</label>
                                <div class="col-sm-8">
                                    <input type="text" name="contenu" id="contenu" class="form-control" value="{{$spectacle->contenu}}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="lieu" class="control-label col-lg-2">Lieu</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="lieu" type="" name="lieu" value="{{$spectacle->lieu}}"/>
                             </div>
                            </div>
                                <div class="form-group ">
                                <label for="date" class="control-label col-lg-2">Date</label>
                                <div class="col-lg-10">
                                    <input class="form-control " id="date" type="" name="date" value="{{$spectacle->date}}"/>
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