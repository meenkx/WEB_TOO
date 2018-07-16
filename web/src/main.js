import Vue from 'vue'
import App from './App.vue'
import router from './router'

require('../node_modules/bootstrap/dist/css/bootstrap.min.css');
require('../node_modules/bootstrap/dist/js/bootstrap.min.js');
require('../node_modules/popper.js/dist/popper.js');

Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
