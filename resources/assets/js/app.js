window.Tether = require('tether');

window.$ = window.jQuery = require('jquery')

require('bootstrap');

var Vue = require('vue');

import FhFooter from './components/bootstrap/FhFooter.vue';
import FhSocialIconList from './components/social/font-awesome/FhSocialIconList.vue';
import FhSocialIconItem from './components/social/font-awesome/FhSocialIconItem.vue';
import FhTelephone from './components/bootstrap/FhTelephone.vue';
import FhEmail from './components/bootstrap/FhEmail.vue';
import FhNavBar from './components/bootstrap/FhNavBar.vue';
import FhNavBarItem from './components/bootstrap/FhNavBarItem.vue';

new Vue ({
    el: 'body',

    components: { FhFooter, FhSocialIconList, FhSocialIconItem, FhTelephone, FhEmail, FhNavBar, FhNavBarItem},
})