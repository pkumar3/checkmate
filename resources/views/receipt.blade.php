@extends('layouts.app')
@section('pageTitle', 'View Receipt')

@section('css')
<style type="text/css">
    #receipt-area {
        color: #DFDFDF;
    }

    #receipt-area h1 {
        text-align: center;
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
        #page-content {
            width: 70vw;
            min-height: 100%;
        }
    }

</style>
@endsection

@section('body')
    @extends('layouts.nav-auth')
    <div id="wrapper">
        <div id="page-content" class="container">
            <div id="receipt-area">
                <h1>Receipt</h1>
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
                                    <td class="receipt-item-cell">Buff Ranch Crispy Chkn</td>
                                    <td class="receipt-item-cell">$9.29</td>
                                </tr>
                                <tr>
                                    <td class="receipt-item-cell">1</td>
                                    <td class="receipt-item-cell">Mozz Sticks</td>
                                    <td class="receipt-item-cell">$6.49</td>
                                </tr>
                                <tr>
                                    <td class="receipt-item-cell">2</td>
                                    <td class="receipt-item-cell">Red Bull</td>
                                    <td class="receipt-item-cell">$7.98</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="lead" id="receipt-detail-items-total">Total: $23.76</p>
                    </div>
                    <form id="gratuity-area">
                        <div class="form-group">
                            <label for="gratuity">Gratuity %:</label>
                            <input type="text" class="form-control" name="gratuity" value="20" readonly>
                        </div>
                        <div class="form-group">
                            <label id="receipt-total">Your final payment will be: $28.51</label>
                        </div>
                        <input type="button" class="btn btn-primary" value="Confirm">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection