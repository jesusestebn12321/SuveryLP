@extends('layouts.app')
@section('title','| Pay')
@section('nameTitleTemplate','Pay')
@section('js')

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
                    <h5 class="card-title text-uppercase text-muted mb-0">Pay</h5>
                    <span class="h2 font-weight-bold mb-0">Create</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                      <a href="#" data-target='#createPay' data-toggle='modal' class='text-white'><i class="fas fa-plus"></i></a>
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
@include('layouts.modales.modalCreatePay')
<div class="row mt-5">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Table Pay</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                
                <th scope="col">Pedido</th>
                <th scope="col">Retiro</th>
                
                <th scope="col">Status</th>
                <th scope="col">GC</th>
                <th scope="col">-</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pay as $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->person->name}}</td>
                  <td>{{$item->person->lastname}}</td>
                  <td>{{$item->created_at}}</td>
                  <td>{{$item->pedido}}</td>
                  <td>{{$item->Status->statu}}</td>
                  <td>{{$item->GC}}</td>
                  <td>
                    @if ($item->Status->id==5)
                      <a href="{{route('Pay.editStatu',$item->id)}}" class='btn btn-warning' id='upDate'>Status</a>
                    @elseif($item->Status->id==6)
                      <a href="{{route('Pay.editStatu5',$item->id)}}" class='btn btn-primary' id='upDate'>Status</a>
                    @endif
                      <a href="{{route('Pays.destroy',$item->id)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a>
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