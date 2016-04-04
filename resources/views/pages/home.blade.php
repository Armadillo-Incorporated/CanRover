@extends('app')

{{-- Navigation for small and medium screens --}}
@section('navigation.top-bar-small')
  <div class="row medium-nav align-center" style="width: 100%;" data-magellan data-options="deepLinking: true; barOffset: 15; threshold: 90;">
      <div class="small-12 medium-5 columns medium-nav__button"><a href="#about" data-toggle="menu">About</a></div>
      <div class="small-12 medium-5 columns medium-nav__button"><a href="#team" data-toggle="menu">Team</a></div>
      <div class="small-12 medium-5 columns medium-nav__button"><a href="#missions" data-toggle="menu">Missions</a></div>
      <div class="small-12 medium-5 columns medium-nav__button"><a href="#acknowledgements" data-toggle="menu">Acknowledgements</a></div>
      <div class="small-12 medium-5 columns medium-nav__button"><a href="#sponsors" data-toggle="menu">Sponsors</a></div>
      <div class="small-12 medium-5 columns medium-nav__button"><a href="#contactus" data-toggle="menu">Contact us</a></div>
      <div class="small-12 medium-5 columns medium-nav__button"><a href="#news" data-toggle="menu"><i class="fa fa-newspaper-o"></i> News</a></div>
      <div class="small-12 medium-5 columns medium-nav__button"><a href="#gallery" data-toggle="menu"><i class="fa fa-picture-o"></i> Gallery</a></div>
  </div>
@stop

@section('navigation.top-bar-large')

  {{-- Navigation for large screens --}}
  <ul class="horizontal menu navigation" data-magellan data-options="barOffset: 20; threshold: 90;">
      <li class="navigation__button"><a href="#about">About</a></li>
      <li class="navigation__button"><a href="#team">Team</a></li>
      <li class="navigation__button"><a href="#missions">Missions</a></li>
      <li class="navigation__button"><a href="#acknowledgements">Acknowledgements</a></li>
      <li class="navigation__button"><a href="#sponsors">Sponsors</a></li>
      <li class="navigation__button"><a href="#contactus">Contact us</a></li>
      <li class="navigation__button"><a href="#news"><i class="fa fa-newspaper-o"></i> News</a></li>
      <li class="navigation__button"><a href="#gallery"><i class="fa fa-picture-o"></i>Gallery</a></li>
  </ul>
@stop

@section('header')
  <header class="header-image"></header>
@stop

@section('content')
<div class="title" id="about" data-magellan-target="about">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">About</h1>
    </div>
