@extends('layouts.client')

@section('content')

  @foreach ($apropos as $apropo)
    <!-- barre de navigation end-->
    <div class="container1_1">
      <div class="container">
          <div class="row">
              <div class="head_bg_all">
                  <div class="col-sm-12">
                      <p>ACCUEIL / A PROPOS DE NOUS </p>
                      <h4>A propos de nous</h4>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- A propos de nous start-->

  <div class="container2">
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <div class="second_picture">
                      <img width="90%" src="{{ asset('image-apropo/'.$apropo->image) }}" alt="logo de l'organisation">
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="main_text">
                      <div class="decore_bar2"></div>
                      <h4>A PROPOS DE NOUS >> </h4>
                      <h3>{{ $apropo->title }}</h3>
                      

                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container2_2">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div class="main_text">
                    {!! $apropo->apropos !!}
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- A propos de nous end -->


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
  @endforeach
 
  
@endsection
       