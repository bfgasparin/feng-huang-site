<template>
<p>
    <span class="fa fa-{{ type }} fa-lg"></span>
    <abbr title="{{ title }}">{{ abbr }}:</abbr> <a href="tel:{{ number }}"> {{ number }} </a>
</p>
</template> 

<script>

export default {

    props: {
        'type': {
            type: String,
            required: true
        },
        'abbr': {
            type: String,
            required: true
        },        
        'title': {
            type: String,
            required: true
        },
        'number': {
            type: String,
            required: true
        },                        
    }
}

</script>

<style lang="sass">
  // Requires font-awesome -- https://fortawesome.github.io/Font-Awesome/    
</style>