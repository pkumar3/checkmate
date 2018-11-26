@extends('layouts.app')
@section('pageTitle', 'About')

@section('css')
<style type="text/css">
    #wrapper {
        background: linear-gradient(#3466ae, #5390f1);
    }

    .page-content {
        width: 80vw;
        padding-top: 1.5rem;
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
    @extends('layouts.nav-home')
    <div id="wrapper">
        <div class="container page-content">

        </div>
    </div>
@endsection