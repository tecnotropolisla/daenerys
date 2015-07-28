@extends('template.app')
@section('page', $page_title)
@section('padre', 'Personas')
@section('content')
<section class="content col-md-10 col-md-push-1">
          <div class="row">
          	<div class="col-md-3">
          	@if($persona[0]->blb_img=="")
          	<p class="text-center"><img class="img-circle" style="width:230px;" src="{{ asset('images/troovami-logo-offline.png') }}" /></p>
          	@else
          	<p class="text-center"><img class="img-circle" style="width:230px;" src="data:{{$persona[0]->format}};base64,{{$persona[0]->blb_img}}" /></p>
          	@endif
  			
  			<h2 class="text-center">&laquo; {{$persona[0]->name}} &raquo;</h2>
  			</div>
            <div class="col-md-9">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-search text-aqua"></i> {{$page_title}} Persona </h3>
                  <div class="box-tools">
                  <b><i class="fa fa-cog"></i> Operaciones </b>
                    <div class="btn-group">
			        	<a class="btn btn-warning btn-flat" href="{{route('persona.edit',$persona[0]->id)}}" title="Editar"><i class="fa fa-pencil"></i></a>	
			            <a class="btn bg-purple btn-flat" href="#" title="Cambiar Status (Activar / Desactivar)"><i class="fa fa-ban"></i></a>
			            <a class="btn btn-danger btn-flat" href="{{route('persona.delete',$persona[0]->id)}}" title="Eliminar"><i class="fa fa-close"></i></a>
			        </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                  	<tbody>
		  			<tr>
			  			<th class="text-right">Usuario:</th>
			  			<td>{{$persona[0]->name}}</td>
			  			<th class="text-right">Nombre Completo:</th>
			  			<td>{{$persona[0]->str_nombre}}, {{$persona[0]->str_apellido}}</td>
		  			</tr>
		  			<tr>
		  				<th class="text-right">Género:</th>
		  				<td>{{$persona[0]->genero}}</td>
		  				<th class="text-right">Fecha de Nacimiento:</th>
		  				<td>{{$persona[0]->dmt_fecha_nacimiento}}</td>
		  			</tr>
		  			
		  			<tr>
			  			<th class="text-right">Documento de Identificación:</th>
			  			<td>{{$persona[0]->str_ididentificacion}}</td>
		  				<th class="text-right">Pasaporte:</th>
		  				@if ($persona[0]->str_pasaporte == "")
		  					<td><span class="label label-default"><i class="fa fa-ban"></i> VACIO</span></td>
		  				@else
		  					<td>{{$persona[0]->str_pasaporte}}</td>
		  				@endif		  				
		  			</tr>
		  			
		  			<tr>
		  				<th class="text-right">País:</th>
			  			<td>{{$persona[0]->str_paises}} <img class="img-rounded" style="width:30px;" src="data:{{$persona[0]->format_flag}};base64,{{$persona[0]->bandera}}" /></td>
		  				<th class="text-right">Estado y Certificado:</th>
		  				<td>
		  				@if ($persona[0]->bol_eliminado == 0)
		  					<span class="label label-success"><i class="fa fa-check"></i> ACTIVADO</span>
		  				@else
		  					<span class="label label-default"><i class="fa fa-ban"></i> DESACTIVADO</span>
		  				@endif
		  				@if ($persona[0]->bol_certificado == NULL)		  				
		  					<span class="label label-default"><i class="fa fa-certificate"></i> NO CERTIFICADO</span>
		  				@else
		  					<span class="label label-primary"><i class="fa fa-certificate"></i> CERTIFICADO</span>
		  				@endif		  					
		  					
		  				</td>
		  			</tr>

		  			<tr>
			  			<th class="text-right">Email:</th>
			  			<td>{{$persona[0]->email}}</td>
		  				<th class="text-right">Rol:</th>
		  				<td>{{$persona[0]->str_rol}}</td>
		  			</tr>	

		  			<tr>
			  			<th class="text-right"><i class="fa fa-twitter"></i> Twitter:</th>
			  			<td>{{$persona[0]->str_twitter}}</td>
		  				<th class="text-right"><i class="fa fa-facebook"></i> Facebook:</th>
		  				<td>{{$persona[0]->str_facebook}}</td>
		  			</tr>

		  			<tr>
			  			<th class="text-right"><i class="fa fa-instagram"></i> Instagram:</th>
			  			<td>{{$persona[0]->str_instagram}}</td>
		  				<th class="text-right">Servicio:</th>
		  				<td>{{$persona[0]->servicio}}</td>
		  			</tr>

		  			<tr>
			  			<th class="text-right">Email:</th>
			  			<td>{{$persona[0]->email}}</td>
		  				<th class="text-right">Rol:</th>
		  				<td>{{$persona[0]->str_rol}}</td>
		  			</tr>
            		</tbody>			  		
                  </table>                  
                </div>
              </div>
            </div>  
          </div>  

@endsection