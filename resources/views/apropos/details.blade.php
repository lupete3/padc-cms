@extends('layouts.base')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$viewData['title']}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Tableau de bord</a></li>
              <li class="breadcrumb-item active">{{$viewData['title']}}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
               <!-- /.card -->
              @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6>
                    {{ Session::get('success') }}
                  </h6>
                </div> 
              @endif
                @foreach ($details as $detail)
              <form action="{{ route('details.update', $detail->id) }}" method="POST" id="form" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">Compléter les informations de contact l'association</h3>
                  </div>
                  <!-- /.card-header -->
                    <div class="card-body">
                      
                        <div class="form-group">
                          <label for="email">Adresse Mail  </label>
                          <input class="form-control" name="email" value="{{ $detail->email }}" id="email" placeholder="ex: info@iamr.com">
                        </div>
                      
                        <div class="form-group">
                          <label for="telephone">Numéro de téléphone  </label>
                          <input class="form-control" name="telephone" value="{{ $detail->telephone }}" id="telephone" placeholder="ex: +234 987 234 892">
                        </div>
                      
                        <div class="form-group">
                          <label for="adresse">Adresse Siège Social </label>
                          <input class="form-control" name="adresse" value="{{ $detail->adresse }}" id="adresse" placeholder="Adresse du siège social">
                        </div>
                        <div class="card-header">
                            <h3 class="card-title">Compléter les informations défilantes</h3>
                        </div>
                        <br>
                        <div class="form-group form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" name="title1" value="{{ $detail->title1 }}" id="title1" placeholder="Titre">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" name="title12" value="{{ $detail->title12 }}" id="title1" placeholder="Titre">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="btn btn-default btn-file ">
                                    <i class="fas fa-paperclip"></i> Choisir l'image de mise en avant
                                    <input type="file" id="image" name="image">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src="{{ asset('image-slide/'.$detail->img1)}}" height="100" alt="" srcset="">
                            </div>
                      </div>
                      <div class="form-group form-row">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <input class="form-control" name="title2" value="{{ $detail->title2 }}" id="title2" placeholder="Titre">
                              </div>
                          </div>
                          
                          <div class="col-md-3">
                            <div class="form-group">
                                <input class="form-control" name="title22" value="{{ $detail->title22 }}" id="title1" placeholder="Titre">
                            </div>
                          </div>
                          <div class="col-md-3">
                              <div class="btn btn-default btn-file ">
                                  <i class="fas fa-paperclip"></i> Choisir l'image de mise en avant
                                  <input type="file" id="image1" name="image1">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <img src="{{ asset('image-slide/'.$detail->img2)}}" height="100" alt="" srcset="">
                          </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input class="form-control" name="title3" value="{{ $detail->title3 }}" id="title3" placeholder="Titre">
                            </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                              <input class="form-control" name="title32" value="{{ $detail->title32 }}" id="title1" placeholder="Titre">
                          </div>
                      </div>
                        <div class="col-md-3">
                            <div class="btn btn-default btn-file ">
                                <i class="fas fa-paperclip"></i> Choisir l'image de mise en avant
                                <input type="file" id="image2" name="image2">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('image-slide/'.$detail->img3)}}" height="100" alt="" srcset="">
                        </div>
                    </div>
                    
                    <div class="card-header">
                        <h3 class="card-title">Compléter les liens des réseaux sociaux</h3>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <label for="facebook">Facebook </label>
                        <input class="form-control" name="facebook" value="{{ $detail->facebook }}" id="facebook" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="twitter">Twitter  </label>
                        <input class="form-control" name="twitter" value="{{ $detail->twitter }}" id="twitter" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="linkedin">LinkedIn  </label>
                        <input class="form-control" name="linkedin" value="{{ $detail->linkedin }}" id="linkedin" placeholder="">
                      </div>
                      <div class="form-group">
                        <label for="youtube">YouTube  </label>
                        <input class="form-control" name="youtube" value="{{ $detail->youtube }}" id="youtube" placeholder="">
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <div class="float-right mr-2" style="margin-top: 0px;">
                        <button type="submit" id="edit_article" name="edit_article" class="btn btn-primary"><i class="far fa-check-circle"></i> Enregistrer la modification </button>
                      </div>
                    </div>
                    
                  <!-- /.card-footer -->
                </div>
              </form>
              @endforeach
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>

@endsection

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

<script type="text/javascript">

  //Affichage fenetre modale de la modification du l'auteur
  $(document).on("click","#editBtn", function(e){
    e.preventDefault();

    $("#editForm").modal("show");

    let id = $(this).attr("value");
     
    $tr =$(this).closest('tr');
		  
    var data = $tr.children('td').map(function(){
		  return $(this).text();
		}).get();

    $('#article_id').val(id)
    $('#nameEdit').val(data[0])
    $('#universiteEdit').val(data[1])

  });

  //Affichage fenetre modale de la suppression du l'auteur
  $(document).on("click","#deleteBtn", function(e){
    e.preventDefault();

    $("#deleteForm").modal("show");

    let id = $(this).attr("value");
    
    $tr =$(this).closest('tr');
      
    var data = $tr.children('td').map(function(){
      return $(this).text();
    }).get();

    $('#article_id_delete').val(id)

  });
</script>
