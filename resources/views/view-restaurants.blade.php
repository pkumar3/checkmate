@extends('layouts.app')

@section('pageTitle', 'View Restaurants')

@section('css')
<style type="text/css">
	#heading {
        margin: 1.5rem 0rem;
        color: #FFFFFF;
    }

    .info {
        font-size: 1.5rem;
        margin: 0.5rem 1rem;
        margin-top: auto;
        margin-bottom: auto;
    }

    img {
    	width: 75px;
    	height: 75px;
    	margin: 0.5rem;
    }

</style>
@endsection

@section('body')
	@extends('layouts.nav-auth')

	<div id="main-wrapper">
        <div class="container page-content">
                
            <div class="row">
            	<div class="col-md-6">
            		<h2 id="heading">Participating Restaurants</h2>

            		<div class="card flex-row flex-wrap">
            			<img src="https://lh3.googleusercontent.com/proxy/ZOzDgg9u_knSA_aZfn-l9Hylf8CnzwCvvB_osuc-OGYBlbUlFPae8VZamNqi77lsUytLx_Ubaf5HsVqKcgyOMQYL-gT8TjkmkZ5TeMI3qlhT7uGUKGGo74vTMMf9aNkxfOz04yPTeVcstBaPLm95BbliBVdrPA=w240-h160-k-no" class="rounded-circle float-left">
                        <p class="info text-right align-middle"><a href="/example-restaurant">{Restaurant Name}</a></p>
                    </div><!-- /.card -->

                    <div class="card flex-row flex-wrap">
            			<img src="https://lh3.googleusercontent.com/proxy/ZOzDgg9u_knSA_aZfn-l9Hylf8CnzwCvvB_osuc-OGYBlbUlFPae8VZamNqi77lsUytLx_Ubaf5HsVqKcgyOMQYL-gT8TjkmkZ5TeMI3qlhT7uGUKGGo74vTMMf9aNkxfOz04yPTeVcstBaPLm95BbliBVdrPA=w240-h160-k-no" class="rounded-circle float-left">
                        <p class="info text-right align-middle"><a href="/example-restaurant">{Restaurant Name}</a></p>
                    </div><!-- /.card -->

                    <div class="card flex-row flex-wrap">
            			<img src="https://lh3.googleusercontent.com/proxy/ZOzDgg9u_knSA_aZfn-l9Hylf8CnzwCvvB_osuc-OGYBlbUlFPae8VZamNqi77lsUytLx_Ubaf5HsVqKcgyOMQYL-gT8TjkmkZ5TeMI3qlhT7uGUKGGo74vTMMf9aNkxfOz04yPTeVcstBaPLm95BbliBVdrPA=w240-h160-k-no" class="rounded-circle float-left">
                        <p class="info text-right align-middle"><a href="/example-restaurant">{Restaurant Name}</a></p>
                    </div><!-- /.card -->

            	</div>
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /#main-wrapper -->
@endsection