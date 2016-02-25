<template>
    <li>
        <a class="social-icons-item" href="{{ url }}" target="_blank">
          <span>{{ type }}</span>
        </a>
    </li>
</template> 

<script>

export default {

    props: {
        'type': {
            type: String,
            required: true
        },
        'user': {
            type: String,
            required: true
        }
    },


    data() {
        return {
            'urls': {
                'facebook': 'http://www.facebook.com',
                'twitter': 'http://www.twitter.com',
                'youtube': 'http://www.youtube.com',
            }
        }
    },

    computed: {
        'url': function () {
            return this.urls[this.type] + '/' + this.user;
        }

    },
}

</script>

<style lang="sass">
    // Requires font-awesome -- https://fortawesome.github.io/Font-Awesome/

    @mixin font-smoothing() {
    // Font antialising on Mac OS X
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }

    @mixin social-form(){
        width: 2.5em;
        height: 2.5em;
        border-radius: 50%;
        text-decoration: none;
        color: white;
        text-align: center;
    }

    .social-icons {
        li {
          display: inline-block;
          margin: 0 0.25em;
        }
        
        span {
          display: block;
          width: 0; height: 0;
          overflow: hidden;
        }
        
        .social-icons-item {
          display: inline-block;
        }

        a {
            display-inline: inline-block;
            @include social-form();
        }

    }
    
    .social-icons-item {
        &:before {
            font: 1.5em/1.75 "FontAwesome";
            @include font-smoothing();
        }

        $icons: (
            twitter:  (char: "\f099", color: #55acee),
            google:   (char: "\f0d5", color: #dd4b39),
            facebook: (char: "\f09a", color: #3b5998),
            linkedin: (char: "\f0e1", color: #0977b5),
            dribbble: (char: "\f17d", color: #ea4c89),
            tumblr:   (char: "\f173", color: #42596F),
            youtube:  (char: "\f167", color: #cc181e),
        );

        @each $social, $icon in $icons {
          
          &[href*="#{$social}"] {
            background-color: map-get($icon, color);
            &:before {
                content: map-get($icon, char);
            }
          }
          
        }        
    }
</style>