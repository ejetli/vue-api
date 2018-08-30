@extends('main')

@section('tilte', '| Edit Cmodules')

@section('content')

		<div class="row">
		 <div class="col-md-8">
			{!! Form::model($cmodule, ['route' => ['cmodules.update', $cmodule->id], 'method' => 'PUT']) !!}
		
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name',null, ["class" => 'form-control input-lg']) }}
			
			{{ Form::label('about', 'About:', ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('about', null, ["class" => 'form-control']) }}

			{{ Form::label('status', 'Status:', ['class' => 'form-spacing-top']) }}
			{{ Form::text('status',null, ["class" => 'form-control']) }}
			
			{{ Form::label('order', 'Order:', ['class' => 'form-spacing-top']) }}
			{{ Form::text('order',null, ["class" => 'form-control']) }}		
			
			{{ Form::label('course_id', 'Course_id:', ['class' => 'form-spacing-top']) }}
			{{ Form::text('course_id',null, ["class" => 'form-control']) }}
			

			<br>
	
			<div class="row">
					<div class="col-md-6">
						
						<a href="{{ route('cmodules.show', $cmodule->id) }}" class="btn btn btn-danger btn-block">Cancel</a>
					</div> 
					<div class="col-md-6">
						<input type="submit" class="btn btn-success btn-block" value="Save Changes">
						
					</div> 
				</div>				
		</div>
		

		<div class="col-md-4">
			<div class="well">
				<div class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia',strtotime($cmodule->created_at)) }}</dd>
				</div>
				<br>
				<div class="dl-horizontal">
					<dt>Updated At:</dt>
					<dd>{{date('M j, Y h:ia', strtotime($cmodule->updated_at)) }}</dd>
				</div>
				<hr>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
		<br>
		<a class="btn btn-sm btn-success" href="{{ route('cmodules.index') }}">Back Cmodules</a>
	</div>
		


@endsection