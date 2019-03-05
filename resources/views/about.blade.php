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

    .page-content h1 {
        color: #FFFFFF;
        text-align: center;
    }

    #main-heading {
        font-size: 3em;
        font-weight: bold;
        margin: 1.5rem 0 1.5rem 0;
        width: 100%;
    }

    .mission-text {
        text-align: justify;
        text-justify: inter-word;
        color: #DFDFDF;
    }

    .team-members {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0 0 1.5rem 0;
    }

    .card {
        width: 90%;
        margin: 0 1.5rem 0 1.5rem;
    }

    .card img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 6em;
        height: 6em;
        border-radius: 50%;
        margin-bottom: 1.2rem;
    }

    .card h2 {
        font-size: 1.8em;
        text-align: center;
    }

    .card h3 {
        font-size: 1.3em;
        text-align: center;
    }

    .card p {
        margin-top: 0.8rem; 
        text-align: justify;
        text-justify: inter-word;
    }

    /* Large screens */
    @media screen and (min-width: 500px) {
        .page-content {
            width: 70vw;
            min-height: 100%;
        }

        .page-content h1 {
            margin-top: 2rem;
        }

        .card {
            width: 22vw;
            margin: 0 1.5rem 0 1.5rem;
        }

        .card img {
            width: 8em;
            height: 8em;
        }
    }
</style>
@endsection

@section('body')
    @extends('layouts.nav-home')
    <div id="wrapper">
        <div class="container page-content">
            <h1 id="main-heading">Checkmate</h1>

            <h1>Our Mission</h1>
            <div class="mission-text">
                <p class="lead">L orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <h1>About</h1>
            <div class="mission-text">
                <p class="lead">Checkmate introduces a smarter check-in process to streamline and enhance the checkout process at sit-down restaurants. This minimizes the effort on the restaurant customer’s end - through our research (below) we’ve identified the major pain points of the restaurant checkout process as paying by card and the waiting time incurred as a result.  Checkmate aims to replace the card payment step with a simple “get up and go” approach, where a user would be free to leave the restaurant as soon as they’ve finished dining.</p>
            </div>

            <h1>The Team</h1>
            <div class="team-members flex-container">
                <div class="card">
                    <div class="card-body">
                        <img src="https://i.pinimg.com/474x/e8/7e/a5/e87ea5f1565b458bb866112909f1a62e--headshot-photography-men-photography.jpg">
                        <h2>Elinam Gbordzoe</h2>
                        <h3>Back-end Developer</h3>
                        <p class="lead">Elinam Gbordzoe is a Back-end Developer for Checkmate. He is graduating from Miami University in May 2019 with a Bachelor in Science in Software Engineering.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="https://i.pinimg.com/474x/e8/7e/a5/e87ea5f1565b458bb866112909f1a62e--headshot-photography-men-photography.jpg">
                        <h2>Pranshu Kumar</h2>
                        <h3>Front-end Developer</h3>
                        <p class="lead"> Pranshu Kumar is a Front-end Developer for Checkmate. He is graduating from Miami University in May 2019 with a Bachelor in Science in Software Engineering.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="https://i.pinimg.com/474x/e8/7e/a5/e87ea5f1565b458bb866112909f1a62e--headshot-photography-men-photography.jpg">
                        <h2>Rachel Price</h2>
                        <h3>Front-end Developer</h3>
                        <p class="lead">Rachel Price is a Front-end Developer and Designer for Checkmate. She is graduating from Miami University in May 2019 with a Bachelor in Science in Software Engineering. </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="https://i.pinimg.com/474x/e8/7e/a5/e87ea5f1565b458bb866112909f1a62e--headshot-photography-men-photography.jpg">
                        <h2>Steven Sitko</h2>
                        <h3>Front-end Developer</h3>
                        <p class="lead">Steven Sitko is a Front-end Developer for Checkmate. He is graduating from Miami University in May 2019 with a Bachelor in Science in Software Engineering. </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection