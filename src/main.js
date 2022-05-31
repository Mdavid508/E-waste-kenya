import { createApp } from 'vue'

import App from './App.vue'
import './registerServiceWorker'
import router from './router'

import jQuery from 'jquery';
global.jQuery = jQuery;
import 'popper.js';
import 'bootstrap'
import Swal from 'sweetalert2';
global.Swal = Swal;


createApp(App).use(router).mount('#app')