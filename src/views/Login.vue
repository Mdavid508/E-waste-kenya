<template>
  <div class="container m-container bg-custom">
    <div class="row pb-3">
      <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
        <img
          src="/img/E-waste Kenya Logo.png"
          style="height: 97px; width: 110px ;"
          alt="logo"
        />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <form>
          <div class="form-group">
            <label for="username" class="d-flex justify-content-center"
              >Username</label
            >
            <input
              type="text"
              class="form-control"
              id="username"
              placeholder="Enter username"
            />
          </div>
          <div class="form-group">
            <label for="InputPassword" class="d-flex justify-content-center"
              >Password</label
            >
            <input
              type="password"
              class="form-control"
              id="InputPassword1"
              placeholder="Enter Password"
            />
          </div>

          <div
            class="
              d-flex
              flex-column
              align-items-center
              justify-content-center
              pt-4
            "
          >
            <button type="submit" class="btn btn-primary bg-white text-dark">
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
</template>

<script>
/*eslint-disable*/
export default {
  name: "Login",
};
</script>