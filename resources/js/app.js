import './bootstrap';
import { createApp } from 'vue'
import Prueba from '@/components/Prueba.vue'

import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const vuetify = createVuetify({
    components,
    directives,
  })

window.app = createApp({
    setup() {
        return {
            message: 'Welcome to Your Vue.js App',
        };
    },
    components: {
        Prueba
    },
}).use(vuetify).mount('#app');