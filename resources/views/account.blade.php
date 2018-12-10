@extends('layouts.app')

@section('pageTitle', 'Account')

@section('css')
<style type="text/css">
    #heading {
        margin: 1.5rem 0rem;
        color: #FFFFFF;
    }

    .info {
        margin: 0.5rem 1rem;
    }

    .card {
        width: 100%;
    }

    .card-header {
        font-size: 1.5rem;
    }

    #right-side {
        margin-top: 3.8rem;
    }
</style>
@endsection

@section('body')
	@extends('layouts.nav-auth')

	<div id="main-wrapper">
        <div class="container page-content">
                
            <div class="row">
            	<div class="col-6">
            		<h2 id="heading">{User Name} - Account</h2>
                    <div class="card">
                        <div class="card-header"><b>Profile Info</b></div>
                        <p class="info"><b>Phone:</b> xxx-xxx-1234</p>
                        <p class="info"><b>Email:</b> abc@xyz.com</p>
                        <p class="info"><b>Zip Code:</b> xxxxx</p>
                    </div><!-- /.card -->

                    <div class="card">
                        <div class="card-header"><b>Payment Info</b></div>
                        <p class="info"><b>{Amex/Visa/Master}</b> - xxxx xxxx xxxx 1234</p>
                        <p class="info"><b>Expires</b> - xx/xx</p>
                        <p class="info"><b>Billing Zip Code:</b> xxxxx</p>
                    </div><!-- /.card -->
                    
            	</div>

                <div id="right-side" class="col-6">
                    <div class="card">
                        <div class="card-header"><b>Deals for You</b></div>
                        <p class="info">Deal 1</p>
                        <p class="info">Restaurant Name/Info</p>
                        <p class="info">Add image/graphic</p>
                        <p class="info">Deal 2</p>
                        <p class="info">Deal 3</p>
                        <p class="info">What else could go here?</p>
                    </div><!-- /.card -->
                </div>
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /#main-wrapper -->
@endsection
