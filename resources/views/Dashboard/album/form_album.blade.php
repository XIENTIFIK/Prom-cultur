@extends('Dashboard.index')

@section('content')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          .
          <div class="col-lg-12">
            <h3 class="page-header">
              <i class="fa fa-files-o"></i>Enregstrer un Album</h3>
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
              Enregstrer un Album
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" enctype="multipart/form-data"  action="{{route('enregistrer_album')}}"  method="POST">
                  @csrf
                   <div class="form-group ">
                      <label for="text" class="control-label col-lg-2">Nom<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="text" type="text" name="nom" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="titre" class="control-label col-lg-2">Titre<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="titre" name="titre" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="date" class="control-label col-lg-2">Date<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="date" name="date" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="photo" class="control-label col-lg-2">Photo</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="photo" type="file" name="photo" />
                      </div>
                    </div>
                    <!-- <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Subject <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="subject" name="subject" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                      </div>
                    </div> -->
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