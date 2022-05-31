<template>

<nav-bar/>
  <div class="about">
    <h3>Welcome To E-Waste Kenya</h3>
    <p>
      Who are E-Waste Kenya?....
    </p>
  </div>

  <footer-view/>
</template>
<script>
import NavBar from './NavBar.vue'
import FooterView from './FooterView.vue'

export default {
  name: "AboutView",
  components:{NavBar, FooterView}
}
</script>