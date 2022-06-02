<template>
  <nav-bar />
  <div class="body-view">
    <div class="container py-3">
      <div class="input-wrappper mt-3">
        <input
          @keyup="search"
          v-model="searchInput"
          class="form-control"
          type="search "
          placeholder="Search "
          id="search-input "
        />
        <i></i>
        <div class="container position-relative bg-white rounded mt-3">
          <ul class="list-unstyled list-group list-group-bordered">
            <li
            @click="openGadget(gadget.id)"
              class="list-group-item"
              v-for="gadget in searchResults"
              :key="gadget.id"
            >
              {{ gadget.name }}
            </li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-4 mt-3" v-for="gadget in gadgets" :key="gadget.id">
          <div class="bg-white rounded">
            <a :href="'/feed/' + gadget.id"
              ><img
                v-if="gadget.images && gadget.images.length >= 0"
                :src="'http://127.0.0.1:8000/' + gadget.images[0].url"
                alt="image1"
                class="img-responsive rounded w-100"
            /></a>
            <p class="pl-2 pb-2 font-weight-bold">{{ gadget.name }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import NavBar from "./NavBar.vue";
import axios from "../axios";

/*eslint-disable*/
export default {
  name: "Feed",
  components: { NavBar },
  data() {
    return {
      searchInput: "",
      searchResults: [],
      searchNotFound:false,
      gadgets: null,
    };
  },
  methods: {
    openGadget(gadgetId){
      this.$router.push(`/feed/${gadgetId}`);
    },
    search(e) {
      if (this.searchInput.trim() == "") return (this.searchResults = []);
      console.log("Searching: ", this.searchInput);

        return axios
          .get("api/gadgets?q=" + this.searchInput)
          .then(({ data }) => {
            this.searchResults = data.data;
            if(data.data.length == 0){
              this.searchResults = {
                name:"No gadget found"
              }
            }
          })
          .catch((err) => console.log(err));
     
    },
    getGadgets() {
      axios
        .get("/api/gadgets")
        .then(({ data }) => {
          this.gadgets = data.data;
        })
        .catch((error) => console.log(error));
    },
  },
  created() {
    this.getGadgets();
  },
};
</script>
<style scoped>
.body-view {
  background-color: #dee2e6;
  min-height: 100vh;
}
.input-wrappper {
  position: sticky;
  top: 3px;
}
</style>
