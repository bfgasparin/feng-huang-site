<template>
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li v-for="(index, citation) in list"  data-target="#myCarousel" :data-slide-to="index" :class="{active : citation.first}"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item" v-for="(index, citation) in list" :class="{active : citation.first}">
          <img class="img first-slide" :src="citation.imageUrl" alt="First slide">
          <div class="container">
            <div class="carousel-caption" :class="position(index)">
              <blockquote class="blockquote" :class="position(index)">
                <h1 class="m-b-0">{{ citation.content }}</p>
                <footer class="blockquote-footer text-info h2">{{ citation.author.name }} - <cite title="Source Title">{{ citation.author.description }}</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel --> 
</template> 

<script>

export default {

    props: {
        'list': {
            type: Array,
            required: true
        }
    },
    data: function () {
        return { 
            'position_classes': ['text-xs-left', '', 'text-xs-right']
        }
    },
    'methods': {
        position: function(index) {
            return this.position_classes[index % this.position_classes.length ];
        }
    }    

}

</script>