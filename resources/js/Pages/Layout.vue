<template>
  <div id="initial-viewport" class="h-screen">
    <div class="grid grid-cols-2 h-full overflow-hidden">
      <div class="bg-cover">
        <!-- Left Side -->
        <div class="grid grid-cols-1 mx-auto">
          <div class="flex justify-center mt-20">
            <img :src="mapImgUrl" class="h-5/6" alt="Map Image">
          </div>

          <!-- <div class="w-3/5 mx-auto grid grid-cols-1 mt-10">
            <div class="flex justify-center mt-10">
              <p class="w-full italic text-5xl font-bold">
                ""
              </p>
            </div>
            <div class="flex justify-center mt-4">
              <p class="w-full italic text-center text-2xl font-semibold">
                ... for God loves a cheerful giver.
              </p>
            </div>
            <div class="flex justify-center mt-4">
              <p class="w-full italic text-right">
                2 Corinthians 9:7
              </p>
            </div>
          </div>
          <div class="flex justify-center mt-20">
            <div class="hidden md:flex items-center">
              <a href="#" class="whitespace-nowrap inline-flex items-center justify-center px-6 py-4 border border-transparent shadow-sm text-base font-medium text-white bg-victory-blue cursor-auto"> 
                VICTORY LAGUNA GIVING SITE
              </a>
            </div>
          </div> -->
        </div>
      </div>
      <div class="relative bg-white overflow-y-scroll">
        <!-- Right Side -->
        <div id="nav-links" class="max-w-7xl mx-auto px-4 sm:px-6">
          <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
              <a href="#" 
                class="ml-6 whitespace-nowrap inline-flex items-center justify-center px-6 py-1 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-victory-blue hover:bg-victory-blue/75"
                @click.prevent="goToPage('/')"
              > 
                Who We Are
              </a>
              <a href="#" 
                class="ml-6 whitespace-nowrap inline-flex items-center justify-center px-10 py-1 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-victory-blue hover:bg-victory-blue/75"
                @click.prevent="goToPage('/give')"
              > 
                Give
              </a>
              <a 
                href="#" 
                class="ml-6 whitespace-nowrap inline-flex items-center justify-center px-6 py-1 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-victory-blue hover:bg-victory-blue/75"
                @click.prevent="goToPage('/contact-us')"
              > 
                Contact Us 
              </a>
            </div>
          </div>
        </div>

        <!-- Dynamic -->
        <slot/>

      </div>
    </div>
  </div>
</template>


<script>
  export default {
    props: ['title', 'mapImgUrl', 'homeImgUrl', 'logoUrl'],

    watch: {
      title: {
        immediate: true,
          handler(title) {
          document.title = title
        },
      },
    },

    computed: {
      homeImageUrl() {
        return `url(${this.homeImgUrl})`; 
      },

      mapImageUrl() {
        return `url(${this.mapImgUrl})`; 
      }
    },

    methods: {
      goToPage(url) {
        this.$inertia.visit(url);
      }
    }
  }
</script> 