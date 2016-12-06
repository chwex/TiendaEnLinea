@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro usuario</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('nombrecompleto') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"> Apellido </label>
                               
                               <div class="col-md-6">
                                    <input id="nombrecompleto" type="nombrecompleto" class="form-control" name="nombrecompleto" value="{{ old('nombrecompleto') }}" required>

                                    @if ($errors->has('nombrecompleto'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nombrecompleto') }}</strong>
                                        </span>
                                    @endif
                              </div>
                        </div>  

                               <div class="form-group{{ $errors->has('domicilio') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"> Direccion </label>
                               
                               <div class="col-md-6">
                                    <input id="domicilio" type="domicilio" class="form-control" name="domicilio" value="{{ old('domicilio') }}" required>

                                    @if ($errors->has('domicilio'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('domicilio') }}</strong>
                                        </span>
                                    @endif
                              </div>
                        </div>  

                               <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"> Telefono </label>
                               
                               <div class="col-md-6">
                                    <input id="telefono" type=number class="form-control" name="telefono" value="{{ old('telefono') }}" required>

                                    @if ($errors->has('telefono'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telefono') }}</strong>
                                        </span>
                                    @endif
                              </div>
                        </div>  

                         <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"> Sexo </label>
                               
                               <div class="col-md-6">
                                    
                                    <select id="sexo" type="sexo" class="form-control" name="sexo" value="{{ old('sexo') }}" required>
                                        <option value="">Sexo:</option>
					                    <option value="0">Femenino</option>
					                    <option value="1">Masculino</option>
                                    @if ($errors->has('sexo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('sexo') }}</strong>
                                        </span>
                                    @endif
                                    </select>
                              </div>
                        </div>  


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmacion de contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registro
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
