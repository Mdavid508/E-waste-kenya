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
            <a class="nav-link text-light" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/about">About Us</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
              class="nav-link text-light"
              data-toggle="modal"
              data-target="#loginModalCenter"
            >
              Login</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Login Modal -->
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
   <!-- Register Modal -->
    <div class="modal fade" id="registerModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Register as</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12" style="text-align: center; margin-bottom: 10px">
                            <a style="padding-right:10px" href="/register"><button style="background-color: #2575fc; color:white; width:150px" type="button" class="btn btn-primary"><i class="fa fa-user"></i>
                        User</button></a>
                            <a href="/company-register"><button style="background-color: #02060b; color:white;width:150px" type="button" class="btn btn-primary"><i class="fa fa-graduation-cap"></i>
                        Company</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
