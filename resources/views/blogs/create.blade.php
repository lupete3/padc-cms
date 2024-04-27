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
              @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6>
                    {{ Session::get('success') }}
                  </h6>
                </div> 
              @endif
              <form action="{{ route('blogs.store') }}" method="POST" id="form" enctype="multipart/form-data" >
                @method('POST')
                @csrf
                <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h3 class="card-title">Compléter les informations de l'actualité</h3>
                    </div>
                    <!-- /.card-header -->
                      <div class="card-body">
                        <div class="form-group">
                          <select class="form-control " name="category_id" id="category_id" required>
                              <option value="" selected>---Choisir une catégorie---</option>
                                @foreach ($viewData['categories'] as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                         
                            </select>
                        </div>
                        <div class="form-group">
                          <input class="form-control" name="title" value="{{ old('title') }}" id="title" placeholder="Titre de l'article">
                        </div>
                        <div class="form-group">
                          <label>Description de l'actualité</label>
                            <textarea id="compose-textarea" name="description" value="{{ old('description') }}"  class="form-control" style="height: 300px">
                              Description de l'actualité
                            </textarea>
                        </div>
                        <div class="form-group">
                          <div class="btn btn-default btn-file">
                            <i class="fas fa-paperclip"></i> Choisir l'image de mise en avant
                            <input type="file" id="image" name="image">
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <div class="float-right">
                          <button type="submit" id="add_blog"  name="add_blog" class="btn btn-primary"><i class="far fa-check-circle"></i> Publier</button>
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
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
  
      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
        i++;  
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Nom Auteur" class="form-control name_list" /></td><td><input type="text" name="universite[]" placeholder="Université de provenance " class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-sm btn_remove">x</button></td></tr>');  
        });  
        $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#row'+button_id+'').remove();  
        }); 
    });
</script>

