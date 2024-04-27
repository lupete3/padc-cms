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
            <div class="col-md-2"></div>
            <!-- /.col -->
            <div class="col-md-8">
              @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6>
                    {{ Session::get('success') }}
                  </h6>
                </div> 
              @endif
              <form action="{{ route('categories.update', $category->id) }}" method="POST" id="form" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">Compléter les informations du cahier</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body"> 
                    <label for="nane">Nom de la catégorie</label>                 
                    <div class="form-group">
                      <input class="form-control" name="name" value="{{ $category->name }}" id="name" placeholder="Ex: Conférence" required>
                      @error('name')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <div class="float-right">
                      
                      <button type="submit" id="add_cahier" class="btn btn-primary"><i class="far fa-check-circle"></i> Enregistrer</button>
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
