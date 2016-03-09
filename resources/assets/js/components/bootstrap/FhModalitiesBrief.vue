<template>
    <div class="modality">
        <div class="row">
            <div v-for="modality in list" class="col-lg-4 center-block">
                <fh-modality-brief :image-url="modality.imageUrl" :name="modality.name" :summary="modality.summary" :button-text="buttonText">
            </div>
        </div>
    </div>
</template> 

<script>

import FhModalityBrief  from './FhModalityBrief.vue';

export default {

    components: {
        FhModalityBrief
    },

    props: ['list', 'buttonText'],

    created() {
        this.list = JSON.parse(this.list);
    }

}

</script>

<style type="scss">

.modality {
  margin-bottom: 1.5rem;  
  text-align: center;
}
.modality h2 {
  font-weight: normal;
}
.modality p {
  margin-top: .75rem;
  margin-right: .75rem;
  margin-left: .75rem;
}

</style>