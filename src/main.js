import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'

/*eslint-disable no-unused-vars */
import 'jquery/dist/jquery.js';
import 'popper.js';
// import 'bootstrap/dist/js/bootstrap.min.js';


createApp(App).use(router).mount('#app')
