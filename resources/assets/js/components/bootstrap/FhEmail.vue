<template>
    <p>
        <span class="fa fa-envelope fa-lg"></span><a href="mailto:{{ email }}">{{ email }}</a>
    </p>
</template> 

<script>

export default {

    props: {
        'email': {
            type: String,
            required: true
        }
    }
}

</script>

<style lang="sass">
  // Requires font-awesome -- https://fortawesome.github.io/Font-Awesome/    
</style>