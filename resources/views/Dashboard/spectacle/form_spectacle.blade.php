@extends('Dashboard.index')

@section('content')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          .
          <div class="col-lg-12">
            <h3 class="page-header">
              <i class="fa fa-files-o"></i>Enregstrer un Spectacle</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Form Validation</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              Enregstrer un Spectacle
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" enctype="multipart/form-data"  action="{{route('enregistrer_spectacle')}}"  method="POST">
                  @csrf
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Titre<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="titre" minlength="5" type="contenu" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="contenu" class="control-label col-lg-2">Contenu <span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="contenu" type="contenu" name="contenu" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="photo" class="control-label col-lg-2">Photo</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="photo" type="file" name="photo" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="lieu" class="control-label col-lg-2">Lieu</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="lieu" type="" name="lieu" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="date" class="control-label col-lg-2"></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="date" type="" name="date" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                      
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!--main content end-->
   @endsection