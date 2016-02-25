<template>
    <footer class="text-muted bg-faded main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-5 col-xs-12 main-footer-item">
                <slot name="left"></slot>
          </div>  
          <div class="col-lg-3 main-footer-item">
                <slot></slot>
          </div>
          <div class="col-lg-3 main-footer-item"> 
            <slot name="right"></slot>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p class="pull-xs-right">
              <a href="#">{{ backToTop }}</a>
            </p>
          </div> 
        </div>
      </div>
    </footer>
</template> 

<script>

export default {

    props: {
      'backToTop': {
            type: String,
            required: true
        },
    },   
}

</script>

<style lang="sass">

.main-footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.main-footer .social-icons {
  padding-top: 1rem;

}

.main-footer .fa {
    margin-right: 1rem;
}

.main-footer p {
    margin-bottom: 0rem;
}

</style>