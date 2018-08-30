@extends('main')

@section('title', '| All Cmodules')

@section('content')
	
	<div class="row">
		<div class="col-md-9">
			<h1>All cmodules</h1>
		</div>
		
		<div class="col-md-3">
			<a href="{{ route('cmodules.create') }}" class="btn btn-sm btn-block btn-primary btn-h1-spacing">Create New cmodule</a>
		</div>	

		<div class="col-md-12">
			<hr>
		</div>	

	</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>id</th>
						<th>Name</th>
						<th>About</th>
						<th>Status</th>
						<th>Order</th>
						<th>course_id</th>
						<th>...</th>
					</thead>

					<tbody>
						@foreach ($cmodule as $cmodules)
						<tr>
							<th>{{ $cmodules->id }}</th>
							<th>{{ $cmodules->name }}</th>
							<th>{{ substr($cmodules->about, 0, 50) }}{{ strlen($cmodules->about) > 50 ? "..." : "" }}</th>
							<th>{{ $cmodules->status }}</th>
							<th>{{ $cmodules->order }}</th>
							<th>{{ $cmodules->course_id }}</th>
							<th>
								<a href="{{ route('cmodules.show', $cmodules->id) }}" class="btn btn-info btn-sm">view</a> <a href="{{ route('cmodules.edit', $cmodules->id) }}" class="btn btn-info btn-sm">Edit</a>
							</th>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="text-center">
					{!! $cmodule->links(); !!}
				</div>
			</div>
		</div>
	

@stop