@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-sm-3">
              <div class="jumbotron">
                  <h1></h1>
                  <p><span class="label label-primary">Cats 0</span></p>
              </div>
          </div>
          <div class="col-sm-3">
            <div class="jumbotron">
                <h1></h1>
                <p><span class="label label-primary">Material 0</span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <h1></h1>
                <p><span class="label label-primary">Visits 0</span></p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <h1></h1>
                <p><span class="label label-primary">Today 0</span></p>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
            <div class="list-group-item">
                <a class="btn btn-block btn-danger" href="">Create new category</a>
                <h4 class="list-group-item-heading">The one category</h4>
                <p class="list-group-item-text">Amoutn of material</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="list-group-item">
                <a class="btn btn-block btn-danger" href="">Create new category</a>
                <h4 class="list-group-item-heading">The one category</h4>
                <p class="list-group-item-text">Amoutn of material</p>
            </div>
        </div>
    </div>
  </div>
@endsection
