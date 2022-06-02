<template>
  <nav-bar />
  <!--<div class="container-fluid m-0 p-0">
          <img
            src="/img/E-waste image website.jpg"
            class="img-fluid w-100" style="height: 512px;"
            alt="Responsive Image"
          />

    </div>-->
  <!--Carousel Slider Main Page-->
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
          <a
            href="#"
            data-toggle="modal"
            data-target="#registerModalCenter"
            class="btn btn-lg btn-primary"
            >sign up</a
          >
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
              class="col-lg-4 col-md-4 col-sm-4 col-xs-12 d-flex justify-content-center"
            >
              <img
                src="/img/Weee.png"
                style="width: 165px; height: 100px; align-items: center"
                alt="Weee"
              />
            </div>
            <div
              class="col-lg-4 col-md-4 col-sm-4 col-xs-12 d-flex justify-content-center"
            >
              <img
                src="/img/Ewik-Kenya-1.png"
                style="height: 100px; width: 94px; align-items: center"
                alt="E-wik"
              />
            </div>
            <div
              class="col-lg-4 col-md-4 col-sm-4 col-xs-12 d-flex justify-content-center"
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
  <!--Login Modal-->

  <!--Login Modal-->

  <div
    class="modal fade"
    id="loginModalCenter"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Login as</h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12" style="text-align: center; margin-bottom: 10px">
              <a style="padding-right: 10px" href="/login"
                ><button
                  style="background-color: #2575fc; color: white; width: 150px"
                  type="button"
                  class="btn btn-primary"
                >
                  <i class="fa fa-user"></i> User
                </button></a
              >
              <a href="/company-login"
                ><button
                  style="background-color: #02060b; color: white; width: 150px"
                  type="button"
                  class="btn btn-primary"
                >
                  <i class="fa fa-graduation-cap"></i> Company
                </button></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div
    class="modal fade"
    id="registerModalCenter"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Register as</h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12" style="text-align: center; margin-bottom: 10px">
              <a style="padding-right: 10px" href="/register"
                ><button
                  style="background-color: #2575fc; color: white; width: 150px"
                  type="button"
                  class="btn btn-primary"
                >
                  <i class="fa fa-user"></i> User
                </button></a
              >
              <a href="/company-register"
                ><button
                  style="background-color: #02060b; color: white; width: 150px"
                  type="button"
                  class="btn btn-primary"
                >
                  <i class="fa fa-graduation-cap"></i> Company
                </button></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer-view />
</template>

<script>
/*eslint-disable*/
// @ is an alias to /src
import NavBar from "./NavBar.vue";
import FooterView from "./FooterView.vue";
export default {
  name: "HomeView",
  components: { NavBar, FooterView },
};
</script>
