<template>
    <b-navbar toggleable="lg" class="main_nav">
        <b-navbar-brand href="#">Dew Tours &amp; Travel</b-navbar-brand>
        <b-navbar-nav>
            <b-nav-item-dropdown text="Destination" left>
                <b-dropdown-item href="#">Destination 1</b-dropdown-item>
                <b-dropdown-item href="#">Destination 2</b-dropdown-item>
                <b-dropdown-item href="#">Destination 3</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item href="#">News/Blog</b-nav-item>
            <b-nav-item-dropdown text="Tour Packages" right>
                <b-dropdown-item href="#">Package 1</b-dropdown-item>
                <b-dropdown-item href="#">Package 2</b-dropdown-item>
                <b-dropdown-item href="#">Package 3</b-dropdown-item>
            </b-nav-item-dropdown>
            <b-nav-item href="#">Charity</b-nav-item>
            <b-nav-item href="#">About Us</b-nav-item>
      </b-navbar-nav>
    </b-navbar>
</template>
<style scoped>
    .main_nav{
        background: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>

<script>
export default {
    name:'Mainnav',
    components:{}
}
</script>
