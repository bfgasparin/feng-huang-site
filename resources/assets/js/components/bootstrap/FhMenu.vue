<template>
    <nav class="navbar navbar-full navbar-dark bg-primary">
      <div class="container"> 
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
          &#9776;
        </button>
        <div class="collapse nav-inline navbar-toggleable-xs" id="navbar-header">
          <a class="navbar-brand hidden hidden-xs-down" href="/">
              <img :src="logo" alt="{{ title }}" style="width: 4rem;">
          </a>
          <a class="navbar-brand hidden hidden-lg-down p-t-1" href="/#"><h1>{{ title }}</h1></a>
          <ul class="nav navbar-nav pull-xs-right h6 p-t-2">
            <slot></slot>
          </ul>
        </div>
      </div>
    </nav> <!-- /navbar -->
</template> 

<script>

export default {
    props: {
        'title': {
            type: String,
            required: true
        },
        'logo': {
            type: String,
            required: true  
        }
    },
}

</script>