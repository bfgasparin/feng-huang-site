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
import FhCitations  from './components/bootstrap/FhCitations.vue';
import FhFullPainel  from './components/bootstrap/FhFullPainel.vue';

new Vue ({
    el: 'body',

    data: {
    	items: [
    		{current: true, name: 'Home'},
    		{current: true, name: 'O Mestre'},
    		{current: true, name: 'Modalidade'},
    		{current: true, name: 'Contato'},
    		{current: true, name: 'Teste'}
    	],
        'citations': [
            {imageUrl: 'images/dalai-lama.jpg',  content: 'É muito melhor perceber um defeito em si mesmo, do que dezenas nos outros, poia o seu defeito, você pode mudar.', author: {name: 'Dalai Lama', description: 'Monge Budista'}, first: true},
            {imageUrl: 'images/aelson.jpg', content: 'O maior prazer de um homem sábio é se passar por tolo diante de um tolo que quer se passar por sábio', author: {name: 'Cofúsio', description: null}, first: false}
        ]
    },

    components: { FhFooter, FhSocialIconList, FhSocialIconItem, FhTelephone, FhEmail, FhNavBar, FhNavBarItem, FhCitations, FhFullPainel},
})