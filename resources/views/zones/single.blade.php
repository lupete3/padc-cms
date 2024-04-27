@extends('layouts.client')

@section('content')
    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url({{ asset('image-zone/'.$zone->image) }});">
        <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="{{ route('home.index')}}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Zone d'intervention</li>
                </ol>
            </nav>
            <h1 class="fg-white text-center">{{ $zone->title }}</h1>
            </div>
        </div>
        </div>
    </div> <!-- .page-banner -->
    <main>
        <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12 py-3">
                <div class="subhead">zone</div>
                <h2 class="title-section">{{ $zone->title }}</h2>
    
                {!! $zone->description !!}

                <h2 class="title-section mt-4">Découvrir nos missions par zone</h2>

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
          </div>
        </div> <!-- .page-section -->
    
      </main>
  
@endsection
       