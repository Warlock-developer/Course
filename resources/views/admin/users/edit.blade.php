@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Usuario: {{ $user->first_name }}</div>
				<div class="panel-body">

					@include('admin.users.partials.messages')

					{!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
	    				@include('admin.users.partials.fields')
	    				<div class="row">
	    					<div class="col-lg-6">
								<button type="submit" class="btn btn-default">Actualizar Usuario</button>
	    					</div>
	    					<div class="col-lg-6">
	    						@include('admin.users.partials.delete')
	    					</div>
	    				</div>
					{!! Form::close() !!}

				</div>
			</div>
		</div>
		
	</div>
</div>
@endsection