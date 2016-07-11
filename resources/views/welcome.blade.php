@extends('layouts.master')

@section('content')

<div class="row">

  <div class="row">

    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-user fa-5x" style="font-size: 7em"></i>
            </div>
            <div class="col-xs-6 text-right">
              <div class="huge" style="font-size: 4em">{{$clientes}}</div>
              <h2 class="panel-title">Clientes</h2>
            </div>
          </div>
        </div>
        <div class="panel-body">
          Content
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-shopping-cart fa-5x" style="font-size: 7em"></i>
            </div>
            <div class="col-xs-6 text-right">
              <div class="huge" style="font-size: 4em">{{$fretes}}</div>
              <h2 class="panel-title">Entregas</h2>
            </div>
          </div>
        </div>
        <div class="panel-body">
          Content
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-home fa-5x" style="font-size: 7em"></i>
            </div>
            <div class="col-xs-6 text-right">
              <div class="huge" style="font-size: 4em">{{$enderecos}}</div>
              <h2 class="panel-title">Cidades</h2>
            </div>
          </div>
        </div>
        <div class="panel-body">
          Content
        </div>
      </div>
    </div>

    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-calendar-o fa-5x" style="font-size: 7em"></i>
            </div>
            <div class="col-xs-6 text-right">
              <div class="huge" style="font-size: 4em">0</div>
              <h2 class="panel-title">Cronograma</h2>
            </div>
          </div>
        </div>
        <div class="panel-body">
          Content
        </div>
      </div>
    </div>

  </div>

   <div class="row">

    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-money fa-5x" style="font-size: 6em"></i>
            </div>
            <div class="col-xs-6 text-right">
              <div class="huge" style="font-size: 4em">{{$fretes}}</div>
              <h2 class="panel-title">Pagamentos</h2>
            </div>
          </div>
        </div>
        <div class="panel-body">
          Content
        </div>
      </div>
    </div>

  </div>

</div>
@endsection