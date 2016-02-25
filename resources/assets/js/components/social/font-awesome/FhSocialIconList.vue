<template>
    <strong>{{ text }}:</strong>
    <ul class="social-icons">
      <slot></slot>
    </ul>
</template> 

<script>

export default {

    props: {
        'text': {
            type: String,
            required: true
        },
    }
}

</script>

<style lang="sass">
  
  .social-icons {
    list-style: none;
    margin: 0;
    padding: 0;
    
  }
    
</style>