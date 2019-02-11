@extends('layouts.app')
@section('pageTitle', 'View Receipt')

@section('css')
<style type="text/css">
    #wrapper {
        background: linear-gradient(#3466ae, #5390f1);
    }

    .page-content {
        width: 80vw;
        padding-top: 1.5rem;
    }

    #receipt-area {
        color: #DFDFDF;
        padding-bottom: 3.5rem;
    }

    #receipt-area h1 {
        text-align: center;
        padding-bottom: 1.5rem;
    }

    #gratuity-area {
        padding: 1.5rem;
        background-color: #f7f5e3;
        border-radius: 12px;
    }

    /* Large screens */
    @media screen and (min-width: 500px) {
        .page-content {
            width: 70vw;
            min-height: 100%;
        }
    }

</style>
@endsection

@section('body')
    @extends('layouts.nav-auth')
    <div id="wrapper">
        <div class="container page-content">
            <div id="receipt-area">
                <h1>Receipt</h1>
                <h3>Your card ending in {ccn-last-4} was charged {charge} at {restaurant-name}.</h3>
            </div>
            <div id="gratuity-area">
                <form>
                    <div class="form-group">
                        <label for="gratuity">Gratuity %:</label>
                        <input type="text" class="form-control" name="gratuity">
                    </div>
                    <div class="form-group">
                        <label id="receipt-total">Your total will be: ${math}</label>
                    </div>
                    <input type="button" class="btn btn-primary" value="Confirm">
                </form>
            </div>
        </div>
    </div>
@endsection