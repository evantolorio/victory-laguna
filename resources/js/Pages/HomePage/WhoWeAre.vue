<template>
  <layout title="Who We Are | Victory Laguna Giving Site"
    :homeImgUrl="homeImgUrl"
    :logoUrl="logoUrl"
  >
  
    <div class="relative bg-white">
      <!-- Who We Are -->
      <div class="grid grid-cols-1">
        <div>
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Who We Are</h1>
          </div>
        </div>
        <div>
          <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            </p>
          </div>
        </div>
        <div>
          <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <p>
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
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

    props: ['homeImgUrl', 'logoUrl'],

    methods: {

    }
  }
</script> 