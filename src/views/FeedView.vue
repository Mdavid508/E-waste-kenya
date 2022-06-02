<template>
  <div class="body-view">
    <!--Back arrow Logic-->
    <div class="pt-3 pl-3">
      <a @click="goBack()">
        <img src="/img/back-arrow.svg" alt="back arrow"
      /></a>
    </div>
    <!--Carousel-->
    <div class="container pr-0 pl-0 mt-2 bg-white rounded">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner" v-if="gadget.images">
              <div
                class="carousel-item active"
                v-for="image in gadget.images"
                :key="image.id"
              >
                <img
                  class="d-block w-100"
                  style="height: 330px"
                  :src="'http://127.0.0.1:8000/' + image.url"
                  alt="First slide"
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleControls"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleControls"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

      <div class="row pt-4">
        <div class="w-25 d-flex justify-content-center">
          <img
            v-for="image in gadget.images"
            :key="image.id"
            :src="'http://127.0.0.1:8000/' + image.url"
            style="object-fit: contain; max-height: 110px; max-width: 110px"
            alt="Picture1"
          />
        </div>
      </div>
      <div class="row pt-4">
        <div class="col-4 d-flex justify-content-center align-items-center">
          <p class="text-muted">
            <img src="/img/fa-location.jpg" alt="locationicon" />
            {{ gadget.location }}
          </p>
        </div>
        <div class="col-4 d-flex justify-content-center align-items-center">
          <p class="text-muted">
            <img src="/img/fa-phone.jpg" alt="phoneicon" />
            <a
              class="text-decoration-none"
              :href="'tel:' + gadget.user.phone"
              v-if="gadget.user"
              >{{ gadget.user.phone }}</a
            >
          </p>
        </div>
        <div class="col-4 d-flex justify-content-center align-items-center">
          <p class="text-muted">
            <img src="/img/order.jpg" alt="phoneicon" /> Order
          </p>
        </div>
      </div>
      <div class="row">
        <div class="container">
          <p>{{ gadget.description }}</p>
        </div>
      </div>
    </div>
    <div class="container pt-3">
      <p class="font-weight-bold">Similar Gadgets</p>
    </div>
<!-- Loop through simmilar gadgets -->
    <div class="container">
      <div
        class="row bg-white my-3 rounded simmilar-gadget-height"
        v-for="gadget in simmilarGadgets"
        :key="gadget.id"
      >
        <div class="col-6">
          <img
          @click="openSimmilarGadget(gadget.id)"
            :src="'http://127.0.0.1:8000/' + gadget.images[0].url"
            alt="items-advert"
            class="img-responsive w-100"
          />
        </div>
        <div
          class="col-6 d-flex flex-column justify-content-between align-items-start"
        >
          <h5 class="pt-4">{{ gadget.name }}</h5>
          <h5 class="pb-4">
            <img src="/img/fa-location.jpg" alt="location" />
            {{ gadget.location }}
          </h5>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
/*eslint-disable*/
import axios from "../axios";
export default {
  name: "FeedView",
  data() {
    return {
      gadget: null,
      simmilarGadgets: null,
    };
  },
  methods: {
      openSimmilarGadget(gadgetId){
          this.$router.push(`/feed/${gadgetId}`);
          
      },
    goBack() {
    //   return this.$router.back();
    return this.$router.push('/feed')
    },
    getGadget() {
      let gadgetId = this.$route.params.feedId;
      axios
        .get(`/api/gadgets/${gadgetId}`)
        .then(({ data }) => {
          this.gadget = data.data;
        })
        .catch((err) => console.log(err));
    },
    getSimmilarGadgets() {
      axios
        .get("/api/gadgets")
        .then(({ data }) => {
          this.simmilarGadgets = data.data;
        })
        .catch((err) => console.log(err));
    },
  },
  created() {
    this.getGadget();
    this.getSimmilarGadgets();
  },
  watch:{
      '$route': ()=>{
          window.location.reload();
      }
  }
};
</script>

<style scoped>
@import "../assets/css/style.css";
.body-view {
  background-color: #dee2e6;
  height: 100%;
}
</style>
