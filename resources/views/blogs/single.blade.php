@extends('layouts.client')

@section('content')


  <!-- barre de navigation end-->
  <div class="container1_1">
    <div class="container">
        <div class="row">
            <div class="head_bg_all">
                <div class="col-sm-12">
                    <p>ACCUEIL / NOS PROJETS </p>
                    <h4></h4>
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
                    <img width="90%" src="{{ asset('image-blog/'.$blog->image)}}" alt="logo de l'organisation">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="main_text">
                    <div class="decore_bar2"></div>
                    <h4>PROJET >> </h4>
                    <h3>{{ $blog->title }}</h3>
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <div class="container2_2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="projets_all">
                    <p class="text">{!! $blog->description !!}</p>
                </div>
            </div>
        </div>
    </div>
  </div>

  <!-- A propos de nous end -->


@endsection
       