<template>
  <router-view />
</template>

<script>

/*eslint-disable*/
console.log('App invoked')
export default {
  components: {  },
};
</script>

<style>
@import '~bootstrap/dist/css/bootstrap.min.css';
@import 'assets/css/style.css';

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
