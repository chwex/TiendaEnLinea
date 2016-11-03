@extends('layouts.app')

@section('encabezado')
    <h2>Inicio</h2>
@stop

@section('content')
    <form action="" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token() }}">
        
        <div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="form-control" name="nombre" placeholder="nombre" type="text" required>
        </div>

            <div class="form-group">
                <label for="edad">Email:</label>
                <input class="form-control" name="edad" placeholder="email" type="number" required>
            </div> 

            <div class="form-group">
                <label for="edad">Contrasena:</label>
                <input class="form-control" name="edad" placeholder="contrasena" type="number" required>
            </div> 
        

            <div class="form-group">
                <label for="edad">Nombre completo:</label>
                <input class="form-control" name="edad" placeholder="nombrecompleto" type="number" required>
            </div> 
            

            <div class="form-group">
                <label for="edad">Domicilio:</label>
                <input class="form-control" name="edad" placeholder="domicilio" type="number" required>
            </div> 

            <div class="form-group">
                <label for="edad">Telefono:</label>
                <input class="form-control" name="edad" placeholder="telefono" type="number" required>
            </div> 


            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select name="sexo" class="form-control" required>
                    <option value="">Sexo:</option>
                    <option value="0">Femenino</option>
                    <option value="1">Masculino</option>
                </select>
                </div>
            
            <div class="form-group">
                <label for="correo">Fecha de nacimiento:</label>
                <input class="form-control" name="fechanaciemiento" placeholder="correo" type="email" required>
            </div>
            </div>
            <input type="submit" value="Registrar" class="btn btn-primary" name="registrar">
            <a href="{{url('/home')}}" class="btn btn-danger">Cancelar</a>
    </form>
@stop

