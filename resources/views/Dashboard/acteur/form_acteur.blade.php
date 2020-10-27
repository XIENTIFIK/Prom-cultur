@extends('Dashboard.index')

@section('content')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12"> 
       <div class="form-horizontal">
                  <div class="form-group">
                    <h1 class="text-center" >Nouvel Enregistrement</h1>
                        <form action="{{route('enregistrer_acteur')}}"  method="POST">
                        @csrf

                            <div class="form-group">
                                <label for="nom" class="col-sm-2 control-label">Nom :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nom" id="nom" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="prenom" class="col-sm-2 control-label">Prenom :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="prenom" id="prenom" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email:</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="profession" class="col-sm-2 control-label">Profession :</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="profession" id="profession" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telephone" class="col-sm-2 control-label">Telephone:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="telephone" id="telephone" required>
                                </div>
                                </div>
                            
                                <div class="text-center"> <button type="submit" class="btn btn-success btn-lg ">Enregistrer Acteur</button></div> 
                    </form>
             </div>        
         </div>
    </div> 
    </div> 
    </div>
        <!-- page end-->
      </section>
    </section>
    @endsection