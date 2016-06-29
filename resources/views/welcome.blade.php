@extends('layouts.master')

@section('content')
<div class="row">
    <div class="row">
       <div class="col-sm-6">
            <a href="/api/clientes">
              <div class="card card-block">
                <div style="color: lightgreen">
                    <div class="col-sm-3">
                        <span class="glyphicon glyphicon-user" style="font-size: 7.6em"></span>
                    </div>
                    <div class="col-sm-6">
                          <div class="row">
                              <span style="font-size: 4em">2000</span>
                          </div>
                          <div class="row">
                              <span style="font-size: 1.7em">clientes satisfeitos</span>
                          </div>
                    </div>
                </div>
              </div>
            </a>
       </div>
       <div class="col-sm-6">
            <a href="api/fretes">
                <div class="card card-block">
                  <div style="color:#F4B350">
                      <div class="col-sm-3">
                          <span class="glyphicon glyphicon-send" style="font-size: 7.6em"></span>
                      </div>
                      <div class="col-sm-6">
                            <div class="row">
                                <span style="font-size: 4em">2000</span>
                            </div>
                            <div class="row">
                                <span style="font-size: 1.7em">entregas efetuadas</span>
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
                      <span class="glyphicon glyphicon-home" style="font-size: 7.6em"></span>
                  </div>
                  <div class="col-sm-6">
                        <div class="row">
                            <span style="font-size: 4em">2000</span>
                        </div>
                        <div class="row">
                            <span style="font-size: 1.7em">cidades visitadas</span>
                        </div>
                  </div>
              </div>
            </div>
       </div>
    </div>
</div>
@endsection