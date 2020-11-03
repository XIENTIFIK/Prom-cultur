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
                                <label for="contenu" class="col-sm-2 control-label">Contenu :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{$spectacle->contenu}}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="photo" class="col-sm-2 control-label">Photo:</label>
                                <div class="col-sm-8">
                                <td> <img src="{{asset('storage/' . $spectacle->photo)}}" alt="" width="100px" height="100px"></td>
                                <td>
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
                           
            
                    </form>
             </div>        
         </div>
    </div> 
    @endsection
    </section>
    </section>