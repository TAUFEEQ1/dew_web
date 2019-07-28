<template>
    <div class="container-fluid">
        <div>
            <transition name="fade">
                <home-main></home-main>
            </transition>
        </div>
    </div>
</template>

<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

<script>
    import Homemain from './components/home_main';
    export default{
        name:'App',
        components:{'home-main':Homemain}
    }
</script>