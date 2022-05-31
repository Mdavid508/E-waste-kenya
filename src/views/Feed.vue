<template >

<nav-bar/>
<div class="body-view">
  <div class="container py-3">
        <div class="input-wrappper mt-3">
            <input class="form-control" type="search " placeholder="Search " id="search-input ">
            <i></i>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-4 mt-3">
                <div class="bg-white rounded">
                    <a href="/feed/phones"><img src="/img/phone1.jpg" alt="image1" class="img-responsive rounded w-100"></a>
                    <p class="pl-2 pb-2 font-weight-bold">Phone11</p>
                </div>

            </div>
            <div class="col-4  mt-3">
                <div class="bg-white rounded">
                    <img src="/img/phone1.jpg" alt="image1" class="img-responsive rounded w-100">
                    <p class="pl-2 pb-2 font-weight-bold">Phone11</p>
                </div>
            </div>
            <div class="col-4  mt-3">
                <div class="bg-white rounded">
                    <img src="/img/phone1.jpg" alt="image1" class="img-responsive rounded w-100">
                    <p class="pl-2 pb-2 font-weight-bold">Phone11</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 mt-3">
                <div class="bg-white rounded">
                    <img src="/img/phone1.jpg" alt="image1" class="img-responsive rounded w-100">
                    <p class="pl-2 pb-2 font-weight-bold">Phone11</p>
                </div>

            </div>
            <div class="col-4  mt-3">
                <div class="bg-white rounded">
                    <img src="/img/phone1.jpg" alt="image1" class="img-responsive rounded w-100">
                    <p class="pl-2 pb-2 font-weight-bold">Phone11</p>
                </div>
            </div>
            <div class="col-4  mt-3">
                <div class="bg-white rounded">
                    <img src="/img/phone1.jpg" alt="image1" class="img-responsive rounded w-100">
                    <p class="pl-2 pb-2 font-weight-bold">Phone11</p>
                </div>
            </div>

        </div>

    </div>
  </div>
</template>

<script>
import NavBar from './NavBar.vue';
/*eslint-disable*/
export default {
  name: "Feed",
  components:{NavBar}
};
</script>
<style scoped>
.body-view {
    background-color: #dee2e6;
    min-height: 100vh;
}
.input-wrappper{
  position: sticky;
  top:3px;
}

</style>