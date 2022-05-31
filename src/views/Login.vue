<template>
  <nav-bar />

  <!--Login-->
  <div class="container m-container bg-custom this-login">
    <div class="row pb-3">
      <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
        <img
          src="/img/E-waste Kenya Logo.png"
          style="height: 97px; width: 110px"
          alt="logo"
        />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <form id="loginForm">
          <div class="form-group">
            <label for="username" class="d-flex justify-content-center"
              >Username</label
            >
            <input
              v-model="email"
              type="text"
              name="email"
              class="form-control"
              id="username"
              placeholder="Enter username"
              required
            />
          </div>
          <div class="form-group">
            <label for="InputPassword" class="d-flex justify-content-center"
              >Password</label
            >
            <input
              v-model="password"
              type="password"
              name="password"
              class="form-control"
              id="InputPassword1"
              placeholder="Enter Password"
              required
            />
          </div>

          <div
            class="d-flex flex-column align-items-center justify-content-center pt-4"
          >
            <button
              type="button"
              class="btn btn-primary bg-white text-dark"
              @click="login()"
            >
              Login
            </button>
            <p class="pt-2">
              Dont have an account yet ?
              <a class="text-decoration-none text-white" href="/register">
                Register</a
              >
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer-view />
</template>

<script>
import NavBar from "./NavBar.vue";
import FooterView from "./FooterView.vue";
import axios from "../axios";

/*eslint-disable*/
export default {
  name: "Login",
  components: { NavBar, FooterView },
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    login(e) {
      console.log("Attemptig to login");
      const data = { email: this.email, password: this.password };

      axios
        .post("/api/auth/login", data)
        .then(({ data }) => {
          console.log(data);
          if (data.success == false) {
            return Swal.fire({
              icon: "error",
              title: "Login Error",
              text: data.message,
            });
          }
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Login Successful as " + data.data.first_name,
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

<style scoped>
.this-login {
  margin-bottom: 28px;
}
</style>
