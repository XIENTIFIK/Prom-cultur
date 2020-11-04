@extends('pages.indexe')

@section('content')
<section class="hero-area">
    
        <div class="hero-slides owl-carousel">
        @foreach($actualites as $actualite)
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{asset('storage/' . $actualite->photo)}});"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">A la une</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">{{$actualite->titre}} <span>{{$actualite->titre}}</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="{{route('actualite')}}" class="btn oneMusic-btn mt-50">Decouvrire <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            @foreach ($albums as $album)
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url({{asset('storage/' . $album->photo)}});"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="100ms">Nouvel album</h6>
                                <h2 data-animation="fadeInUp" data-delay="300ms">{{$album->nom}} <span>{{$album->nom}}</span></h2>
                                <a data-animation="fadeInUp" data-delay="500ms" href="{{route('album')}}" class="btn oneMusic-btn mt-50">Decouvrire <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            <!-- Single Hero Slide -->
             
    </section>

    <!-- Partie album -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
         <div class="row oneMusic-albums">
                @foreach ($albums as $album)
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p">
                    <div class="single-album">
                    <a href="{{asset('storage/' . $album->photo)}}" class="venobox" data-gall="venue-gallery">
                        <img src="{{asset('storage/' . $album->photo)}}" alt="" >
                    </a> 
                        <div class="album-info">
                            <a href="#">
                                <h5>{{$album->nom}}</h5>
                            </a>
                            <p>{{$album->date}}</p>
                        </div>
                    </div>
                </div>

                @endforeach
                </div>

    <!-- Partie actualite -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                @foreach ($actualites as $actualite)
               
                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                        <a href="{{asset('storage/' . $actualite->photo)}}" class="venobox" data-gall="venue-gallery">
                        <img src="{{asset('storage/' . $actualite->photo)}}" alt=""   class="img-fluid" width="50%" >
                        </a> 
                            <!-- Post Date -->
                            <div class="post-date">
                                <span>15</span>
                                <span>June ‘18</span>
                            </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                          <h3 class="post-title">{{$actualite->titre}}</h3>
                            <!-- Post Meta -->

                            <p>{{$actualite->contenu}}</p> 
                            <div class="post-meta d-flex mb-30">
                            
                            <div>
                                <p class="post-author">By<a href="#"> Admin</a></p>
                                <p class="tags">in<a href="#"> Events</a></p>
                                <p class="tags"><a href="#">2 Comments</a></p>
                            </div>
                            <!-- Post Excerpt -->  
                    </div>
                    </div>
                    @endforeach 
                           <!-- Partie album -->
                    
                        </div>
                        </section>

           


    @endsection