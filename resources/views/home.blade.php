@extends('layouts.client')

@section('content')

  <!-- tete daffiche start-->

  <div class="container1">
    <div class="container">
      @foreach ($viewData['details'] as $detail)
          @php $title = $detail->title @endphp
          @php $description = $detail->description @endphp
          @php $title1 = $detail->title1 @endphp
          @php $title12 = $detail->title12 @endphp
          @php $img1 = $detail->img1 @endphp
          @php $title2 = $detail->title2 @endphp
          @php $title22 = $detail->title22 @endphp
          @php $img2 = $detail->img2 @endphp
          @php $title3 = $detail->title3 @endphp
          @php $title32 = $detail->title32 @endphp
          @php $img3 = $detail->img3 @endphp
        @endforeach
        <div class="row">
            <div class="col-sm-4">
                <div class="main_text">
                    <h3>{{ $title }}
                    </h3>
                    <div class="decore_bar"></div>
                    <p> {{ $description }}</p>
                    <!-- <div class="main_button">
                        <a href="#"><button>voir plus</button></a>
                    </div> -->
                </div>
            </div>
            <div class="col-sm-8">
                <div class="main_picture">
                    <!-- <img width="100%" src="images/pic1.jpg" alt="logo de l'organisation"> -->
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('image-slide/'.$img1)}}" alt="{{ $title1 }} class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                    <h3>{{ $title1 }}</h3>
                                    <p>{{ $title12 }}</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image-slide/'.$img2)}}" alt="{{ $title2 }}" alt="Chicago" class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                    <h3>{{ $title2 }}</h3>
                                    <p>{{ $title22 }}</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image-slide/'.$img3)}}" alt="{{ $title3 }} class="d-block" style="width:100%">
                                <div class="carousel-caption">
                                    <h3>{{ $title3 }}</h3>
                                    <p>{{ $title32 }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- tete daffiche end -->
<!-- 
<div class="main_picture">
    
</div> -->

<!-- A propos de nous start-->

<div class="container2">
    <div class="container">
        <div class="row">
          @foreach ($viewData['apropos'] as $apropo)
            <div class="col-sm-6">
                <div class="second_picture">
                    <img width="90%" src="{{ asset('image-apropo/'.$apropo->image) }}" alt="logo de l'organisation">
                </div>
            </div>
            <div class="col-sm-6">
              
                <div class="main_text">
                    <div class="decore_bar2"></div>
                    <h4>A PROPOS DE NOUS >> </h4>
                    <h3>{{ $apropo->title }}.</h3>
                    <p> @php $description = Str::limit($apropo->apropos, 1000); echo $description @endphp
                    </p>
                    <div class="main_button">
                        <div class="main_button">
                            <a href="{{ route('apropos.index') }}"><button>voir plus</button></a>
                        </div>
                    </div>
                </div>
                
            </div>
          @endforeach
        </div>
    </div>
</div>
<!-- A propos de nous end -->


<!-- Notre misson start-->

<div class="container3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_text">
                    <h4>NOTRE MISSION >> </h4>
                    <h3>PADC RDCongo (Programme d'appui au développement communautaire)</h3>
                </div>
            </div>
            <div class="mission-row1">
              @foreach ($viewData['missions'] as $mission )
                <div class="col-sm-3">
                  <div class="decore_bar_mission"></div>
                  <p>{!! $mission->description !!} </p>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Notre misson end-->


<!-- Foire aux questions start-->

<div class="container4">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="main_text">
                    <h4>FOIRE AUX QUESTIONS >> </h4>
                    <h3>Les Questions les plus fréquentes</h3>
                </div>
            </div>
            <div class="col-sm-8">

                <!-- collapse des questions start -->
                <div class="accordion_faq_all">
                    
                    @foreach ($viewData['faqs'] as $id => $faq)

                      @if ($id == 0)
                        <div id="accordion">
                          <div class="card_accordion1">
                              <!-- <div class="card"> -->
                              <!-- <div class="card-header"> -->
                              <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                  {{ $faq->title }}
                              </a>
                              <i class="fa-sharp fa-solid fa-caret-down"></i>
                              <!-- </div> -->
                              <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                  <div class="card-body">
                                      <p>
                                         
                                          {{ $faq->description }}

                                      </p>
                                  </div>

                              </div>
                          </div>
                        </div>
                      @endif

                      @if ($id == 0)
                        
                      @else
                        <div class="card_accordion1">
                          <!-- <div class="card"> -->
                          <div class="card-header">
                              <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse{{ $faq->id }}">
                                  {{ $faq->title }}
                              </a>
                              <i class="fa-sharp fa-solid fa-caret-down"></i>
                          </div>
                          <div id="collapse{{ $faq->id }}" class="collapse" data-bs-parent="#accordion">
                              <div class="card-body">
                                  <p>{{ $faq->description }}
                                  </p>
                              </div>
                          </div>
                        </div>
                      @endif
                      

                    @endforeach
                </div>
            </div>

            <!-- collapse des questions end -->

        </div>
    </div>
</div>
</div>

<!-- Foire aux questions end -->

<!-- <hr> -->

<!-- Nos partenaires start -->

<div class="container5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_text_partenaires">
                    <h4>
                        << NOS PARTENAIRES>>
                    </h4>
                    <!-- <h3>Les Questions les plus fréquentes</h3> -->
                </div>
            </div>
        </div>
    </div>

    <!-- photos des partenaires -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="wrapper">
                    <div class="track">
                      @foreach ($viewData['partenaires'] as $partenaire)
                      
                        <div class="logo">
                            <a href=""><img width="200em" src="{{ asset('image-partenaire/'.$partenaire->image) }}"
                                    alt="logo de l'organisation"></a>
                        </div>

                      @endforeach
                        

                    </div>
                    <!-- <h3>Les Questions les plus fréquentes</h3> -->
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Nos partenaires END -->

<!-- Footer start -->
<div class="container6">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main_text_projects">
                    <h4>
                        << NOS PROJETS>>
                    </h4>
                    <h3>Nos projects récents</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="projets_all">
              @foreach ($viewData['projets'] as $projet)
                
                <div class="col-sm-4">
                    <div class="projets_all_1">
                        <img width="100%" height="250em" src="image-blog/{{ $projet->image }}" alt="logo de l'organisation">
                        <div class="projets_all_dateandequipe">
                            <p>{{ date('d m Y ', strtotime($projet->created_at)) }} </p>
                        </div>
                        <h3>{{ $projet->title }} </h3>

                        <p style="padding: 15px">{!! Str::limit($projet->description, 578) !!} </p>

                        <div class="main_button_project">
                            <a href="{{ route('blog.show', $projet->slug) }}"><button>voir plus >> </button></a>
                        </div>
                    </div>
                </div>

              @endforeach
                
            </div>
        </div>
    </div>
</div>


@endsection
       