<template>
    <section class="tour_pkg">
            <h2 class="text-center mb-2">Travel Packages</h2>
            <carousel :navigationEnabled="true" class="mt-2" paginationActiveColor="#42b983" paginationColor="#b2ebd1" perPage=3>
                <slide v-for="(i,index) in 3" :key="'c'+i" class="pl-4">
                <b-card :img-src="'/images/' + images[index]" img-alt="Image" img-top tag="article" style="max-width: 20rem;" class="mb-1 crd">
                    <b-card-text>
                        <h3>{{ captions[index][0] }}</h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consec.
                    </b-card-text>
                    <b-button href="#" variant="outline-success"> For Only {{captions[index][1]}}</b-button>
                </b-card>
                </slide>
            </carousel>
        </section>
</template>
<style>
    .tour_pkg{
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
 
</style>
<script>
    export default{
        name:'Hometourpackages',
        data(){
            return {
                images:['lioness.jpg','chimpazee.jpg','lioness.jpg'],
                captions:[['Lion Tracking','$1200'],['Ape Trekking','$5000'],['Canivores','$4300']]
            }
        }
    }
</script>