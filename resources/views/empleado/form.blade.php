<!--Formulario que tendra los datos en comun con create y edit-->

<h1> {{$modo}} empleado</h1>
    
@if(count($errors)>0)
    <div class="alert alert-danger" role="danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li> 
            @endforeach 
        </ul>

    </div>
@endif

    <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
    </div>

    <div class="form-group">
    <label for="PrimerApellido">Primer apellido</label>
    <input type="text" class="form-control" name="PrimerApellido" id="PrimerApellido" value="{{ isset($empleado->PrimerApellido)?$empleado->PrimerApellido:old('PrimerApellido')}}">
    </div>

    <div class="form-group">
    <label for="SegundoApellido">Segundo apellido</label>
    <input type="text" class="form-control" name="SegundoApellido" id="SegundoApellido" value="{{isset($empleado->SegundoApellido)?$empleado->SegundoApellido:old('SegundoApellido')}}">
    </div>

    <div class="form-group">
    <label for="Email">Email</label>
    <input type="text" class="form-control" name="Email" id="Email" value="{{isset($empleado->Email)?$empleado->Email:old('email')}}">
    </div>

    <div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" name="Telefono" id="Telefono" value="{{isset($empleado->Telefono)?$empleado->Telefono:old('Telefono')}}">
    </div>

    <div class="form-group">
    <label for="DNI">DNI</label>
    <input type="text" class="form-control" name="DNI" id="DNI" value="{{isset($empleado->DNI)?$empleado->DNI:old('DNI')}}"><br>
    </div>

    <input class="btn btn-success" type="submit" value="{{$modo}}">

    <a href="{{url('empleado/')}}" class="btn btn-primary">Regresar</a>

    <br>