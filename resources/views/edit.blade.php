@extends('layouts.app')

@section('content')

   <h1> edit data </h1>

		   <!-- pesan eror -->
		  <!--  @if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		   @endif -->

   <form action="{{ url('portofolio/{{ $ar->id}}') }} " method="post">

   	   <!-- tambah ini utuk token validasi inputan user -->
   	   @csrf

   	   <!-- kasi tai ini pake method put -->
   	   @method('PUT')

		  <div class="form-group">
		    <label for="title">nama</label>
		    <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
		    <!-- pesan error -->
			    @error('title')
				    <div class="alert alert-danger">{{ $message }}</div>
				@enderror
		  </div>

		  <div class="form-group">
		    <label for="subject">harga</label>
		    <textarea class="form-control" id="subject" name="subject" rows="3"> {{ old('subject')}}</textarea>
			    <!-- pesan eror subject, name nya -->
			    @error('subject')
				    <div class="alert alert-danger">{{ $message }}</div>
				@enderror
		  </div>

		 
		  <button type="submit" class="btn btn-primary">Submit</button>
 </form>

@endsection