</div>
    <div class="row align-middle">
    <div class="small-12 medium-10 small-centered columns">
        <section>
            <p>
              CanSats in Europe is an initiative of the European Space Agency (ESA), which also supports national CanSat events with the help of local organisations. These organisations are collaborating to increase the support for CanSat activities in Europe.
            </p>
            <p>
                A CanSat is a simulation of a real satellite, integrated within the volume and shape of a soft drink can. The challenge for the students is to fit all the major subsystems found in a satellite, such as power, sensors and a communication system, into this minimal volume. The CanSat is then launched to an altitude of a few hundred metres by a rocket or dropped from a platform or captive balloon and its mission begins: to carry out a scientific experiment and achieve a safe landing.
              </p>
            <p>
                CanSats offer a unique opportunity for students to have a first practical experience of a real space project. They are responsible for all aspects: designing the CanSat, selecting its mission, integrating the components, testing, preparing for launch and then analysing the data.
            </p>
            <p>
                Teams must be able to design and build a space-type system, following the approved competition guide, and then compete against each at the end of two semesters to determine the winners. Rockets will be provided but teams are responsible for funding the construction of their CanSat and all travel/lodging expenses.
            </p>
      </section>
      </div>
  </div>

      <div class="title" id="team" data-magellan-target="team">
          <div class="small-12 medium-10 small-centered medium-centered columns">
              <h1 class="text-center">Team</h1>
          </div>
      </div>

      <div class="row">
      <div class="small-12 medium-10 small-centered medium-centered columns">
          <section>
                <p>
                    We are a team of six students, all from the same class, class 12ºE from Escola Secundária João de Deus, Faro. Faro is the district capital of the Algarve region in the South of Portugal.
                </p>
                <p>
                    This is our first experience in building a satellite from scratch and it is also our first time dealing with this type of components and micro-components. Our main objective is to walk this road step by step until the end, the opportunity to visit ESA (European Space Agency) is our greatest motivation.
                </p>
                <p>
                    We all have a genuine interest in science, all of us want to follow careers in the field of space engineering, electrical engineering and architecture, therefore this is also a challenge to our abilities, during this adventure we will have a chance to test our management skills, our scientific knowledge, our team spirit and our will to take this project to the end.
                </p>
                <p>
                    The first objective is to win the National Final which will take place on April 16th and 17th in Torres Vedras and qualify for the European Challenge.
              </p>
          </section>
      </div>
  </div>

  <div class="title" id="missions" data-magellan-target="missions">
      <div class="small-12 medium-10 small-centered medium-centered columns">
          <h1 class="text-center">Missions</h1>
      </div>
  </div>

  <div class="row">
      <div class="small-12 medium-10 small-centered medium-centered columns">
        <section>
            <p>
              Each cansat Project must complete 2 separate missions: a primary mission and a secondary mission.
            </p>
            <p>
                The team must build a CanSat and program it to accomplish the compulsory primary mission, as follows:
            </p>
            <p>
                After release and during descent, the CanSat shall measure the following parameters and transmit the data as telemetry at least once every second to the ground station:
            </p>
            <ul>
                <li>Air temperature</li>
                <li>Air pressure</li>
            </ul>
            <p>
                It must be possible for the team to analyse the data obtained and display it in graphs.
            </p>
            <p>
                The secondary mission for the CanSat must be selected by the team. It can be based on other satellite missions, a perceived need for scientific data for a specific project, a technology demonstration for a student-designed component, or any other mission that would fit the CanSat’s capabilities.
            </p>
      </section>
  </div>
  </div>

  <div class="title" id="acknowledgements" data-magellan-target="acknowledgements">
      <div class="small-12 medium-10 small-centered medium-centered columns">
          <h1 class="text-center">Acknowledgements</h1>
      </div>
  </div>

  <div class="row">
      <div class="small-12 medium-10 small-centered medium-centered columns">
        <section>
          <p>Under development</p>
      </section>
  </div>
  </div>

  <div class="title" id="sponsors" data-magellan-target="sponsors">
      <div class="small-12 medium-10 small-centered medium-centered columns">
          <h1 class="text-center">Sponsors</h1>
      </div>
  </div>

  <div class="row">
      <div class="small-12 medium-10 small-centered medium-centered columns">
        <section>
            <div class="row align-center">
              <div class="small-12 medium-4 columns" style="margin-bottom: 30px">
                  <a href="http://www.skydivealgarve.com"><img src="img/sponsors/skydive-logo.png" alt="skydive logo" style="width: 100%;"/></a>
              </div>
              <div class="small-12 medium-4 columns">
                  <a href="http://www.english21.pt"><img src="img/sponsors/english21-logo.png" alt="english21 logo" style="width: 100%;"/></a>
              </div>
              <div class="small-12 medium-4 columns">
                  <a href="http://www.brimarel.com"><img src="img/sponsors/brimarel2.png" alt="brimarel logo" style="width: 100%;"/></a>
              </div>
              <div class="small-12 medium-4 columns">
                  <a href="http://www.globus.pt"><img src="img/sponsors/globus.png" alt="globus logo" style="width: 100%;"/></a>
              </div>
              <div class="small-12 medium-4 columns">
                  <a href="https://www.ualg.pt"><img src="img/sponsors/ualg.png" alt="ualg logo" style="width: 100%;"/></a>
              </div>
            </div>
        </section>
  </div>
  </div>

  <div class="title" id="contactus" data-magellan-target="contactus">
      <div class="small-12 medium-10 small-centered medium-centered columns">
          <h1 class="text-center">Contact Us</h1>
      </div>
  </div>

  <div class="row">
      <div class="small-12 medium-10 small-centered medium-centered columns">
        <section>
          <p>
            For any additional explanation, clarification, feedback or any other type of contact:
            <ul>
              <li>Send us an email to <a href="mailto:canrover2016@gmail.com">canrover2016@gmail.com</a></li>
              <li>Follow our <a href="https://www.facebook.com/canrover2016">Facebook</a> page.</li>
            </ul>
          </p>
      </section>
  </div>
</div>

<div class="title" id="news" data-magellan-target="news">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">News</h1>
    </div>
</div>

<div class="row">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <section>
            @if ($article->count())
              <h4 class="subheader"> 
                  {{ $article->title }}
                  <hr>
              </h4>
              <p> {{ $article->body }} </p>
              <a href="{{ url('/articles') }}">Read more articles</a>
            @else
              <p>There are no news</p>
            @endif
        </section>
    </div>
</div>

<div class="title" id="gallery" data-magellan-target="gallery">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">Gallery</h1>
    </div>
</div>

<div class="row expanded">
  <div class="orbit" role="region" aria-label="Recent pictures" data-orbit data-use-m-u-i="true" data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
    <ul class="orbit-container">
      <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
      <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
      @foreach ($photos as $photo)
        <li class="orbit-slide">
          <img src="{{ $photo->photo }}" alt="$">
        </li>
      @endforeach
      <a href="{{ url('album') }}" name="gallery">
        <figcaption class="orbit-caption text-center" style="padding: 20px 0px">Open gallery</figcaption>
      </a>
      </ul>
      <nav class="orbit-bullets">
        <button class="is-active" data-slide="0"></button>
        <button data-slide="1"></button>
        <button data-slide="2"></button>
        <button data-slide="3"></button>
      </nav>
    </div>
  </div>
@stop
