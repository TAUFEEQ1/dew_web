<template>
    <div class="container-fluid">
        <main-nav></main-nav>
        <section class="welcome_sect container-fluid">
            <div class="col-7 vertical-center">
                <h1 style="color:white;" class="text-center">Consectetur adipiscing elit!</h1>
                <div style="position:relative;left:33%">
                    <b-btn variant="success" >Gallery</b-btn>
                    <b-btn variant="success">Travel deals</b-btn>
                </div>
            </div>
        </section>
        <home-tour-packages></home-tour-packages>
        <section class="container-fluid curated_tours">
            <h2 class="text-center mb-2">Curated tours</h2>
            <div class="row mt-2">
                <div class="col-4" v-for="(k,currIndex) in 4" :key="'k'+ k">
                  <figure class="imghvr-push-up">
                    <img :src="'/images/'+ albums[currIndex]" class="img-thumbnail">
                    <figcaption style="background:green;">
                      <h3 class="text-center">Album {{k}}</h3>
                      <p class="text-justify">
                        Consectetur adipisicing elit. Veniam a quia consectetur ipsum.
                        <b-btn variant="outline-light" @click="changealbum(currIndex)">Photos</b-btn>
                      </p>
                    </figcaption>
                  </figure>
                </div>
                <gallery :images="albumImages[curIndex]" :index="index" @close="index = null"></gallery>
            </div>
        </section>
        <section class="container">
          <h2 class="text-center mt-2">News Feed.</h2>
          <div class="row">
            <div class="col-5" style="max-height:400px; overflow-y:scroll;">
              <a class="twitter-timeline" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a>
            </div>
            <div class="col-7">
              <ul class="list-unstyled" style="height:400px; overflow-y:scroll;">
                <li v-for="l in 4" :key="'l'+l" class="mb-1">
                  <b-card no-body class="overflow-hidden">
                    <b-row no-gutters>
                      <b-col md="4">
                        <b-card-img src="https://picsum.photos/400/400/?image=20" class="rounded-0"></b-card-img>
                      </b-col>
                      <b-col md="8">
                        <b-card-body :title="'News '+l">
                          <b-card-text>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                            Optio accusamus nihil id a saepe.
                          </b-card-text>
                        </b-card-body>
                      </b-col>
                    </b-row>
                  </b-card>
                </li>
              </ul>
            </div>
          </div>
        </section>
    </div>
</template>
<style scoped>
    .welcome_sect{
        background:url('/images/olive_tree.jpg') no-repeat;
        background-size: 100%;
        height: 500px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        left: 20%;
    }
    .chd{
        display: inline-block;
    }
    .VueCarousel-slide {
        position: relative;
        min-height: 100px;
    }
    .curated_tours{
        background: url('/images/antelope_bg.jpg');
        background-size: 100%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
  [class^='imghvr-'],[class*=' imghvr-'] {
    background:transparent;
  }
</style>

<script>
    import Mainnav from './MainNav';
    import Hometourpackages from './home_tour_packages'
    import VueGallerySlideshow from 'vue-gallery-slideshow';
    export default{
        name:'Homemain',
        components:{
            'main-nav':Mainnav,
            'home-tour-packages':Hometourpackages,
            'gallery':VueGallerySlideshow
        },
        data(){
            return{
                slide:0,
                sliding:null,
                index:null,
                curIndex:0,
                albums:['chimpazee.jpg','lioness.jpg','lioness.jpg','lioness.jpg'],
                albumImages:[['/images/lioness.jpg','/images/chimpazee.jpg'],['/images/lioness.jpg','/images/chimpazee.jpg'],
                ['/images/lioness.jpg','/images/chimpazee.jpg'],['/images/lioness.jpg','/images/chimpazee.jpg']
                ]
            }
        },
        methods:{
            onSlideStart(slide) {
                this.sliding = true
            },
            onSlideEnd(slide) {
                this.sliding = false
            },
            changealbum(index){
              this.index = 1;
              this.curIndex = index; 
            }
        }
    }
</script>