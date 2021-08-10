@extends('master')
@section('content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(client/images/about1.jpg);">
        <div class="overlay"></div>
        <div class="fh5co-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>About Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2 style="font-family: arial">About Us</h2>
            <p><b>"Wedding.pk"</b> is event management company based in Lahore and has network in many popular cities of pakistan.Event management more than skill.
            Events create real emotional and physical experience for everyone . We not only organize extravagant events,we organize memorable moments for you.
            </p>
        </div>
    </div>

    <div class="row animate-box">
        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2 style="font-family: arial">Our Team</h2>
            <p>Our team has an inimitable dedications that will bring you complete satisfactions and knowledge that you are in the safest pair of hands believable! We put our heart & soul into planning each and every aspect of an event as if it were our own
            </p>
        </div>
    </div>

    <!--------------------------------Team Gallery--------------------->
    <div id="fh5co-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                    <h2>Team Members</h2>

                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-12">
                    <ul id="fh5co-gallery-list">

                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-1.jpg); ">
                            <a href="images/gallery-1.jpg">
                                <div class="case-studies-summary">
                                    <span>CEO</span>
                                    <h2>Muhammad Ali</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-2.jpg); ">
                            <a href="#" class="color-2">
                                <div class="case-studies-summary">
                                    <span>Manager</span>
                                    <h2>Bilal Khan</h2>
                                </div>
                            </a>
                        </li>


                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-3.jpg); ">
                            <a href="#" class="color-3">
                                <div class="case-studies-summary">
                                    <span>Staff supervisor</span>
                                    <h2>Adnan Ali</h2>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
