window.Vue = require('vue');
Vue.component('slider', require('./components/partials/Slider.vue').default);

const app = new Vue({
    el: '#root',
    //render: h => h(App)
});