@extends('admin.crud.master')
@section('content')
	

	<div class="container">
 

{{-- 
<form action="{{ Action( 'CrudController@scopeSearch' ) }}" method="GET" role="search">

  <div class="input-group">
    <input type="text" class="form-control" name="q" placeholder="Search Document"> <span class="input-group-btn">
    
    <button type="submit" class="btn btn-default">
      Search
    </button>

    </span>
  </div>

</form> --}}
@if ( session('success') )
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container"><h2>Admin Dashboard</h2></div>
      

</div>


@endsection