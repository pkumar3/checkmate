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
        padding-bottom: 0.5rem;
    }

    #receipt-area h1 {
        text-align: center;
        padding-bottom: 1.5rem;
    }

    #receipt-detail-area {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    #receipt-detail-area .card-body {
        padding-left: 1rem;
        padding-bottom: 0;
    }

    #receipt-detail-items {
        list-style-type: none;
    }

    #receipt-detail-items ul {
        padding: 2rem;
    }

    #receipt-detail-items li {
        font-size: 1.1rem;
        padding-left: 0.5rem;
    }

    #receipt-detail-area .card-title {
        text-align: center;
        font-size: 1.8rem;
        font-weight: bold;
    }

    #receipt-detail-items-total {
        padding: 0.5rem;
        background-color: #f4f4f4;
        border-radius: 12px;
        font-size: 1.5rem;
        font-style: italic;
        text-align: center;
    }

    #gratuity-area {
        padding: 0.5rem 1.5rem;
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
            <div id="receipt-detail-area">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Receipt Details</h4>
                        <ul id="receipt-detail-items" class="list-group list-group-flush">
                            <li>{item-name} : {item-cost}</li>
                            <li>{item-name} : {item-cost}</li>
                            <li>{item-name} : {item-cost}</li>
                        </ul>
                        <p class="lead" id="receipt-detail-items-total">Total: ${receipt-total}</p>
                    </div>
                    <form id="gratuity-area">
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
    </div>
@endsection