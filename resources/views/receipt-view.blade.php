@extends('layouts.app')
@section('pageTitle', 'View Receipt')

@section('css')
<style type="text/css">
    #wrapper {
        background: linear-gradient(#3466ae, #5390f1);
    }

    .page-content {
        width: 86vw;
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
        margin-left: auto;
        margin-right: auto;
    }

    #receipt-detail-items .receipt-item-cell {
        padding: 0.2rem 1rem 0.2rem 1rem;
    }

    #receipt-detail-area .card-title {
        text-align: center;
        font-size: 1.8rem;
        font-weight: bold;
    }

    #receipt-detail-items-total {
        padding: 0.5rem;
        margin: 0.6rem 0 0.6rem 0;
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
                        <table id="receipt-detail-items" class="table table-bordered">
                            <thead class="thead-light">
                                <th class="receipt-item-cell">Quantity</th>
                                <th class="receipt-item-cell">Item Name</th>
                                <th class="receipt-item-cell">Cost</th>
                            </thead>
                            <tbody id="receipt-detail-items-tbody">
                                <tr>
                                    <td class="receipt-item-cell">1</td>
                                    <td class="receipt-item-cell">item-1</td>
                                    <td class="receipt-item-cell">$1.11</td>
                                </tr>
                                <tr>
                                    <td class="receipt-item-cell">3</td>
                                    <td class="receipt-item-cell">item-2</td>
                                    <td class="receipt-item-cell">$2.61</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="lead" id="receipt-detail-items-total">Total: ${receipt-total}</p>
                    </div>
                    <form id="gratuity-area">
                        <div class="form-group">
                            <label for="gratuity">Gratuity %:</label>
                            <input type="text" class="form-control" name="gratuity">
                        </div>
                        <div class="form-group">
                            <label id="receipt-total">Your final payment will be: ${math}</label>
                        </div>
                        <input type="button" class="btn btn-primary" value="Confirm">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection