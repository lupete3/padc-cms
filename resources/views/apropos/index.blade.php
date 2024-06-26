@extends('layouts.client')

@section('content')
  <div class="page-banner home-banner mb-5">
    <div class="slider-wrapper">
      <div class="owl-carousel hero-carousel">
        <div class="hero-carousel-item">
          <img src="../assets/img/bg_image_1.jpg" alt="">
          <div class="img-caption">
            <div class="subhead">We're design studio believe in ideas</div>
            <h1 class="mb-4">Creative Design</h1>
            <a href="#services" class="btn btn-outline-light">Get Started</a>
          </div>
        </div>
        <div class="hero-carousel-item">
          <img src="../assets/img/bg_image_2.jpg" alt="">
          <div class="img-caption">
            <h1 class="mb-4">We combine Design, Thinking, and Technical</h1>
            <a href="#services" class="btn btn-outline-light">Get Started</a>
            <a href="#services" class="btn btn-primary">See Pricing</a>
          </div>
        </div>
        <div class="hero-carousel-item">
          <img src="../assets/img/bg_image_3.jpg" alt="">
          <div class="img-caption">
            <div class="subhead">Easy way to build perfect website</div>
            <h1 class="mb-4">Beautify handcrafted templates for your website</h1>
            <a href="#services" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div> <!-- .slider-wrapper -->
  </div> <!-- .page-banner -->
    <main>
        <div class="container">
          @foreach ($viewData['apropos'] as $apropo)
            <div class="row align-items-center">
              <div class="col-lg-6 py-3">
                <div class="subhead">Apropo</div>
                <h2 class="title-section">{{ $apropo->title }}</h2>
    
                @php $description = Str::limit($apropo->apropos, 1000); echo $description @endphp
    
                <p><a href="about.html" class="btn btn-primary mt-4">En savoir plus</a></p>
              </div>
              <div class="col-lg-6 py-3">
                <div class="about-img">
                  <img src="{{ asset('image-apropo/'.$apropo->image) }}" alt="">
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div> <!-- .page-section -->
    
        <div class="page-section">
          <div class="container">
            <div class="text-center">
              <div class="subhead">Our Services</div>
              <h2 class="title-section">See what can we do for your Projects</h2>
            </div>
    
            <div class="row justify-content-center">
              <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                <div class="text-center">
                  <div class="img-fluid mb-4">
                    <img src="../assets/img/icons/web_development.svg" alt="">
                  </div>
                  <h5>Web Development</h5>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                <div class="text-center">
                  <div class="img-fluid mb-4">
                    <img src="../assets/img/icons/graphics_design.svg" alt="">
                  </div>
                  <h5>Graphics Design</h5>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                <div class="text-center">
                  <div class="img-fluid mb-4">
                    <img src="../assets/img/icons/seo_and_marketing.svg" alt="">
                  </div>
                  <h5>SEO & Marketing</h5>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                <div class="text-center">
                  <div class="img-fluid mb-4">
                    <img src="../assets/img/icons/customer_services.svg" alt="">
                  </div>
                  <h5>Customer Services</h5>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                <div class="text-center">
                  <div class="img-fluid mb-4">
                    <img src="../assets/img/icons/app_development.svg" alt="">
                  </div>
                  <h5>App Development</h5>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                <div class="text-center">
                  <div class="img-fluid mb-4">
                    <img src="../assets/img/icons/ui_ux_design.svg" alt="">
                  </div>
                  <h5>UI/UX Design</h5>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                <div class="text-center">
                  <div class="img-fluid mb-4">
                    <img src="../assets/img/icons/product_design.svg" alt="">
                  </div>
                  <h5>Product Design</h5>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                <div class="text-center">
                  <div class="img-fluid mb-4">
                    <img src="../assets/img/icons/data_analyst.svg" alt="">
                  </div>
                  <h5>Data Analyst</h5>
                </div>
              </div>
    
            </div>
          </div> <!-- .container -->
        </div> <!-- .page-section -->
    
        <div class="page-section">
          <div class="container">
            <div class="text-center">
              <div class="subhead">Our Teams</div>
              <h2 class="title-section">The Expert Team on ReveTive</h2>
            </div>
    
            <div class="owl-carousel team-carousel mt-5">
              <div class="team-wrap">
                <div class="team-profile">
                  <img src="../assets/img/teams/team_1.jpg" alt="">
                </div>
                <div class="team-content">
                  <h5>Walter White</h5>
                  <div class="text-sm fg-grey">Chief Executive Officer</div>
    
                  <div class="social-button">
                    <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-mail"></span></a>
                  </div>
                </div>
              </div>
    
              <div class="team-wrap">
                <div class="team-profile">
                  <img src="../assets/img/teams/team_2.jpg" alt="">
                </div>
                <div class="team-content">
                  <h5>Sarah Johanson</h5>
                  <div class="text-sm fg-grey">Chief Technology Officer</div>
    
                  <div class="social-button">
                    <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-mail"></span></a>
                  </div>
                </div>
              </div>
    
              <div class="team-wrap">
                <div class="team-profile">
                  <img src="../assets/img/teams/team_3.jpg" alt="">
                </div>
                <div class="team-content">
                  <h5>Anna Anderson</h5>
                  <div class="text-sm fg-grey">Product Manager</div>
    
                  <div class="social-button">
                    <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-mail"></span></a>
                  </div>
                </div>
              </div>
    
            </div>
          </div> <!-- .container -->
        </div> <!-- .page-section -->
    
        <div class="page-section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 py-3">
                <div class="subhead">Portfolio</div>
                <h2 class="title-section">Our Latest Projects</h2>
              </div>
              <div class="col-md-6 py-3 text-md-right">
                <a href="portfolio.html" class="btn btn-outline-primary">Browse Projects <span class="mai-arrow-forward ml-2"></span></a>
              </div>
            </div>
    
            <div class="row mt-3">
              <div class="col-lg-4 py-3">
                <div class="portfolio">
                  <a href="../assets/img/portfolio/work-1.jpg" data-fancybox="portfolio">
                    <img src="../assets/img/portfolio/work-1.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 py-3">
                <div class="portfolio">
                  <a href="../assets/img/portfolio/work-2.jpg" data-fancybox="portfolio">
                    <img src="../assets/img/portfolio/work-2.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 py-3">
                <div class="portfolio">
                  <a href="../assets/img/portfolio/work-3.jpg" data-fancybox="portfolio">
                    <img src="../assets/img/portfolio/work-3.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 py-3">
                <div class="portfolio">
                  <a href="../assets/img/portfolio/work-4.jpg" data-fancybox="portfolio">
                    <img src="../assets/img/portfolio/work-4.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 py-3">
                <div class="portfolio">
                  <a href="../assets/img/portfolio/work-5.jpg" data-fancybox="portfolio">
                    <img src="../assets/img/portfolio/work-5.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 py-3">
                <div class="portfolio">
                  <a href="../assets/img/portfolio/work-6.jpg" data-fancybox="portfolio">
                    <img src="../assets/img/portfolio/work-6.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div> <!-- .container -->
        </div> <!-- .page-section -->
    
        <!-- Testimonials -->
        <div class="page-section">
          <div class="container">
            <div class="owl-carousel testimonial-carousel">
              <div class="card-testimonial">
                <div class="content">
                  The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                </div>
                <div class="author">
                  <div class="avatar">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <div class="d-inline-block ml-2">
                    <div class="author-name">Sam Watson</div>
                    <div class="author-info">CEO - Mosh Elite Ltd.</div>
                  </div>
                </div>
              </div>
    
              <div class="card-testimonial">
                <div class="content">
                  The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                </div>
                <div class="author">
                  <div class="avatar">
                    <img src="../assets/img/person/person_2.jpg" alt="">
                  </div>
                  <div class="d-inline-block ml-2">
                    <div class="author-name">Edinson Alfa</div>
                    <div class="author-info">CEO - Mosh Elite Ltd.</div>
                  </div>
                </div>
              </div>
    
              <div class="card-testimonial">
                <div class="content">
                  The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                </div>
                <div class="author">
                  <div class="avatar">
                    <img src="../assets/img/person/person_3.jpg" alt="">
                  </div>
                  <div class="d-inline-block ml-2">
                    <div class="author-name">May Halloway</div>
                    <div class="author-info">CEO - Mosh Elite Ltd.</div>
                  </div>
                </div>
              </div>
    
              <div class="card-testimonial">
                <div class="content">
                  The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                </div>
                <div class="author">
                  <div class="avatar">
                    <img src="../assets/img/person/person_1.jpg" alt="">
                  </div>
                  <div class="d-inline-block ml-2">
                    <div class="author-name">Sam Watson</div>
                    <div class="author-info">CEO - Mosh Elite Ltd.</div>
                  </div>
                </div>
              </div>
    
              <div class="card-testimonial">
                <div class="content">
                  The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                </div>
                <div class="author">
                  <div class="avatar">
                    <img src="../assets/img/person/person_2.jpg" alt="">
                  </div>
                  <div class="d-inline-block ml-2">
                    <div class="author-name">Edinson Alfa</div>
                    <div class="author-info">CEO - Mosh Elite Ltd.</div>
                  </div>
                </div>
              </div>
    
              <div class="card-testimonial">
                <div class="content">
                  The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph
                </div>
                <div class="author">
                  <div class="avatar">
                    <img src="../assets/img/person/person_3.jpg" alt="">
                  </div>
                  <div class="d-inline-block ml-2">
                    <div class="author-name">May Halloway</div>
                    <div class="author-info">CEO - Mosh Elite Ltd.</div>
                  </div>
                </div>
              </div>
    
            </div> <!-- .row -->
          </div> <!-- .container -->
        </div> <!-- .page-section -->
    
        <div class="page-section">
          <div class="container">
            <div class="text-center">
              <div class="subhead">Nouvelles</div>
              <h2 class="title-section">Découvrez nos publications</h2>
            </div>
    
            <div class="row my-5 card-blog-row">
                @foreach ($viewData['blogs'] as $blog)

                    <div class="col-lg-3 py-4">
                      <div class="card-blog" >
                        <div class="header">
                          <img src="{{asset('image-blog/'.$blog->image)}}" class="card-img-top" alt="...">
                        </div>
                        <div class="body">
                          <div class="post-title"><a href="{{ route('blog.show', $blog->slug) }}">{{$blog->title}}</a></div>
                          {{-- <div class="post-excerpt"> {!! Str::limit($blog->description, 1000) !!} </div> --}}
                        </div>
                        <div class="footer">
                          <div class="entry-footer">
                            <a href="#" class="post-date">{{ date('d m Y ', strtotime($blog->created_at)) }}</a>
                          </div>
                          <a href="{{ route('blog.show', $blog->slug) }}" class="float-right">Lire la suite <span class="mai-chevron-forward text-sm "></span></a>
                        </div>
                      </div>

                    </div>
                @endforeach

            </div>
    
            <div class="text-center">
              <a href="{{ route('blogs.all') }}" class="btn btn-primary">Voir plus</a>
            </div>
    
          </div> <!-- .container -->
        </div> <!-- .page-section -->
    
        <div class="page-section">
          <div class="container">
            <div class="text-center">
              <h2 class="title-section mb-3">Stay in touch</h2>
              <p>Just say hello or drop us a line. You can manualy send us email on <a href="mailto:example@mail.com">example@mail.com</a></p>
            </div>
            <div class="row justify-content-center mt-5">
              <div class="col-lg-8">
                <form action="#" class="form-contact">
                  <div class="row">
                    <div class="col-sm-6 py-2">
                      <label for="name" class="fg-grey">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter name..">
                    </div>
                    <div class="col-sm-6 py-2">
                      <label for="email" class="fg-grey">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email address..">
                    </div>
                    <div class="col-12 py-2">
                      <label for="subject" class="fg-grey">Subject</label>
                      <input type="text" class="form-control" id="subject" placeholder="Subject..">
                    </div>
                    <div class="col-12 py-2">
                      <label for="message" class="fg-grey">Message</label>
                      <textarea id="message" rows="8" class="form-control" placeholder="Enter message.."></textarea>
                    </div>
                    <div class="col-12 mt-3">
                      <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div> <!-- .container -->
        </div> <!-- .page-section -->
    
        <div class="page-section">
          <div class="container-fluid">
            <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">
              <div class="py-3 px-5">
                <img src="../assets/img/clients/airbnb.png" alt="">
              </div>
              <div class="py-3 px-5">
                <img src="../assets/img/clients/google.png" alt="">
              </div>
              <div class="py-3 px-5">
                <img src="../assets/img/clients/mailchimp.png" alt="">
              </div>
              <div class="py-3 px-5">
                <img src="../assets/img/clients/paypal.png" alt="">
              </div>
              <div class="py-3 px-5">
                <img src="../assets/img/clients/stripe.png" alt="">
              </div>
            </div>
          </div> <!-- .container-fluid -->
        </div> <!-- .page-section -->
    
      </main>

@endsection
       