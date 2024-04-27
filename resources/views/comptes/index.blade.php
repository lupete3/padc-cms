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
          <div class="col-12">
            
            <!-- /.card -->
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" id="msg" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h6>
                    {{ Session::get('success') }}
                  </h6>
                </div> 
            @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{ $viewData['title'] }} </h3> <a href="{{ route('comptes.create')}}" class="btn btn-success float-right"><i class="fa fa-plus"></i> Ajouter un compte</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="result"></div>
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nom duncompte</th>
                    <th>Numéro du compte</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    @php $i=1; @endphp
                    @foreach($viewData['comptes'] as $compte)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $compte->title }}</td>
                        <td>{{ $compte->number }}</td>
                        <td>
                          <div class="btn-group" role="group">
                            <a href="{{ route('comptes.show', $compte->id) }}" id="editBtn" value="{{ $compte->id }}" class="btn btn-primary btn-sm " title=""><i class="fa fa-edit"></i></a>
                            <form action="{{ route('comptes.delete', $compte->id) }}" method="post">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-danger btn-sm " title=""><i class="fa fa-times"></i></button>
                            </form>
                          </div>
                        </td>
                      </tr>
                    @endforeach                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
@endsection
<!-- jQuery -->


