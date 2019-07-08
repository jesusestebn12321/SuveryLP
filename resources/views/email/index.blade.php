@extends('layouts.app')
@section('title','| Email')
@section('nameTitleTemplate','Email')
@section('js')
<script>
  $('#clear').click(function(){
    clear($('#name'));
    clear($('#lastname'));
    clear($('#email'));
    clear($('#password'));
    clearS($('#gender_id'));
    clear($('#brith'));
  });
  function clear(arg){
    arg.val('');
  }
  function clearS(arg){
    arg.val(0);
  }
  var baneadoEmail=$('#tbodyBaneado');
  var newEmail=$('#tbodyNew');
  var useEmail=$('#tbodyUse');

  $('#NewEmail').click(function(){
    newEmail.removeClass('d-none');
    baneadoEmail.addClass('d-none');
    useEmail.addClass('d-none');
  });
  $('#BaneadoEmail').click(function(){
    newEmail.addClass('d-none');
    baneadoEmail.removeClass('d-none');
    useEmail.addClass('d-none');

  });
  $('#UseEmail').click(function(){
    newEmail.addClass('d-none');
    baneadoEmail.addClass('d-none');
    useEmail.removeClass('d-none');

  });
  
</script>
@endsection
@section('header')
<div class="header bg-gradient-danger pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      @if(Session::has('message'))
      <div class='alert alert-success'>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p>{{ Session::get('message') }}</p>
      </div>
      @endif
      <!-- Card stats -->
      <div class="row">

        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Table</h5>
                  <span class="h2 font-weight-bold mb-0">New E-mail</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                    <a href="#" id='NewEmail' class='text-white'><i class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Table</h5>
                  <span class="h2 font-weight-bold mb-0">Baneados</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-red text-white rounded-circle shadow">
                    <a href="#" id="BaneadoEmail" class='text-white'><i class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Table</h5>
                  <span class="h2 font-weight-bold mb-0">Use E-mail</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                    <a href="#" id="UseEmail" class='text-white'><i class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Regiter</h5>
                  <span class="h2 font-weight-bold mb-0">E-mail</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                    <a href="#" data-target='#createPerson' data-toggle='modal' class='text-white'><i class="fas fa-plus"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

      </div>
    </div>
  </div>
</div>
@endsection
@section('content')
@include('layouts.modales.modalRegistrarEmail')
<div class="row mt-5">
  <div class="col">
    <div class="card bg-default shadow">
      <div class="card-header bg-transparent border-0">
        <h3 class="text-white mb-0">Table Email</h3>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-dark table-flush">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Lastname</th>
              <th scope="col">E-mail</th>
              <th scope="col">Password LifePonit</th>
              <th scope="col">Date Brith</th>
              <th scope="col">Gender</th>
              <th scope="col">Status</th>
              <th scope="col"></th>
            </tr>
          </thead>

          @include('email.view.use')
          @include('email.view.new')
          @include('email.view.baneado')


        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
