<!DOCTYPE html>
<html lang="en">
  <!--divinectorweb.com-->
  <head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Welcome to Yale School of Art</title>
    <link rel="shortcut icon" href="{{ asset('img/Yale_School_of_Art 2.png') }}" type="image/x-icon">
    <!-- All CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body class="bg-yale">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
      <div class="container">
        <img
          src="img/Yale_School_of_Art 2.png"
          height="30px"
          width="30px"
        />...<a class="navbar-brand" href="/"
          ><span class="text-warning">YALE </span>School of art</a
        >
        <button
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler"
          data-bs-target="#navbarSupportedContent"
          data-bs-toggle="collapse"
          type="button"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/apply">Apply</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/publications">Publications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/public-events">Public Events</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--starter-->

    <!--end-->

    <div
      class="carousel slide"
      data-bs-ride="carousel"
      id="carouselExampleIndicators"
    >
      <div class="carousel-indicators">
        <button
          aria-label="Slide 1"
          class="active"
          data-bs-slide-to="0"
          data-bs-target="#carouselExampleIndicators"
          type="button"
        ></button>
        <button
          aria-label="Slide 2"
          data-bs-slide-to="1"
          data-bs-target="#carouselExampleIndicators"
          type="button"
        ></button>
        <button
          aria-label="Slide 3"
          data-bs-slide-to="2"
          data-bs-target="#carouselExampleIndicators"
          type="button"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img alt="..." class="d-block w-100" src="img/yele.jpg" />
          <div class="carousel-caption">
            <h5><b>Welcome! To Yale School of Arts</b></h5>
            <p>
              Step into the captivating realm of creativity at Yale School of Arts, where boundless imagination meets unrivaled excellence
            </p>
          
          </div>
        </div>
        <div class="carousel-item">
          <img alt="..." class="d-block w-100" src="img/im2.jpg" />
          <div class="carousel-caption">
            <h5><b>Always Dedicated</b></h5>
            <p>
              Embrace the ethos of unwavering dedication at Yale School of Arts, where commitment fuels every artistic endeavor
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img alt="..." class="d-block w-100" src="img/im3.jpg" />
          <div class="carousel-caption">
            <h5><b>True Construction</b></h5>
            <p>
              Discover the essence of authentic craftsmanship at Yale School of Arts, where every stroke, every note, and every word is a testament to true construction
            </p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        data-bs-slide="prev"
        data-bs-target="#carouselExampleIndicators"
        type="button"
      >
        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        data-bs-slide="next"
        data-bs-target="#carouselExampleIndicators"
        type="button"
      >
        <span aria-hidden="true" class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- about section starts -->
    <section class="about section-padding" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img alt="" class="img-fluid" src="img/Yale_School_of_Art 2.png" width="200px" height="200px" />
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <h2>About the site</h2>
              <p>
                The Yale School of Art is a graduate school that confers MFAs in
                Graphic Design, Painting/Printmaking, Photography, and
                Sculpture; and offers undergraduate-level art courses to Yale
                College students. Our website exists as an ongoing collaborative
                experiment in digital publishing and information sharing. It
                functions as a wiki—all members of the School of Art community
                have the ability to add new, and edit most existing content.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about section Ends -->
    

<!-- bullet -->
<section class="portfolio section-padding bulet-padding" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card text-light text-center bg-white pb-2">
          <div class="card-body text-dark">
            <div class="img-area mb-4"><img alt="" class="img-fluid" src="img/project-3.jpg"></div>
            <h2 class="card-title"><img
              src="img/bulets.png"
              height="100px"
              width="100px"
            />   <b>COMMUNITY BULLETIN BOARD</b></h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <b>From our friends at the Yale Center for Environmental Justice.
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">The Yale Center for Environmental Justice is in the process of planning our fourth annual Global Environmental Justice Conference, with this year focusing on the theme of “Environmental Joy.” The conference aims to explore the ways in which environmental and climate justice and the communities engaged in that work generate joy. Guided by the notion that the ultimate goal of most environmental and climate work is to alleviate suffering and increase wellbeing, Environmental Joy will explore and celebrate the diverse ways that environmental justice achieves this goal.
                    One facet of the conference programming we hope to organize is a juried art show soliciting works from artists around the world on the theme of Environmental Joy to be showcased in an exhibition during the conference. We are currently seeking any interested students or faculty who would be interested in supporting the planning and execution of this call for art. If you’re interested in learning more about the opportunity, please contact Julia Simon at <a href="https://winterlab.yale.edu/team/julia-simon">julia.simon@yale.edu.</a></div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <b> Faculty/Alumni: Post your art Apprenticeship/Internship
                  opportunities for undergraduates</b>
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">The Yale Arts Apprenticeship Program is an initiative that connects Yale undergraduates, particularly those on financial aid, with professional arts practitioners of any discipline. As an option within Yale’s Summer Experience Award (SEA) funding model, the Arts Apprenticeship must fulfill the same basic requirements. Additional details, as well as those specific to the Arts Apprenticeship are included below. Yale faculty, alumni, or other arts practitioners interested in featuring positions through the program should contact Yale’s Creative Careers advisor. Which Opportunities are Eligible? Must be at least 30 hours/week, for at least 8-weeks over the summer months. Those 8-weeks do not have to be continuous if the mentoring Arts Practitioner agrees on a different schedule. The time commitment need not all be in direct contact with the Arts Practitioner. Independent projects, tasks, research, etc. can comprise much of the experience, as long as the Arts Practitioner is checking in regularly with the student to provide oversight and career-based context. The opportunity cannot be with a for-profit.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                   <b>A message from Communications</b>
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">All members of the SoA community are invited to edit the majority of the wiki however they like, but we ask that any non-curricular projects or initiatives that you would like to share be added to this section of the homepage.
                    Students are also invited to reach out to Assistant Director of Communications <a href="https://www.linkedin.com/in/lindseyannemancini">Lindsey Mancini</a> if they would like additional support from the School in bringing attention to their work and endeavors</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- portfolio ends -->



    
    <!-- footer starts -->
    <footer class="bg-dark p-2 text-center">
      <div class="container">
        <div class="container">
          <img
            src="img/Yale_School_of_Art 2.png"
            height="30px"
            width="30px"
          />...<span class="text-white">YALE SCHOOL OF ART Yale School of Art© 2024 <br> 1156 Chapel Street, POB 208339 <br> New Haven, Connecticut, 06520-8339</span>
          <hr>
        <p class="text-white">All Right Reserved By @website Name</p>
      </div>
    </footer>
    <!-- footer ends -->

    <!-- All Js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  </body>
</html>
