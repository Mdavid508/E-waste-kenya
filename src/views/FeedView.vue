<template>
  <div class="body-view">
     <!--Back arrow Logic-->
    <div class="pt-3 pl-3">
        <a @click="goBack()"> <img src="/img/back-arrow.svg" alt="back arrow" /></a>
    </div>
    <!--Carousel-->
    <div class="container pr-0 pl-0 mt-2 bg-white rounded">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" style="height: 330px" src="/img/E-waste image website.jpg" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height: 330px" src="/img/e-waste image 2.jpg" alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="height: 330px" src="/img/E-waste image 3.jpg" alt="Third slide" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row pt-4">
            <div class="w-25 d-flex justify-content-center">
                <img src="/img/phone1.jpg" style="object-fit: contain; max-height: 110px; max-width: 110px" alt="Picture1" />
            </div>
            <div class="w-25 d-flex justify-content-center">
                <img src="/img/phone2.jpg" style="max-height: 110px; max-width: 110px" alt="Picture2" />
            </div>
            <div class="w-25 d-flex justify-content-center">
                <img src="/img/phone3.jpg" style="max-height: 110px; max-width: 110px" alt="Picture3" />
            </div>
            <div class="w-25 d-flex justify-content-center">
                <img src="/img/phone3.jpg" style="max-height: 110px; max-width: 110px" alt="Picture3" />
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-4 d-flex justify-content-center align-items-center">
                <p class="text-muted">
                    <img src="/img/fa-location.jpg" alt="locationicon" /> Location
                </p>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <p class="text-muted">
                    <img src="/img/fa-phone.jpg" alt="phoneicon" /> Phone Number
                </p>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <p class="text-muted">
                    <img src="/img/order.jpg" alt="phoneicon" /> Order
                </p>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <p class="font-weight-bold">Similar Gadgets</p>
    </div>

    <div class="container">
        <div class="row bg-white my-3 rounded simmilar-gadget-height">
            <div class="col-6">
                <img src="/img/jabari-solutions.jpg" alt="items-advert" class="img-responsive w-100" />
            </div>
            <div class="col-6 d-flex flex-column justify-content-between align-items-start">
                <h5 class="pt-4">Jabari Solutions</h5>
                <h5 class="pb-4">
                    <img src="/img/fa-location.jpg" alt="location" /> Nyeri Town
                </h5>
            </div>
        </div>
        <div class="row bg-white my-3 rounded simmilar-gadget-height">
            <div class="col-6">
                <img src="/img/jabari-solutions.jpg" alt="items-advert" class="img-responsive w-100" />
            </div>
            <div class="col-6 d-flex flex-column justify-content-between align-items-start">
                <h5 class="pt-4">Jabari Solutions</h5>
                <h5 class="pb-4">
                    <img src="/img/fa-location.jpg" alt="location" /> Nyeri Town
                </h5>
            </div>
        </div>
        <div class="row bg-white my-3 rounded simmilar-gadget-height">
            <div class="col-6">
                <img src="/img/jabari-solutions.jpg" alt="items-advert" class="img-responsive w-100" />
            </div>
            <div class="col-6 d-flex flex-column justify-content-between align-items-start">
                <h5 class="pt-4">Jabari Solutions</h5>
                <h5 class="pb-4">
                    <img src="/img/fa-location.jpg" alt="location" /> Nyeri Town
                </h5>
            </div>
        </div>

    </div>
  </div>
</template>

<script>
/*eslint-disable*/
export default {
  name: "FeedView",
  data(){
    return {

    }
  },
  methods:{
    goBack(){
      return this.$router.back();
    }
  }
};
</script>

<style scoped>
@import '../assets/css/style.css';
.body-view {
  background-color: #dee2e6;
  height: 100%;
}
</style>
