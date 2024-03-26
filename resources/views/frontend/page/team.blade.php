@extends('frontend.layouts.master')

@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-white">Team</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Team</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container mt-4">
        <div class="row">
          <div class="row justify-content-center team-display">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="{{ asset('frontend/img/team/Sarwar.jpg') }}">
                </div>
                <div class="team-content">
                  <h3 class="name">Sarwar Ahmed</h3>
                  <h4 class="title">Chief Financial Officer</h4>
                </div>
                {{-- <ul class="social">
                  <li><a href="" target="_blank" aria-hidden="true"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="" target="_blank"  aria-hidden="true"><i class="fa-brands fa-github"></i></a></li>
                  <li><a href="" target="_blank"  aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
                  <li><a href="" target="_blank" aria-hidden="true"><i class="fab fa-linkedin-in"></i></a></li>
                </ul> --}}
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="{{ asset('frontend/img/team/Mokbul.png') }}">
                </div>
                <div class="team-content">
                  <h3 class="name">Mokbul Ahmed</h3>
                  <h4 class="title">Head Of Operations</h4>
                </div>
                {{-- <ul class="social">
                  <li><a href="" target="_blank" aria-hidden="true"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="" target="_blank"  aria-hidden="true"><i class="fa-brands fa-github"></i></a></li>
                  <li><a href="" target="_blank"  aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
                  <li><a href="" target="_blank" aria-hidden="true"><i class="fab fa-linkedin-in"></i></a></li>
                </ul> --}}
              </div>
            </div>
            {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="{{ asset('frontend/img/logo.png') }}">
                </div>
                <div class="team-content">
                  <h3 class="name">Dream Diver</h3>
                  <h4 class="title">Web Developer</h4>
                </div>
                <ul class="social">
                  <li><a href="" target="_blank" aria-hidden="true"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="" target="_blank"  aria-hidden="true"><i class="fa-brands fa-github"></i></a></li>
                  <li><a href="" target="_blank"  aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
                  <li><a href="" target="_blank" aria-hidden="true"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div> --}}
          </div>
          <div class="row team-display">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="our-team">
                <div class="picture">
                  <img class="img-fluid" src="{{ asset('frontend/img/team/arif.jpg') }}">
                </div>
                <div class="team-content">
                  <h3 class="name"> Arif Ur Rahman</h3>
                  <h4 class="title"> Process Development Engineer</h4>
                </div>
                {{-- <ul class="social">
                  <li><a href="https://www.facebook.com/absent.arif.5" target="_blank" aria-hidden="true"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://github.com/ArifUrRahman1995" target="_blank"  aria-hidden="true"><i class="fa-brands fa-github"></i></a></li>
                  <li><a href="arifurrahman.it.doc@gmail.com" target="_blank"  aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
                  <li><a href=" https://www.linkedin.com/in/arif-ur-rahman-swe/" target="_blank" aria-hidden="true"><i class="fab fa-linkedin-in"></i></a></li>
                </ul> --}}
              </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('frontend/img/team/younus.jpg') }}">
              </div>
              <div class="team-content">
                <h3 class="name">MD. A. YOUNUS</h3>
                <h4 class="title">Web Developer</h4>
              </div>
              {{-- <ul class="social">
                <li><a href=" https://www.facebook.com/younusmamun" target="_blank" aria-hidden="true"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://github.com/younusmamun" target="_blank"  aria-hidden="true"><i class="fa-brands fa-github"></i></a></li>
                <li><a href=" younus.dreamdiver@gmail.com" target="_blank"  aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
                <li><a href="www.linkedin.com/in/md-a-younus" target="_blank" aria-hidden="true"><i class="fab fa-linkedin-in"></i></a></li>
              </ul> --}}
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('frontend/img/team/sakib.jpg') }}">
              </div>
              <div class="team-content">
                <h3 class="name">Shahadot Hossain</h3>
                <h4 class="title">Web Developer</h4>
              </div>
              {{-- <ul class="social">
                <li><a href=":https://www.facebook.com/sk.sakib6619" target="_blank" aria-hidden="true"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=" https://github.com/sakibbdcse" target="_blank"  aria-hidden="true"><i class="fa-brands fa-github"></i></a></li>
                <li><a href="sakibbd.cse@gmail.com" target="_blank"  aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
                <li><a href=" https://www.linkedin.com/in/sakib6619/" target="_blank" aria-hidden="true"><i class="fab fa-linkedin-in"></i></a></li>
              </ul> --}}
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
              <div class="picture">
                <img class="img-fluid" src="{{ asset('frontend/img/team/sazal.jpg') }}">
              </div>
              <div class="team-content">
                <h3 class="name">Sazal Abdullah</h3>
                <h4 class="title">Web Developer</h4>
              </div>
              {{-- <ul class="social">
                <li><a href="https://www.facebook.com/sazal.abdullallmomen/" target="_blank" aria-hidden="true"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://github.com/Sazal-Abdullah" target="_blank"  aria-hidden="true"><i class="fa-brands fa-github"></i></a></li>
                <li><a href="sazalahamed61@gmail.com" target="_blank"  aria-hidden="true"><i class="fa-solid fa-envelope"></i></a></li>
                <li><a href="https://www.linkedin.com/in/sazal-abdullah-9456a3289/" target="_blank" aria-hidden="true"><i class="fab fa-linkedin-in"></i></a></li>
              </ul> --}}
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
@endsection

