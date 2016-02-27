<template>
    <div class="jumbotron jumbotron-fluid" :class="'bg-'+type">
        <div class="container">
            <slot></slot>
        </div>
    </div>
</template> 

<script>

export default {
	props: {
        'type': {
            type: String,
            default: 'primary'
        }
    }
}

</script>