@extends('layouts.app')
@section('title','| People')
@section('nameTitleTemplate','People')
@section('js')
<script>
  $('#yes').click(function(){
    $('#numberSon').removeClass('d-none');  
    $('#aSon').removeClass('d-none');  
  });
  $('#no').click(function(){
    $('#numberSon').addClass('d-none');
    $('#numberSon').val('');
    $('#hijos').html('');
    $('#aSon').addClass('d-none');   
  });
  $('#aSon').click(function(){
    for (var i=0; i < $('#numberSon').val(); i++) {
      $('#hijos').append('<hr>Hijo '+ i +'<input type="date" class="form-control" name="'+i+'">');
     }
  });
  $('#location').click(function(){
    validarLocation($('#location'),$('#city'));
    validarLocation($('#city'),$('#street'));
  });
  $('#city').click(function(){
    validarLocation($('#city'),$('#street'));
    $('#street').val('Street')
  });
  $('#clear').click(function(){
    clear($('#name'));
    clear($('#lastname'));
    clearS($('#gender'));
    clear($('#email'));
    clear($('#passLifePoint'));
    clear($('#passAOL'));
    clearS($('#statu'));
    clear($('#DateN'));
    clearS($('#location'));
    clear($('#codePostal'));

  });
  $('#editCookies').click(function(){
    $('#formCookies').toggleClass('d-none');
    $('#footerCookies').toggleClass('d-none');
    $('#divCookies').toggleClass('d-none');
  });
  function clear(arg){
    arg.val('');
  }
  function clearS(arg){
    arg.val(0);
  }
  function validarLocation(atr1,atr2){
    if(atr1.val()!=0){
      atr2.removeClass('d-none');
      return true;
    }else{
      atr2.addClass('d-none');
      atr2.val(0);
      return false;
    }
  }
  function cookies(cookies){
    $('#kbdCookies').html(cookies);
  }
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
          <div class="col-xl-3 col-lg-6 offset-lg-9">
            <div class="card card-stats mb-4 mb-xl-0">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Person</h5>
                    <span class="h2 font-weight-bold mb-0">Create</span>
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
      </div>
    </div>
</div>
@endsection
@section('content')
@include('layouts.modales.modalCreatePerson')
@include('layouts.modales.modaleCookies')
<div class="row mt-5">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Table People</h3>
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
                <th scope="col">last_login</th>
                <th scope="col">Sons</th>
                <th scope="col">Status</th>
                <th scope="col">Street</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Code_P</th>
                <th scope="col">Working</th>
                <th scope="col">Cookies</th>
                <th scope="col">Seregins</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach($person as $people)
              <tr>
                  <td>{{$people->id}}</td>
                  <td>{{$people->email->name}}</td>
                  <td>{{$people->email->lastname}}</td>
                  <td>{{$people->email->email}}</td>
                  <td>{{$people->email->password}}</td>
                  <td>{{$people->brith}}</td>
                  <td>{{$people->last_login}}</td>
                  <td>
                     <?php $i=0; ?>
                    @foreach($son as $sons)
                      @if($sons->person_id == $people->id)
                        #{{$i++}} / {{$sons->dateN}}
                      @endif
                    @endforeach
                    @if ($i==0)
                    No tiene Crias
                    @endif
                  </td>
                  <td>{{$people->statu->statu}}</td>
                  <td>{{$people->Street->street}}</td>
                  <td>{{$people->Street->City->city}}</td>
                  <td>{{$people->Street->City->Location->location}}</td>
                  <td>{{$people->code}}</td>
                  <td>{{$people->working == 1 ? 'TRUE' : 'FALSE' }}</td>
                  <td><a  href="#" onclick="cookies('{{$people->cookies}}')" data-target='#mCookies' data-toggle='modal' class='btn btn-warning'><i class='ni ni-world'></i></a></td>
                  <td><button data-clipboard-text="{{$people->seregins}}" class='btn btn-success bg-primary tect-white btn-icon-clipboard ' title="Copy Seregins">Seregins</button></td>
                  <td>
                    <a  href="{{route('People.editDate',$people->slug)}}" vla class='btn btn-info' id='upDate'>Last_login</a> <hr>
                    <a  href="{{route('People.delete',$people->slug)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a>
                    <a  href="{{route('People.update',$people->slug)}}" class='btn btn-primary'><i class='fa fa-edit'></i></a>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
