@extends('layouts.client')

@section('content')
    
    
    <!-- barre de navigation end-->
    <div class="container1_1">
      <div class="container">
          <div class="row">
              <div class="head_bg_all">
                  <div class="col-sm-12">
                      <p>ACCUEIL / CONTACT </p>
                      <h4>Contactez nous</h4>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- forms for contact -->
  <div class="container1_contact">
      <div class="container">
          <div class="row">
              <div class="col-sm-4">
                  <div class="main_text">
                      <h4>NOUS CONTACTER >> </h4>
                      <h3>Laissez-nous un message</h3>
                  </div>
                  <div class="plus_info-all_1">
                      <!-- <div class="plus_info-icon">
                          <i class="fas fa-envelope"></i>
                      </div> -->
                      @foreach ($viewData['details'] as $detail)
                      
                        <div class="plus_info1">
                            <i class="fas fa-envelope"></i>
                            <a href="#">{{ $detail->email }}</a>
                            <p> <i class="fa-solid fa-phone"></i> {{ $detail->telephone }}</p>
                            <p>{{ $detail->adresse }}</p>
                        </div>
                      @endforeach
                  </div>
              </div>
              <div class="col-sm-8">
                  <div class="container_form_all">
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h6>
                                {{ Session::get('success') }}
                            </h6>
                        </div> 
                    @endif
                      <form action="{{ route('send_email') }}" method="POST" class="form-contact">
                        @method('POST')
                        @csrf
                          <div class="col-sm-6">
                              <div class="">
                                  <label for="text" class="form-label"></label>
                                  <input type="text" id="name" class="form-control" id="text"
                                      placeholder="Nom et post-nom" name="name" required>
                              </div>
                          </div>

                          <div class="col-sm-6">
                              <div class="">
                                  <label for="email" class="form-label"></label>
                                  <input type="email" id="email" class="form-control" id="email"
                                      placeholder="Adresse E-mail" name="email" required>
                              </div>
                          </div>
                          
                          <div class="mb-3 mt-3">
                            <label for="text" class="form-label"></label>
                            <input type="text" id="sujet" class="form-control" id="sujet" placeholder="Sujet"
                            name="subject" required>
                          </div>
                          <label for="comment"></label>
                          <textarea class="form-control" rows="5" id="comment" placeholder="Ecrivez le message ici"
                          name="message" required></textarea>
                          <button type="submit" id="submit" class="btn btn-primary">Envoyez Message</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
       