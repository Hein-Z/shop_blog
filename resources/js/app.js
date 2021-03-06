/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./app.js');
require('./custom.js');
require('./owl.js');
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
import VueInsProgressBar from 'vue-ins-progress-bar'
const options = {
    position: 'fixed',
    show: true,
    height: '3px'
}


window.Vue = require('vue');
Vue.use(VueToast);
Vue.use(VueInsProgressBar, options)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('products-table', require('./components/ProductsTable.vue').default);
// Vue.component('invoice', require('./components/Invoice.vue').default);
Vue.component('checkout-invoice', require('./components/CheckoutInvoice.vue').default);
Vue.component('cart', require('./components/Cart.vue').default);
Vue.component('product-details', require('./components/ProductDetails').default);
Vue.component('pagination', require('laravel-vue-pagination'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
