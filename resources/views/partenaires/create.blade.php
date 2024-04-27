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
              <form action="{{ route('partenaires.store') }}" method="POST" id="form" enctype="multipart/form-data" >
                @method('POST')
                @csrf
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">Compléter les informations </h3>
                  </div>
                  <!-- /.card-header -->
                    <div class="card-body">
                      
                      <div class="form-group form-row">
                        <div class="col-md-6">
                          <div class="btn btn-default btn-file ">
                            <i class="fas fa-paperclip"></i> Choisir l'image 
                            <input type="file" id="image" name="image">
                          </div>
                        </div>
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
