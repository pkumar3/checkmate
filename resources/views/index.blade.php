@extends('layouts.app')

@section('pageTitle', 'Welcome')

@section('css')
<style type="text/css">

    .page-content {
        background: linear-gradient(#3466ae, #5390f1);
        min-height: 100vh;
    }

    /* Rule for laptop-page col-6 that contains the image */
    #graphic-column {
        display: none;
    }

    /* Rules for mobile image */
    #graphic-mobile {
        width: 100%;
    }

    /* Row div containing image formatted for mobile */
    #graphic-row-mobile {
        margin-top: 1.5rem;
    }

    #heading {
        color: #FFFFFF;
        margin-top: 3rem;
        font-size: 2em;
    }

    #sub-heading {
        width: 100%;
        font-size: 1.3em;
        margin-top: 3rem;
    }

    /* Rules for both headings */
    #text {
        text-align: center;
    }

    #cta {
        text-transform: uppercase;
        text-decoration: none;
        background: #FFFFFF;
        color: #4d81cc;
        padding: 1.5rem;
        width: 100%;
        margin: 5rem 0;
    }

    #cta:hover {
        opacity: 0.85;
        transition: opacity 0.15s ease-in;
    }

    h3 {
        color: #FFFFFF;
    }

    /* Rules for aligning columns correctly between laptop/phone display */
    .div-align-lg {
        display: none;
    }

    .div-align-mobile {
        display: block;
    }

    /* Rules for laptops/wider screens */
    @media screen and (min-width: 500px) {
        #graphic {
            margin-top: 10rem;
            margin-left: -2rem;
            width: 100%;
        }
        
        #graphic-column {
            display: block;
        }

        #graphic-row-mobile {
            display: none;
        }

        #heading {
            margin: 15rem 0 0 1.5rem;
        }

        #sub-heading {
            margin-left: 1.5rem;
            width: 50%;
        }

        #text {
            text-align: left;
        }

        #cta {
            padding: 1.5rem 5.5rem;
            width: 47%;
            margin: 1rem 1rem;
        }

        .div-align-lg {
            display: block;
        }

        .div-align-mobile {
            display: none;
        }
    }

</style>
@endsection

@section('body')
    @extends('layouts.nav-home')
    <div id="main-wrapper">
        <div class="container page-content"> 
                
            <div class="row">
                <div id="graphic-column" class="col-6">
                    <img id="graphic" src="https://d32myzxfxyl12w.cloudfront.net/images/blog_images/b20db22a3937fc97ce1162041495a0339f2c0a5a.png">
                </div>
                <div class="col-3 div-align-mobile"></div>   <!-- This col is only displayed on mobile in order to center-align the headings/button -->
                <div id="text" class="col-6">
                    <h1 id="heading" class="">Checkmate</h1>
                    <h3 id="sub-heading">No more waiting for the check when you're done dining</h3>
                </div>
            </div><!-- /.row -->

            <div class="row" id="graphic-row-mobile">
                <div class="col-2"></div>
                <div class="col-8">
                    <img id="graphic-mobile" src="https://d32myzxfxyl12w.cloudfront.net/images/blog_images/b20db22a3937fc97ce1162041495a0339f2c0a5a.png">
                </div>
            </div>

            <div class="row">
                <div class="col-6 div-align-lg"></div>   <!-- This col is displayed on large screens -->
                <div class="col-3 div-align-mobile"></div>
                <div class="col-6">
                    <a class="btn" id="cta" href="/register">Sign Up</a>
                </div>
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /#main-wrapper -->
@endsection