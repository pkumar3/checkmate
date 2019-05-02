@extends('layouts.app')

@section('pageTitle', 'Test Payment')

@section('css')
<style type="text/css">
	#heading {
        margin: 1.5rem 0rem;
        color: #FFFFFF;
    }

</style>
@endsection

@section('body')
	@extends('layouts.nav-auth')

	<div id="wrapper">
        <div id="page-content" class="container">
            <div class="row">
            	<div class="col-md-6">
            		<h2 id="heading">Thank you for using Checkmate!</h2>
                    
            	</div>
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /#main-wrapper -->
@endsection