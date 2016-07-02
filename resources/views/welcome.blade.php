@extends('layouts.master')

@section('content')

<div class="row">

    <div class="row">

       <div class="col-sm-6">
            <a href="{{action('ClientesController@index')}}">
              <div class="card card-block">
                <div style="color: lightgreen">
                    <div class="col-sm-3">
                        <span class="fa fa-user" style="font-size: 7.6em"></span>
                    </div>
                    <div class="col-sm-6">
                          <div class="row">
                              <span style="font-size: 4em">{{$clientes}}</span>
                          </div>
                          <div class="row">
                              <span style="font-size: 1.7em">
                                {{ $clientes == 1 ? 'Cliente satisfeito': 'Clientes satisfeitos'}}
                              </span>
                          </div>
                    </div>
                </div>
              </div>
            </a>
       </div>

       <div class="col-sm-6">
            <a href="{{action('FretesController@index')}}">
                <div class="card card-block">
                  <div style="color:#F4B350">
                      <div class="col-sm-3">
                          <span class="fa fa-truck" style="font-size: 7.6em"></span>
                      </div>
                      <div class="col-sm-6">
                            <div class="row">
                                <span style="font-size: 4em">{{$fretes}}</span>
                            </div>
                            <div class="row">
                                <span style="font-size: 1.7em">
                                  {{ $fretes == 1 ? 'Entrega efetuada': 'Entregas efetuadas'}}
                                </span>
                            </div>
                      </div>
                  </div>
                </div>
            </a>
       </div>

    </div>

    <div class="row" style="padding-top: 5%">

        <div class="col-sm-6">
            <div class="card card-block">
              <div style="color: lightblue">
                  <div class="col-sm-3">
                      <span class="fa fa-home" style="font-size: 7.6em"></span>
                  </div>
                  <div class="col-sm-6">
                        <div class="row">
                            <span style="font-size: 4em">2000</span>
                        </div>
                        <div class="row">
                            <span style="font-size: 1.7em">Cidades visitadas</span>
                        </div>
                  </div>
              </div>
            </div>
       </div>

    </div>
    
</div>
@endsection