@extends('layouts.client')

@section('content')

  <!-- barre de navigation end-->
  <div class="container1_1">
    <div class="container">
        <div class="row">
            <div class="head_bg_all">
                <div class="col-sm-12">
                    <p>ACCUEIL / NOS PROJETS </p>
                    <h4>NOS PROJETS REALISES</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container6">
    <div class="container">
        <div class="row">
            <div class="projets_all">
              @foreach ($viewData['blogs'] as $blog)
                
                <div class="col-sm-4">
                    <div class="projets_all_1">
                        <img width="100%" height="250em" src="{{asset('image-blog/'.$blog->image)}}" alt="logo de l'organisation">
                        <div class="projets_all_dateandequipe">
                            <p><i class="fa-solid fa-calendar-days"></i>{{ date('d m Y ', strtotime($blog->created_at)) }} <span><i
                                        class="fa-solid fa-people-group"></i>{{ $blog->equipe }}</span></p>

                        </div>
                        <h3>{{$blog->title}} </h3>

                        <p class="text">{!! Str::limit($blog->description, 578) !!} </p>

                        <div class="main_button_project">
                            <button class="read-more-btn"><a href="{{ route('blog.show', $blog->slug) }}">voir plus >> </a> </button>
                        </div>
                    </div>
                </div>

              @endforeach
                
            </div>
        </div>
    </div>
</div>


@endsection
       