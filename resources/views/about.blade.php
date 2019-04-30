@extends('layouts.app')
@section('pageTitle', 'About')

@section('css')
<style type="text/css">
    #page-content h1 {
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
        color: #DFDFDF;
        text-align: justify;
        text-justify: inter-word;
    }

    .team-members {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0 0 1.5rem 0;
    }

    .card {
        width: 100%;
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
    }

    /* Large screens */
    @media screen and (min-width: 500px) {
        #page-content h1 {
            margin-top: 2rem;
        }

        .card {
            width: 60vw;
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
        <div id="page-content" class="container">
            <h1 id="main-heading">Checkmate</h1>

            <h1>Our Mission</h1>
            <div class="mission-text">
                <p class="lead">To eliminate the checkout process at sit-down restaurants </p>
            </div>

            <h1>About</h1>
            <div class="mission-text">
                <p class="lead">Checkmate introduces a smarter check-in process to streamline and enhance the checkout process at sit-down restaurants. This minimizes the effort on the restaurant customer’s end - through our research (below) we’ve identified the major pain points of the restaurant checkout process as paying by card and the waiting time incurred as a result.  Checkmate aims to replace the card payment step with a simple “get up and go” approach, where a user would be free to leave the restaurant as soon as they’ve finished dining.</p>
            </div>

            <h1>The Team</h1>
            <div class="team-members flex-container">
                <div class="card">
                    <div class="card-body">
                        <img src="http://ceclnx01.cec.miamioh.edu/~sitkosm/expoPics/eli.PNG">
                        <h2>Elinam Gbordzoe</h2>
                        <h3>Back-end Developer</h3>
                        <p class="lead">Elinam Gbordzoe is a Back-end Developer for Checkmate. He is graduating from Miami University in May 2019 with a Bachelor in Science in Software Engineering.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="http://ceclnx01.cec.miamioh.edu/~sitkosm/expoPics/pranshu.PNG">
                        <h2>Pranshu Kumar</h2>
                        <h3>Front-end Developer</h3>
                        <p class="lead"> Pranshu Kumar is a Front-end Developer for Checkmate. He is graduating from Miami University in May 2019 with a Bachelor in Science in Software Engineering.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <img src="http://ceclnx01.cec.miamioh.edu/~sitkosm/expoPics/rachel.PNG">
                        <h2>Rachel Price</h2>
                        <h3>Front-end Developer</h3>
                        <p class="lead">Rachel Price is a Front-end Developer and Designer for Checkmate. She is graduating from Miami University in May 2019 with a Bachelor in Science in Software Engineering. </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <!-- <img src="{{URL::asset('storage/steve.PNG')}}"> -->
                        <img src="http://ceclnx01.cec.miamioh.edu/~sitkosm/expoPics/steve.PNG">
                        <h2>Steven Sitko</h2>
                        <h3>Front-end Developer</h3>
                        <p class="lead">Steven Sitko is a Front-end Developer for Checkmate. He is graduating from Miami University in May 2019 with a Bachelor in Science in Software Engineering. </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection