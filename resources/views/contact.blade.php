@extends('layouts.app')
@section('pageTitle', 'Contact')

@section('css')
<style type="text/css">
    #wrapper {
        background: linear-gradient(#3466ae, #5390f1);
    }

    .page-content {
        width: 80vw;
        min-height: 100%;
        padding-top: 1.5rem;
    }

    #content-stack {
    }

    #header {
        text-align: center;
    }

    #main-heading {
        font-size: 3em;
        font-weight: bold;
        margin: 1.5rem 0 1.5rem 0;
        width: 100%;
        color: #FFFFFF;
    }

    #info-area {
        display: block;
    }

    #info-area h1 {
        color: #FFFFFF;
    }

    #info-area p {
        color: #DFDFDF;
    }

    #info-area li {
        color: #DFDFDF;
        font-size: 1.1rem;
    }

    #form-area {
        display: block;
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-bottom: 1.5rem;
    }

    .form-label {
        font-size: 1.5rem;
        text-align: center;
        color: #DFDFDF;
    }

    /* Large screens */
    @media screen and (min-width: 500px) {
        .page-content {
            width: 70vw;
            min-height: 100%;
        }

        .heading-text {
            text-align: left;
            color: #DFDFDF;
        }

        #info-area {
            text-align: left;
            width: 100%;
        }

        #form-area {
            width: 100%;
        }

        .card {
            width: 65%;
            margin-right: auto;
            margin-left: auto;
        }

    }
</style>
@endsection

@section('body')
    @extends('layouts.nav-home')
    <div id="wrapper">
        <div class="container page-content">
            <div id="header">
                <h1 id="main-heading">Checkmate<h1>
            </div>
            <div id="content-stack">
                <div id="info-area">
                    <h1>Contact Us</h1>
                    <p class="lead">The team at Checkmate strives to deliver a streamlined and efficient payment experience.  If you
                    encounter an issue our would like to provide feedback, please feel free to use this page to contact us.</p>
                    <p class="lead">Send us your thoughts!  We would love to hear:<p>
                    <ul>
                        <li>Technical issues you've encountered</li>
                        <li>Difficulties in payment processes</li>
                        <li>Unresponsive or malfunctioning web pages</li>
                        <li>Positive or critical feedback</li>
                        <li>... and anything else you'd like to say!</li>
                    </ul>
                    <br>
                </div>
                <div id="form-area">
                    <p class="lead form-label">Please fill out the following form to submit your feedback.</p>
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" name="firstName">
                                </div>
                                <div class="form-group">
                                    <label for="name">Last Name</label>
                                    <input type="text" class="form-control" name="lastName">
                                </div>
                                <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection