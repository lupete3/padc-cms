@extends('layouts.client')

@section('content')

  <!-- barre de navigation end-->
  <div class="container1_1">
    <div class="container">
        <div class="row">
            <div class="head_bg_all">
                <div class="col-sm-12">
                    <p>ACCUEIL / NOS RAPPORTS </p>
                    <h4>NOS RAPPORT DES ACTIVITES</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container6">
    <div class="container">
        <div class="row">
            <div class="projets_all">
              @foreach ($viewData['rapports'] as $key => $rapport)
                @if ($key == 0)
                 
                  <div id="accordion">
                    <div class="card_accordion1">
                        <!-- <div class="card"> -->
                        <!-- <div class="card-header"> -->
                        <a class="btn" data-bs-toggle="collapse" href="#categoryOne">
                            {{ $rapport->titre }}
                            <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </a>

                        <!-- </div> -->
                        <div id="categoryOne" class="collapse show" data-bs-parent="#accordion">
                            <div class="card-body">
                                <a href="{{ asset('rapports/'.$rapport->rapport)}}" 
                                    target=”_blank”>
                                    {{ $rapport->titre }}
                                </a>
                            </div>

                        </div>
                    </div>
                  </div>

                @else
                  <div class="card_accordion1">
                    <!-- <div class="card"> -->
                    <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#category{{ $rapport->id }}">
                            {{$rapport->titre}}
                            <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </a>

                    </div>
                    <div id="category{{ $rapport->id }}" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                          <a href="{{ asset('rapports/'.$rapport->rapport)}}" 
                            target=”_blank”>
                            {{ $rapport->titre }}
                          </a>
                        </div>
                    </div>
                  </div>
                @endif

              @endforeach
                
            </div>
        </div>
    </div>
</div>


@endsection
       