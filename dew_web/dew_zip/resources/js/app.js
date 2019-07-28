import Vue from 'vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'imagehover.css/css/imagehover.min.css';
import VueRouter from 'vue-router';
import VueGallery from 'vue-gallery';
Vue.use(VueGallery);
Vue.use(VueRouter);
import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);
import BootstrapVue from 'bootstrap-vue';
Vue.use(BootstrapVue);
import App from './App.vue';
import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);

const router = new VueRouter({ mode: 'history' });
new Vue(Vue.util.extend({ router }, App)).$mount('#app');