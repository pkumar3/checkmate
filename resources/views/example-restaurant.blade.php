@extends('layouts.app')

@section('pageTitle', 'Example Restaurant')

@section('css')
<style type="text/css">
    #wrapper {
        background: linear-gradient(#3466ae, #5390f1);
    }

    .page-content {
        width: 80vw;
        padding-top: 1.5rem;
        min-height: 100%;
    }

    #main-heading {
        font-size: 4em;
        font-weight: bold;
        margin: 1.5rem 0 1.5rem 0;
        width: 100%;
        color: #FFFFFF;
    }

    .img-container {
        width: 70vw;
        height: 20vh;
        margin-bottom: 1rem;
        overflow: hidden;
    }

    .img-banner {
        display: block;
        width: 100%;
        height: auto;
    }

    .info-section {
        margin-top: 0.8rem;
        padding-bottom: 0.8rem;
    }

    .info-section h2 {
        color: #FFFFFF;
        font-size: 2em;
    }

    .info-section li {
        color: #DFDFDF;
        font-size: 1.3em;
    }

    .section-text {
        color: #DFDFDF;
        font-size: 1.3rem;
    }

    @media screen and (min-width: 500px) {
        .page-content {
            width: 70vw;
            min-height: 100%;
        }

        .img-container {
            width: 50vw;
            height: 30vh;
            margin-bottom: 1.5rem;
            overflow: hidden;
        }

        #main-heading {
            font-size: 5em;
        }
    }
</style>
@endsection

@section('body')
    @extends('layouts.nav-home')
    <div id="wrapper">
        <div class="container page-content">
            <h1 id="main-heading">{restaurant-name}</h1>
            <div class="img-container">
                <img class="img-banner" src="http://eaglerestore.com/wp-content/uploads/2017/10/Bohinj-ECO-Hotel-Restaurant-1.jpg">
            </div>
            <div class="info-section">
                <h2>About {restaurant-name}</h2>
                <p class="lead section-text">{description}</p>
            </div>
            <div class="info-section">
                <h2>Hours</h2>
                <ul>
                    <li>Monday - Friday: {opening_hours}</li>
                    <li>Saturday: {opening_hours}</li>
                    <li>Sunday: {opening_hours}</li>
                </ul>
            </div>
            <div class="info-section">
                <h2>Contact</h2>
                <ul>
                    <li>Phone: {phone}</li>
                    <li>Email:  {email}</li>
                </ul>
            </div>
            <div class="info-section">
                <h2>Location</h2>
                <p class="lead section-text">{restaurant_address}<br>{city}, {state}, {zip_code}</p>
            </div>
        </div>
    </div>
@endsection