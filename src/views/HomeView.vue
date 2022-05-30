<template>
<nav-bar />
  <div
    id="carouselExampleIndicators"
    class="carousel slide"
    data-ride="carousel"
  >
    <ol class="carousel-indicators">
      <li
        data-target="#carouselExampleIndicators"
        data-slide-to="0"
        class="active"
      ></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carousel-main">
        <img
          class="d-block w-100"
          src="/img/E-waste image website.jpg"
          alt="First slide"
        />
        <div class="carousel-caption d-md-block d-sm-block m-bg-caption">
          <h5>Who are We?</h5>
          <p>
            E-waste Kenya is a company that links, individuals who wish to
            dispose of their Electronic waste responsibly with the proper
            recycling and dismantling companies in Kenya to ensure sustainable
            production and consumption of E-Waste in alignment to the UN SDG
            Goal 12. Join Us to become a part of the amazing journey
          </p>
          <a href="/register.html" class="btn btn-lg btn-primary">sign up</a>
        </div>
      </div>
      <div class="carousel-item carousel-main">
        <img
          class="d-block w-100"
          src="/img/E-waste image 4.jpg"
          alt="Second slide"
        />
        <div class="carousel-caption d-md-block d-sm-block m-bg-caption">
          <h5>What is E-waste?</h5>
          <p>
            E-waste is the short form of Electronic waste, often used to
            describe used electronics that are nearing the end of their useful
            life, and are discarded, donated or given to a recycler.Globally,
            e-waste constitutes more than 5 percent of all municipal solid waste
            and is increasing with the rise of sales of electronic products in
            developing countries.
          </p>
        </div>
      </div>
      <div class="carousel-item carousel-main">
        <img
          class="d-block w-100"
          src="/img/E-waste image 3.jpg"
          alt="Third slide"
        />
      </div>
    </div>
    <a
      class="carousel-control-prev"
      href="#carouselExampleIndicators"
      role="button"
      data-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a
      class="carousel-control-next"
      href="#carouselExampleIndicators"
      role="button"
      data-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--Carousel Slider Our Patners Page-->
  <h2 class="main">Our Patners</h2>
  <div
    id="carouselExampleSlidesOnly"
    class="carousel slide"
    data-ride="carousel"
  >
    <div class="carousel-inner mb-2">
      <!--Carousel Slider Our Patners Page Item 1-->
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center"
            >
              <img
                src="/img/Weee.png"
                style="width: 165px; height: 100px; align-items: center"
                alt="Weee"
              />
            </div>
            <div
              class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center"
            >
              <img
                src="/img/Ewik-Kenya-1.png"
                style="height: 100px; width: 94px; align-items: center"
                alt="E-wik"
              />
            </div>
            <div
              class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center"
            >
              <img
                src="/img/Nyericounty.png"
                style="width: 105px; height: 100px; align-items: center"
                alt="Nyericounty"
              />
            </div>
          </div>
        </div>
      </div>
      <!--Carousel Slider Our Patners Item 2-->
      <div class="carousel-item">
        <div class="container">
          <div class="row">
            <div
              class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center"
            >
              <img
                src="/img/Rectangle 7Dekut.jpg"
                style="height: 105px; width: 100px"
                alt="Dekut"
              />
            </div>
            <div
              class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center"
            >
              <img
                src="/img/Karatina University.jpg"
                style="height: 105px; width: 100px"
                alt="Karatina Uni"
              />
            </div>
            <div
              class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center"
            >
              <img
                src="/img/kagumohigh.jpg"
                style="height: 105px; width: 100px"
                alt="Kagumo boys"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
/*eslint-disable*/
// @ is an alias to /src
import NavBar from "./NavBar.vue";
export default {
  name: "HomeView",
  components: {NavBar},
};
</script>
