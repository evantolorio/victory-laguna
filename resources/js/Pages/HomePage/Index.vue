<template>
  <layout title="Home | Victory Laguna Giving Site"
    :homeImgUrl="homeImgUrl"
    :logoUrl="logoUrl"
  >

    <div id="giving-categories" class="relative bg-white"
      :style="{'height': `${givingCategoryHeight}px`}"
    >
      <!-- Select Type of Giving -->
      <div class="grid grid-cols-2 h-full">
        <div class="">
          <!-- Buttons -->
          <div class="text-center mt-20">
            <h1 class="text-xl font-bold tracking-tight text-victory-blue">
              Select your type of giving:
            </h1>
          </div>

          <!-- Category Buttons -->
          <div class="grid grid-cols-1 mx-auto mt-10">
            <div class="flex justify-center">
              <a href="#" class="w-3/5 mb-2 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border-2 border-victory-blue
                rounded-lg shadow-sm text-base text-victory-blue bg-white hover:text-white hover:bg-victory-blue"> 
                Tithes and Offering
              </a>
            </div>
            <div class="flex justify-center">
              <a href="#" class="w-3/5 mb-2 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border-2 border-victory-blue
                rounded-lg shadow-sm text-base text-victory-blue bg-white hover:text-white hover:bg-victory-blue"> 
                Missions
              </a>
            </div>
            <div class="flex justify-center">
              <a href="#" class="w-3/5 mb-2 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border-2 border-victory-blue
                rounded-lg shadow-sm text-base text-victory-blue bg-white hover:text-white hover:bg-victory-blue"> 
                Every Nation Campus 
              </a>
            </div>
            <div class="flex justify-center">
              <a href="#" class="w-3/5 mb-2 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border-2 border-victory-blue
                rounded-lg shadow-sm text-base text-victory-blue bg-white hover:text-white hover:bg-victory-blue"> 
                Every Nation Seminary
              </a>
            </div>
            <div class="flex justify-center">
              <a href="#" class="w-3/5 mb-2 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border-2 border-victory-blue
                rounded-lg shadow-sm text-base text-victory-blue bg-white hover:text-white hover:bg-victory-blue"> 
                Real LIFE
              </a>
            </div>
            <div class="flex justify-center">
              <a href="#" class="w-3/5 mb-2 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border-2 border-victory-blue
                rounded-lg shadow-sm text-base text-victory-blue bg-white hover:text-white hover:bg-victory-blue"> 
                Others
              </a>
            </div>
          </div>
        </div>

        <div id="phone-div" class="bg-cover"
          :style="{'background-image': phoneImageUrl}"
        >
        </div>
      </div>
    </div>

  </layout>

</template>


<script>
  import Layout from '../Layout';

  export default {
    components: {
      Layout,
    },

    props: ['homeImgUrl', 'phoneUrl', 'logoUrl'],

    data() {
      return {
        givingCategoryHeight: 0
      }
    },

    computed: {
      phoneImageUrl() {
        return `url(${this.phoneUrl})`; 
      }
    },

    methods: {

    },

    mounted() {
      const navLinksHeight = document.querySelector('#nav-links').offsetHeight;
      const initialViewportHeight = document.querySelector('#initial-viewport').offsetHeight;

      this.givingCategoryHeight = initialViewportHeight - navLinksHeight;
    }
  }
</script> 