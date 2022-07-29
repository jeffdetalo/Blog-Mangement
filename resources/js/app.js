import loader from "vue-ui-preloader";
import vuetify from '../plugins/vuetify'
import VueAxios from 'vue-axios';
import axios from 'axios'
import Vue from 'vue';
import router from './components/route'
import App from './components/Main.vue'

require('./bootstrap');

// window.Vue = require('vue').default;
// Vue.component('main-component', require('./components/Main.vue').default);


Vue.use(VueAxios, axios)

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
    vuetify
});

Vue.use(loader);