
require('./bootstrap');
window.Vue = require('vue');

import router from './routes.js'
import adminMain from './components/admin/AdminMaster.vue'

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);

// v-form
import { Form, HasError, AlertError } from 'vform'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Window.form = Form;


const app = new Vue({
    el: '#app',
    router,
    component:{
      adminMain
    },
});

// export default router;

