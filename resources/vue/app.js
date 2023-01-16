require('./bootstrap');
window.Vue = require('vue').default;

import store from './store';
import router from './routes';
import Toast, {POSITION} from "vue-toastification";
import "vue-toastification/dist/index.css";

Vue.use(Toast, {
    timeout: 10000,
    position: POSITION.BOTTOM_CENTER
});

const app = new Vue({
    el: '#app',
    router,
    store
});
