@extends('layouts.client')

@section('content')
    
    <main>
        <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_4.jpg);">
            <div class="container h-100">
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-lg-8">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                      <li class="breadcrumb-item"><a href="{{ route('home.index')}}">Accueil</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Zones</li>
                    </ol>
                  </nav>
                  <h1 class="fg-white text-center">{{ $viewData['title']}}</h1>
                </div>
              </div>
            </div>
        </div> <!-- .page-banner -->

          <div class="page-section">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <div class="text-center">
                    <h2 class="title-section">{{ $viewData['title']}}</h2>
                  </div>
                  <div class="row">
                    @foreach ($viewData['zones'] as $zone)
                        <div class="col-md-6 col-lg-4 py-3">
                          <a href="{{ route('zone.show', $zone->slug) }}">
                          <div class="card-blog" >
                            <div class="footer ">
                              <div class="entry-footer mt-4">
                                <h4 class="title-section">{{ $zone->title }} </h4> 
                              </div>
                              <span class="float-right mt-4"> <i class="mai-chevron-forward " style="font-size: 30px"></i></span>
                            </div>
                          </div>
                        </a>
                        </div>
                    @endforeach
                    <div class="col-md-12 ">
                      <iframe src="https://www.google.com/maps/d/embed?mid=1faSYWx-MPGUaaR_q_svCA5KgjsHCoZI&ehbc=2E312F" height="480" style="width: 100%; margin-top:30px"></iframe>
                    </div>
                  </div>
                </div>
                
              </div>
            </div> <!-- .container -->
          </div> <!-- .page-section --
    
    </main>

@endsection
       