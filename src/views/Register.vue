<template>
  <nav-bar />
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
            v-model="first_name"
            type="text"
            name="firstName"
            id="firstName"
            class="form-control"
            placeholder="First Name"
            required
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="lastName" class="font-weight-bold">Last Name</label>
          <input
            v-model="last_name"
            type="text"
            name="lastName"
            id="lastName"
            class="form-control"
            placeholder="Last Name"
            required
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="location" class="font-weight-bold">Location</label>
          <input
            v-model="location"
            type="text"
            name="location"
            id="location"
            class="form-control"
            placeholder="First Location"
            required
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="phone" class="font-weight-bold">Phone</label>
          <input
            v-model="phone"
            type="tel"
            name="phone"
            id="phone"
            class="form-control"
            placeholder="Phone"
            required
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="email" class="font-weight-bold">Email</label>
          <input
            v-model="email"
            type="email"
            name="email"
            id="email"
            class="form-control"
            placeholder="Email"
            required
          />
        </div>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="password" class="font-weight-bold">Password</label>
          <input
            v-model="password"
            type="password"
            name="password"
            id="password"
            class="form-control"
            placeholder="Password"
            required
          />
        </div>
      </div>

      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="cPassword" class="font-weight-bold"
            >Confirm Password</label
          >
          <input
            v-model="cPassword"
            type="password"
            name="cPassword"
            id="cPassword"
            class="form-control"
            placeholder="Confirm Password"
            required
          />
        </div>
      </div>

      <div
        class="col-sm-6 col-xs-6 col-md-4 d-flex flex-column align-items-center justify-content-center"
      >
        <div class="form-group w-50">
          <button
            type="submit"
            name="register"
            id="register"
            class="btn m-bg-secondary form-control"
            @click="register()"
          >
            Register
          </button>
        </div>
      </div>

      <div class="col-sm-6 col-xs-6 col-md-4 d-flex align-items-center">
        Already have an account?
        <a href="/login" class="text-white ml-1">Login</a>
      </div>
    </div>
  </div>

  <footer-view :absolute="true"/>
</template>

<script>
import NavBar from "./NavBar.vue";
import FooterView from "./FooterView.vue";
import axios from "../axios";
/*eslint-disable*/
export default {
  name: "Register",
  components: { NavBar, FooterView },
  data() {
    return {
      first_name: "",
      last_name: "",
      email: "",
      phone: "",
      location: "",
      password: "",
      cPassword: "",
    };
  },
  methods: {
    register() {
      const data = {
        first_name: this.first_name,
        last_name: this.last_name,
        email: this.email,
        phone: this.phone,
        location: this.location,
        password: this.password,
        cPassword: this.cPassword,
      };
      for (let x in data) {
        if (data[x] == "") {
          return Swal.fire({
            icon: "error",
            title: "Empty fields",
            text: x + " field is required",
          });
        }
      }

      axios
        .post("/api/auth/register", data)
        .then(({ data }) => {
          console.log(data);
          if (data.success == false) {
            return Swal.fire({
              icon: "error",
              title: "Registration Error",
              text: data.message,
            });
          }
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Registration Successful as " + data.data.first_name,
            showConfirmButton: false,
            timer: 2000,
          });

          sessionStorage.setItem("auth", JSON.stringify(data.data));

          setTimeout(() => window.location.replace("/dashboard"), 2000);
        })
        .catch((err) => console.log(err));
    },
  },
};
</script>
