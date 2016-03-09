var Vue = require('vue');

import FhFullPainel  from './../components/bootstrap/FhFullPainel.vue';
import FhCitations  from './../components/bootstrap/FhCitations.vue';
import FhModalitiesBrief  from './../components/bootstrap/FhModalitiesBrief.vue';

new Vue ({
    el: '#welcome',

    data: {
        'citations': [
            {imageUrl: 'images/dalai-lama.jpg',  content: 'É muito melhor perceber um defeito em si mesmo, do que dezenas nos outros, poia o seu defeito, você pode mudar.', author: {name: 'Dalai Lama', description: 'Monge Budista'}, first: true},
            {imageUrl: 'images/aelson.jpg', content: 'O maior prazer de um homem sábio é se passar por tolo diante de um tolo que quer se passar por sábio', author: {name: 'Cofúsio', description: null}, first: false}
        ],

        'modalities': [
            {'imageUrl': 'images/wudang-kung-fu.jpg', 'name': 'Wudang Kung Fu', 'summary': 'Wudang Summary'},
            {'imageUrl': 'images/wudang-kung-fu.jpg', 'name': 'Wudang Kung Fu', 'summary': 'Wudang Summary'},
            {'imageUrl': 'images/wudang-kung-fu.jpg', 'name': 'Wudang Kung Fu', 'summary': 'Wudang Summary'},
            {'imageUrl': 'images/wudang-kung-fu.jpg', 'name': 'Wudang Kung Fu', 'summary': 'Wudang Summary'},
            {'imageUrl': 'images/wudang-kung-fu.jpg', 'name': 'Wudang Kung Fu', 'summary': 'Wudang Summary'},
        ]

    },

    components: {FhModalitiesBrief, FhFullPainel, FhCitations}
})