<template>
  <nav-bar />

  <div class="container-fluid">
    <div class="row m-bg-primary my-3 mx-2 pb-3 m-border-radius">
      <div class="container d-flex align-items-center flex-column mb-3">
        <img src="/img/logo.jpg" alt="E-Waste logo" height="100px" />
        <h4 class="mt-2">E-Waste Kenya Company Registration</h4>
      </div>
      <div class="col-sm-6 col-xs-6 col-md-4">
        <div class="form-group">
          <label for="companyName" class="font-weight-bold">Company Name</label>
          <input
            v-model="name"
            type="text"
            name="companyName"
            id="companyName"
            class="form-control"
            placeholder="Company Name"
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
            placeholder="Location"
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
        <a href="/company-login" class="text-white ml-1">Login</a>
      </div>
    </div>
  </div>
  <footer-view :absolute="true" />
</template>

<script>
import NavBar from "./NavBar.vue";
import FooterView from "./FooterView.vue";
import axios from '../axios';

export default {
  name: "RegisterCompany",
  components: { NavBar, FooterView },
  data() {
    return {
      name: "",
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
        name: this.name,
        email: this.email,
        phone: this.phone,
        location: this.location,
        password: this.password,
        cPassword: this.cPassword,
      };
      for (let x in data) {
        if (data[x] == "") {
          /* eslint-disable no-undef*/
          return Swal.fire({
            icon: "error",
            title: "Empty fields",
            text: "Please fill out " + x,
          });
        }
      }
      axios.post('/api/companies', data)
        .then(({data}) => {
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
            title: "Company Registered successfully as:  " + data.data.name,
            showConfirmButton: false,
            timer: 2000,
          });

          sessionStorage.setItem("auth", JSON.stringify(data.data));

          setTimeout(() => window.location.replace("/feed"), 2000);
        })
        .catch((err) => console.log(err));
    },
  },
};
</script>
