@extends('layouts.app')

@section('pageTitle', 'View Restaurants')

@section('css')
<style type="text/css">
	#heading {
        margin: 1.5rem 0rem;
        color: #FFFFFF;
    }

    .info {
        font-size: 1.5rem;
        margin: 0.5rem 1rem;
        margin-top: auto;
        margin-bottom: auto;
    }

    img {
    	width: 75px;
    	height: 75px;
    	margin: 0.5rem;
    }

    /* Info stored in modal popup */
    #modal-heading {
        font-size: 2rem;
        padding-bottom: 1rem;
        text-align: center;
        font-weight: bold;
    }
    
    .modal-info-section {
        margin-top: 0.2rem auto;
    }

    .modal-info-section h2 {
        font-size: 1.5em;
    }

    .modal-info-section li {
        font-size: 1.3em;
    }

    .modal-section-text {
        font-size: 1.3rem; 
    }
    /* end modal info */

    /* Modal CSS */
    .modal-wrapper {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100vw;
        height: 100vh;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 35vh auto;
        padding: 20px;
        border: 1px solid #888;
        width: 85vw; 
    }

    .close-button {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        text-align: center;
    }

    .close-button:hover,
    .close-button:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .view-menu {
        background: #3e6bbe;
        color: #FFFFFF; 
        text-align: center;
        width: 100%;
    }

    @media screen and (min-width: 500px) {
        .modal-content {
            margin: 15vh auto;
            width: 50vw;
        }
    }

</style>
@endsection

@section('body')
	@extends('layouts.nav-auth')

	<div id="wrapper">
        <div id="page-content" class="container">
            <div class="row">
            	<div class="col-md-6">
            		<h2 id="heading">Participating Restaurants</h2>

                    <!-- Modal for displaying restaurant information -->
                    <div id="info-modal" class="modal-wrapper">
                        <div class="modal-content">
                            <h1 id="modal-heading">Buffalo Wild Wings</h1>
                            <div class="modal-info-section">
                                <h2>About Restaurant</h2>
                                <p class="lead modal-section-text">Lively sports-bar chain dishing up wings & other American pub grub amid lots of large-screen TVs.</p>
                            </div>
                            <div class="modal-info-section">
                                <h2>Hours</h2>
                                <ul>
                                    <li>Sunday - Thursday: 11AM - 12AM</li>
                                    <li>Friday - Saturday: 11AM - 1AM</li>
                                </ul>
                            </div>
                            <div class="modal-info-section">
                                <h2>Contact</h2>
                                <ul>
                                    <li>Phone: (513) 524-2999</li>
                                </ul>
                            </div>
                            <div class="modal-info-section">
                                <h2>Location</h2>
                                <p class="lead section-text">10 E Walnut St, Oxford, OH - 45056</p>
                            </div>
                            <div class="modal-info-section">
                                <a href="https://www.buffalowildwings.com/en/food/" class="view-menu btn text-center">View Menu</a>
                            </div>
                            <span class="close-button" onclick="closeModal()">&times;</span>
                        </div>
                    </div>

            		<div class="card flex-row flex-wrap" onclick="openModal()">
            			<img src="https://www.buffalowildwings.com/globalassets/placeholders/appicon.png" class="rounded-circle float-left">
                        <p class="info text-right align-middle">Buffalo Wild Wings</p>
                    </div><!-- /.card -->
                    
                    <script>
                        var infoModal = document.getElementById("info-modal");

                        // Open the modal
                        function openModal() {
                            infoModal.style.display = "block";
                        }

                        // Close the modal (bet you could figure that out)
                        function closeModal() {
                            infoModal.style.display = "none";
                        }

                        // Close modal w/o hitting close button
                        window.onclick = function(event) {
                            if (event.target == infoModal) {
                                infoModal.style.display = "none";
                            }
                        }
                    </script>

            	</div>
            </div><!-- /.row -->

        </div><!-- /.container -->
    </div><!-- /#main-wrapper -->
@endsection