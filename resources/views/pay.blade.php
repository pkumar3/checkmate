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
            		<h2 id="heading">Payment Test</h2>

                    
                    <form action="/thanks" method="POST">
                        @csrf
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_pIaGoPD69OsOWmh1FIE8Hl4J"
                            data-amount="999"
                            data-name="Stripe Demo"
                            data-description="This is how onboarding would work"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto"
                            data-currency="usd">
                        </script>
                    </form>
                    

            	</div>
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /#main-wrapper -->
@endsection