<template>
    <li class="nav-item">
	    <a class="nav-link" :class="{active : active}" :href="url">
	        <slot></slot>
	        <span v-show="active" class="sr-only">(current)</span>
	    </a>
    </li>
</template> 

<script>

export default {
	props: {
		'url': {
			type: String,
			required: true,
		}, 
		'active': {
			type: Boolean,
			required: false,
			default: false
		}
	}
}

</script>