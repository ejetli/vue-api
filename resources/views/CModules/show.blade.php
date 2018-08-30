@extends('main')

@section('title', '| view cmodules')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $cmodule->name }}</h1>
			<p class="lead">{{ $cmodule->about }} </p>
			<p class="lead">{{ $cmodule->status }}</p>
			<p class="lead">{{ $cmodule->order }} </p>
			<p class="lead">{{ $cmodule->course_id }} </p>		
			<br><br><br>
			<a class="btn btn-sm btn-success" href="{{ route('cmodules.index') }}">Back Cmodules</a>
		</div>

		<div class="col-md-4">
			<div class="well">
				<div class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia',strtotime($cmodule->created_at)) }}</dd>
				</div>
				<div class="dl-horizontal">
					<dt>Updated At:</dt>
					<dd>{{date('M j, Y h:ia', strtotime($cmodule->updated_at)) }}</dd>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						
						<a href="{{ route('cmodules.edit', $cmodule->id) }}" class="btn btn-sm btn-primary btn-block">Edit</a>
					</div> 
					<div class="col-sm-6">

						{!! Form::open(['route' => ['cmodules.destroy', $cmodule->id], 'method' => 'DELETE']) !!}

						
						<input type="submit" class="btn btn-sm btn-success btn-danger btn-block" value="Delete">

						{!! Form::close() !!}
					</div> 
					</div>	
				</div>
			</div>
		</div>
	</div>
	


@stop