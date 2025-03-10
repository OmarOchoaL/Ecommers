@extends('admin.layouts.main')
@section('contenido')
    <div class="app-content-header">
        <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Viewing History</h3></div>
              <div class="col-sm-6">
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
    </div>
    <div class="app-content">
    <table class="table col-12 table-responsive">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>User Id</td>
                        <td>Movie Id</td>
                        <td>Category Id</td>
                        <td>Serie Id</td>                       
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($views as $view)
                    <tr>
                        <td>{{$view->id}}</td>
                        <td>{{$view->user_id}}</td>
                        <td>{{$view->movie_id}}</td>
                        <td>{{$view->category_id}}</td>
                        <td>{{$view->serie_id}}</td>
                        <button class="btn btn-round"><i class="fa fa-trash"></i></button>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection