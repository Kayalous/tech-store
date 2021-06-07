require('./bootstrap');

require('alpinejs');

import Vue from 'vue'
import {createInertiaApp} from '@inertiajs/inertia-vue'
import {plugin as InertiaPlugin} from '@inertiajs/inertia-vue';
import PortalVue from 'portal-vue';
import VueTyperPlugin from 'vue-typer'

import * as VueGoogleMaps from 'vue2-google-maps'
import VueLodash from 'vue-lodash'
import lodash from 'lodash'

import 'hover.css'
import VueScrollProgressBar from '@guillaumebriday/vue-scroll-progress-bar'

import VueCompositionAPI from '@vue/composition-api'
import JwPagination from 'jw-vue-pagination';
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueToast from 'vue-toast-notification';
// Import one of the available themes
//import 'vue-toast-notification/dist/theme-default.css';
import 'vue-toast-notification/dist/theme-sugar.css';

Vue.use(VueToast);


Vue.use(VueAxios, axios)


Vue.component('jw-pagination', JwPagination);
Vue.use(VueLodash, {name: 'custom', lodash: lodash})

Vue.use(VueCompositionAPI)

Vue.use(VueScrollProgressBar)


Vue.use(VueTyperPlugin)

Vue.mixin({methods: {route}});

Vue.config.productionTip = false;
Vue.use(VueGoogleMaps, {
    load: {
        key: 'AIzaSyCWoaGpHk_YD2wp2XwEmIXToRdY_f9j5zs',
        libraries: 'places',
    }
});

Vue.use(InertiaPlugin);
Vue.use(PortalVue);
createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({el, app, props}) {
        new Vue({
            render: h => h(app, props),
        }).$mount(el)
    },
})
