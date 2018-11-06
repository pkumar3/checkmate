@extends('layouts.app')

@section('css')
<style type="text/css">

    #main-wrapper {
        background: linear-gradient(#3466ae, #5390f1);
        height: 100%;
    }

    #heading {
        color: #FFFFFF;
        margin-top: 15rem;
    }

    #cta {
        text-transform: uppercase;
        text-decoration: none;
        background: #FFFFFF;
        color: #4d81cc;
        padding: 1.5rem 5.5rem;
        margin: 1rem 1rem;
    }

    #cta:hover {
        opacity: 0.85;
        transition: opacity 0.15s ease-in;
    }

    h3 {
        color: #FFFFFF;
    }

    #graphic {
        margin-top: 10rem;
        margin-left: -2rem;
        width: 100%;
    }


</style>
@stop

@section('body')
    @extends('layouts.nav-home')
    <div id="main-wrapper">
        <div class="container">
                
            <div class="row">
                <div class="col-6">
                    <img id="graphic" src="https://d32myzxfxyl12w.cloudfront.net/images/blog_images/b20db22a3937fc97ce1162041495a0339f2c0a5a.png">
                </div>
                <div class="col-6">
                    <h1 id="heading" class="">Checkmate</h1>
                    <h3>No more waiting for the check</h3>
                    <h3>when you're done dining</h3>
                </div>
            </div><!-- /.row -->

            <div class="row">
                <div class="col-6">
                    
                </div>
                <div class="col-offset-6">
                    <a class="btn" id="cta" href="">Sign Up</a>
                </div>
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /#main-wrapper -->
@stop