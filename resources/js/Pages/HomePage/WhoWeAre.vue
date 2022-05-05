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
            <h1 class="text-base font-semibold">
              We exist to Honor God and Make Disciples.
            </h1>
          </div>
        </div>
        <div>
          <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <p>
              We desire to honor God in every area of life. Our starting point, goal, and motive is the honor of God. This is foundational for understanding why we do what we do. It is all about Him, not us.
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