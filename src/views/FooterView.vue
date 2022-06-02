<template>
  <!--Footer for the company-->
  <div class="container-fluid" :class="{ absolute: absolute }">
    <div class="row m-bg-primary p-4">
      <div class="col-4 d-flex justify-content-center">
        <a
          class="font-weight-bold text-dark text-docoration-none ml-1"
          href="tel:0769798443"
          target="_blank"
        >
          <img src="/img/phone-logo.png" alt="Phone icon" />
          <span class="contact-link"> 0769798443</span></a
        >
      </div>
      <div class="col-4 d-flex justify-content-center">
        <a
          class="font-weight-bold text-dark text-docoration-none ml-1"
          href="https://twitter.com/e-wastekenya"
          target="_blank"
        >
          <img src="/img/twitter.jpg" alt="Twitter icon" />
          <span class="contact-link"> e-wastekenya</span></a
        >
      </div>
      <div class="col-4 d-flex justify-content-center">
        <a
          class="font-weight-bold text-dark text-docoration-none ml-1"
          href="https://linkedin.com/e-wastekenya"
          target="_blank"
        >
          <img src="/img/linkedin.jpg" alt="LinkedIn icon" />
          <span class="contact-link"> E-waste Kenya</span></a
        >
      </div>
    </div>
  </div>
</template>
<script>
/*eslint-disable*/
export default {
  name: "FooterView",
  props: {
    absolute: {
      type: Boolean,
      default: false,
    },
  },
};
</script>
<style scoped>
.absolute {
  position: absolute;
  bottom: 0;
}
</style>
