<template>
  <nav class="navbar navbar-expand-sm navbar-light bg-custom">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img
          src="/img/E-waste Kenya Logo.png"
          alt=""
          width="100"
          height="100"
        />
        E-Waste Kenya
      </a>
      <button
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navmenu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-light" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/about">About Us</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-light" href="/login"> Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
<script>
/*eslint-disable*/
export default {
  name: "NavBar",
  data() {
    return {};
  },
  methods: {},
  created() {},
};
</script>