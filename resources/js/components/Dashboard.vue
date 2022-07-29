<template>
  <div>
    <Sidebar/>
    <Footer/>
    <Logo/>

    <div class="post">
      <header class="w3-center">
        <h3>THIS IS MY BLOG</h3>
        <h5>Title description, <span class="w3-opacity">July 29, 2022</span></h5>
      </header>

      <div class="w3-row">
        <div class="w3-col l8 s12">
          <div class="w3-card-4 w3-margin w3-white">
              <img src="../../../public/img/img2.jpg" alt="Nature" style="width:100%">
              
              <div class="w3-container">
                <h3><b>THIS IS A STATIC DATA</b></h3>
                <h5>Title description, <span>August, 2022</span></h5>
              </div>

              <div class="w3-container">
                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                  tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p> 
              </div>

            </div>
          </div>
        </div>
    </div>   
  </div>
</template>

<script>
import Footer from './Footer.vue'
import Sidebar from './Sidebar.vue'
import Logo from './Logo.vue'

  export default {
    components: {
        Sidebar,
        Footer,
        Logo,
    }
}
</script>

<style>
    .post
    {
        margin-top: 70px;
        display: flex;
        flex-direction: column;
        margin-left: 284px;
        margin-right: 59px;
    }

    .post header
    {
        margin-right: 55px;
        margin-top: 135px;
    }

    .post img
    {
        height: 400px;
    }

</style>
