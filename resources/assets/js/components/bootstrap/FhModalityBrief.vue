<template>
    <img class="img-circle" :src="imageUrl" alt="name" width="140" height="140">
    <h2>{{ name }}</h2>
    <p>{{ summary }}</p>
    {{ data }}
    <p><a class="btn btn-info" href="#" role="button"> {{ buttonText }} &raquo; </a></p>
</template> 

<script>

export default {
    props: ['imageUrl', 'name', 'summary', 'buttonText']
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