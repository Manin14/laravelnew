@extends('layouts.app')

<h1> porto </h1>

<!-- button -->
<a href ="portofolio/create" class="btn btn-primary mb-5"> Bikin artikel </a>

@section('content')
<table border="1" >
	<thead>
		<td>id</td>
		<td>judul</td>
		<td>subjek</td>
		<td>aksi</td>
	</thead>
  <tbody>
	  @foreach ($po as $ar)
		     <td> {{ $ar->id}} </td>
		      <td> {{ $ar->nama}} </td>
		      <td> {{ $ar->harga}} </td>
              
               <!-- baca -->
		      <td> <a href="/portofolio/{{$ar->id}}" class="btn btn-info btn-sm">baca</a> <td>

		      <!-- edit -->
		      <td> <a href="/portofolio/{{$ar->id}}/edit" class="btn btn-info btn-sm">edit</a> <td>

		      	 <!-- hapus -->
		      	 <form action="/portofolio/{{$ar->id}}">	
		      	 	@csrf
		      	 	@method('DELETE')

		              <button class="btn btn-danger">	hapus </button>
		      	</form>
  </tbody>
     @endforeach
 </table>
 @endsection