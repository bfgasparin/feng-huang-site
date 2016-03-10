<script>

import FhFullPainel  from './bootstrap/FhFullPainel.vue';
import FhCitations  from './bootstrap/FhCitations.vue';
import FhModalitiesBrief  from './bootstrap/FhModalitiesBrief.vue';

export default {

    components: {
        FhFullPainel, FhCitations, FhModalitiesBrief
    },

    data() {
        return { 
            'citations': [
                {imageUrl: 'images/dalai-lama.jpg',  content: 'É muito melhor perceber um defeito em si mesmo, do que dezenas nos outros, poia o seu defeito, você pode mudar.', author: {name: 'Dalai Lama', description: 'Monge Budista'}, first: true},
                {imageUrl: 'images/aelson.jpg', content: 'O maior prazer de um homem sábio é se passar por tolo diante de um tolo que quer se passar por sábio', author: {name: 'Cofúsio', description: null}, first: false}
            ],
        };
    },
}

</script>
