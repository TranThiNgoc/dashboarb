@extends('testt')
@section('content')
	<div>
		<table border="1">
			<thead>
			<tr align="center">
				<th> ID</th>
				<th> Parent</th>
				<th> TenLoai</th>
				<th> Delete</th>
				<th> Edit</th>

			</tr>

			</thead>
			<tbody>
			@foreach($category as $lt)
				<tr>
					<td> {{$lt->id}}</td>
					<td> {{$lt->Parent}}</td>
					<td> {{$lt->TenLoai}}</td>
					<td><a href="xoa"> Delete</a>  </td>
					<td><a href="Sua"> Edit</a>  </td>

				</tr>
			@endforeach

			</tbody>


		</table>

	</div>
@endsection