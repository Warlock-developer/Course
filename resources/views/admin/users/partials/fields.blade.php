<div class="form-group">
	{!! Form::label('email', 'Correo Electrónico') !!}
	{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Introduzca su e-mail']) !!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Contraseña') !!}
	{!! Form::password('password',['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('firs_name', 'Primer Nombre') !!}
	{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('last_name', 'Apellido') !!}
	{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('type', 'Tipo') !!}
	{!! Form::select('type', config('options.type'), null, ['class' => 'form-control']) !!}
</div>
