<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Arpita Saha</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
         Google fonts-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
         Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background-image: url(<?php echo $main->bc_img; ?>)";>
        <div class="container">
            <div class="masthead-subheading">{{ $main->sub_title }}</div>
            <div class="masthead-heading text-uppercase">{{ $main->title }}</div>
        </div>
    </header>

    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Welcome</h2>
                <h3 class="section-subheading text-muted">Arpita Saha</h3>
            </div>
            <div class="container">
                <div class="row">
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInRight">
                    <h1 class="fw-light">Arpita saha</h1>
                    <h5 class="fg-theme mb-3">Web Developer</h5>
                    <p class="text-muted">To become a successful expert in the field of Information Technology
                        by channelizing my technical knowledge and skills to ensure personal and professional
                        growth and to contribute to the prosperity of the organization.</p>
                    <ul class="theme-list">
                        <li><b>From:</b> Bangladesh</li>
                        <li><b>Lives In:</b> Dhaka,Bangladesh</li>
                        <li><b>Age:</b> 24</li>
                        <li><b>Gender:</b> Female</li>
                    </ul>
                </div>
            </div>
        </div>
        


            <!-- Education-->
            <section class="page-section" id="education">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Education</h2>
                    </div>
                    <ul class="timeline">
                        @if (count($educations) > 0)
                            @foreach ($educations as $education)
                                <li class="timeline-inverted">
                                    <div class="timeline-image"><img style="width: 180px; height: 160px";
                                            class="rounded-circle" src="assets/img/about/5.jpg" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>"<?php echo $education->title1; ?></h4>
                                            <h4 class="subheading">"<?php echo $education->title2; ?></h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted">"<?php echo $education->description; ?> </p>
                                        </div>
                                    </div>

                                </li>
                            @endforeach
                        @endif
                </div>
        </div>


        {{-- 
                    <li>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2016</h4>
                                <h4 class="subheading">Feni Govt. Girls High School</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">SECONDARY SCHOOL CERTiFiCATE </p></div>
                            <div class="timeline-body"><p class="text-muted">Feni, Bangladesh </p></div>
                        </div>
                    </li> --}}
        {{-- <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/6.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2016‑2018</h4>
                                <h4 class="subheading">Feni Govt. College</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">HiGHER SECONDARY SCHOOL CERTiFiCATE!</p></div>
                            <div class="timeline-body"><p class="text-muted">Feni, Bangladesh!</p></div>
                            
                        </div>
                    </li> --}}
        {{-- <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2019‑2023</h4>
                                <h4 class="subheading">Independent University Bangladesh (IUB)</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">BACHELOR OF SCiENCE iN COMPUTER SCiENCE AND ENGiNEERiNG!</p></div>
                            <div class="timeline-body"><p class="text-muted">Dhaka,Bangladesh!</p></div>
                        </div>
                    </li> --}}

        <!-- Skills -->
        <section class="page-section bg-light" id="skills">
            <div class="container mt-5">
                <h1 class="text-center fg-dark wow fadeInUp">My Skills</h1>
                <div class="row py-3">
                    <div class="col-md-6">
                        <h4 class="wow fadeInUp">Coding skills</h4>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">JavaScript</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">70%
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">PHP</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">80%
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">HTML + CSS</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">100%
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">Phyton</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">90%
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="wow fadeInUp">Design Skills</h4>
                        <div class="progress-wrapper wow fadeInUp">
                        </div>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">Web Design</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 99%;" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">99%
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrapper wow fadeInUp">
                            <span class="caption">Logo Design</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">79%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> 
        </section>
        <!-- End skills -->


            <!-- <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>
     
        Contact-->
            <section class="page-section" id="contact">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Contact Us</h2>
                    </div>
                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row align-items-stretch mb-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" type="text"
                                        placeholder="Your Name *" required="required"
                                        data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" type="email"
                                        placeholder="Your Email *" required="required"
                                        data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group mb-md-0">
                                    <input class="form-control" id="phone" name="phone" type="tel"
                                        placeholder="Your Phone *" required="required"
                                        data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-textarea mb-md-0">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required="required"
                                        data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div id="success">@include('alert.messages')</div>
                            <button class="btn btn-primary btn-xl text-uppercase" type="submit">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Footer-->
            <footer class="footer py-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-lg-left">Copyright © Learning Norms 2021</div>
                        <div class="col-lg-4 my-3 my-lg-0">
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="col-lg-4 text-lg-right">
                            <a class="mr-3" href="#!">Privacy Policy</a>
                            <a href="#!">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Portfolio Modals-->
            <!-- Portfolio item 1 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet
                                            consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg"
                                            alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor
                                            sit amet, consectetur adipisicing elit. Est blanditiis
                                            dolorem culpa incidunt minus dignissimos deserunt
                                            repellat aperiam quasi sunt officia expedita beatae
                                            cupiditate, maiores repudiandae, nostrum, reiciendis
                                            facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Threads
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Illustration
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 2 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet
                                            consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg"
                                            alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor
                                            sit amet, consectetur adipisicing elit. Est blanditiis
                                            dolorem culpa incidunt minus dignissimos deserunt
                                            repellat aperiam quasi sunt officia expedita beatae
                                            cupiditate, maiores repudiandae, nostrum, reiciendis
                                            facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Explore
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Graphic Design
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 3 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet
                                            consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg"
                                            alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor
                                            sit amet, consectetur adipisicing elit. Est blanditiis
                                            dolorem culpa incidunt minus dignissimos deserunt
                                            repellat aperiam quasi sunt officia expedita beatae
                                            cupiditate, maiores repudiandae, nostrum, reiciendis
                                            facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Finish
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Identity
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 4 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet
                                            consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg"
                                            alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor
                                            sit amet, consectetur adipisicing elit. Est blanditiis
                                            dolorem culpa incidunt minus dignissimos deserunt
                                            repellat aperiam quasi sunt officia expedita beatae
                                            cupiditate, maiores repudiandae, nostrum, reiciendis
                                            facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Lines
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Branding
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 5 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet
                                            consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg"
                                            alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor
                                            sit amet, consectetur adipisicing elit. Est blanditiis
                                            dolorem culpa incidunt minus dignissimos deserunt
                                            repellat aperiam quasi sunt officia expedita beatae
                                            cupiditate, maiores repudiandae, nostrum, reiciendis
                                            facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Southwest
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Website Design
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio item 6 modal popup-->
            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <h2 class="text-uppercase">Project Name</h2>
                                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet
                                            consectetur.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg"
                                            alt="..." />
                                        <p>Use this area to describe your project. Lorem ipsum dolor
                                            sit amet, consectetur adipisicing elit. Est blanditiis
                                            dolorem culpa incidunt minus dignissimos deserunt
                                            repellat aperiam quasi sunt officia expedita beatae
                                            cupiditate, maiores repudiandae, nostrum, reiciendis
                                            facere nemo!</p>
                                        <ul class="list-inline">
                                            <li>
                                                <strong>Client:</strong>
                                                Window
                                            </li>
                                            <li>
                                                <strong>Category:</strong>
                                                Photography
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
                                            <i class="fas fa-xmark me-1"></i>
                                            Close Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="{{asset('scripts.js'))"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
