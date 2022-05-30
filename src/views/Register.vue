<template>
  <div class="container-fluid">
    <div class="row m-bg-primary my-3 mx-2 pb-3 m-border-radius">
      <div class="container d-flex align-items-center flex-column mb-3">
        <img src="/img/logo.jpg" alt="E-Waste logo" height="100px" />
        <h4 class="mt-2">E-Waste Kenya Individual Registration</h4>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="firstName" class="font-weight-bold">First Name</label>
          <input
            type="text"
            name="firstName"
            id="firstName"
            class="form-control"
            placeholder="First Name"
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="lastName" class="font-weight-bold">Last Name</label>
          <input
            type="text"
            name="lastName"
            id="lastName"
            class="form-control"
            placeholder="Last Name"
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="location" class="font-weight-bold">Location</label>
          <input
            type="text"
            name="location"
            id="location"
            class="form-control"
            placeholder="First Location"
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="phone" class="font-weight-bold">Phone</label>
          <input
            type="tel"
            name="phone"
            id="phone"
            class="form-control"
            placeholder="Phone"
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="email" class="font-weight-bold">Email</label>
          <input
            type="email"
            name="email"
            id="email"
            class="form-control"
            placeholder="Email"
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="password" class="font-weight-bold">Password</label>
          <input
            type="password"
            name="password"
            id="password"
            class="form-control"
            placeholder="Password"
          />
        </div>
      </div>

      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="cPassword" class="font-weight-bold"
            >Confirm Password</label
          >
          <input
            type="password"
            name="cPassword"
            id="cPassword"
            class="form-control"
            placeholder="Confirm Password"
          />
        </div>
      </div>

      <div
        class="
          col-sm-6 col-xs-6 col-md-4
          d-flex
          flex-column
          align-items-center
          justify-content-center
        "
      >
        <div class="form-group w-50">
          <input
            type="submit"
            name="register"
            id="register"
            class="btn m-bg-secondary form-control"
            value="Register"
          />
        </div>
      </div>

      <div class="col-sm-6 col-xs-6 col-md-4 d-flex align-items-center">
        Already have an account?
        <a href="/login.html" class="text-white ml-1">Login</a>
      </div>
    </div>
  </div>
</template>

<script>
/*eslint-disable*/
export default {
  name: "Register",
};
</script>