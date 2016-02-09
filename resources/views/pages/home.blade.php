@extends('app')

@section('header')
        <header class="header">
            <img src="/img/header.jpg" alt="Header picture" class="header__image">
        </header>
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

  <div class="title" id="outreach" data-magellan-target="outreach">
      <div class="small-12 medium-10 small-centered medium-centered columns">
          <h1 class="text-center">Outreach</h1>
      </div>
  </div>

  <div class="row">
      <div class="small-12 medium-10 small-centered medium-centered columns">
        <section>
          <p>Under development</p>
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
              <div class="small-12 medium-3 columns">
                  <a href="http://www.skydivealgarve.com"><img src="img/sponsors/skydive-logo.png" alt="skydive logo" style="width: 100%;"/></a>
              </div>
              <div class="small-12 medium-3 columns">
                  <a href="http://www.english21.pt"><img src="img/sponsors/english21-logo.png" alt="english21 logo" style="width: 100%;"/></a>
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
            <p>Under Development</p>
        </section>
    </div>
</div>

<div class="title" id="gallery" data-magellan-target="gallery">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <h1 class="text-center">Gallery</h1>
    </div>
</div>

<div class="row">
    <div class="small-12 medium-10 small-centered medium-centered columns">
        <section>
            <p>Under Development</p>
        </section>
    </div>
</div>

@stop
