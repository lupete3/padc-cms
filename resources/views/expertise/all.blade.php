@extends('layouts.client')

@section('content')
    
    <main>
        <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">
            <div class="container h-100">
              <div class="row justify-content-center align-items-center h-100">
                <div class="col-lg-8">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                      <li class="breadcrumb-item"><a href="{{ route('home.index')}}">Accueil</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Expertises</li>
                    </ol>
                  </nav>
                  <h1 class="fg-white text-center">Nos expertises</h1>
                </div>
              </div>
            </div>
        </div> <!-- .page-banner -->

          <div class="page-section">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <h1 class="text-title text-center mb-4">Nos domaines d’expertise</h1>
                  <div class="row">
              
                    @foreach ($viewData['expertises'] as $expertise)
                        <div class="col-md-6 col-lg-4 py-3">
                         
                        <a href="{{ route('expertises.single', $expertise->id) }}">
                          <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="{{asset('image-expertise/'.$expertise->image)}}" alt="Dist Photo 1">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                              <h5 class="card-title text-white">{{ $expertise->title }} <span class="mai-add-circle-outline float-right text-white" style="font-size: 30px" ></span></h5> 
                            </div>
                          </div>
                        </a>
                        </div>

                    @endforeach
      
                    <div class="col-12 my-5">
                      
                      <nav aria-label="Page Navigation">
                        <ul class="pagination justify-content-center">
                          {!! $expertise = $viewData['expertises'];  $expertise->withQueryString()->links('pagination::bootstrap-5') !!}

                        </ul>
                      </nav>
                    </div>
                    
                  </div>
                </div>
                
              </div>
            </div> <!-- .container -->
          </div> <!-- .page-section --
    
    </main>

@endsection
       