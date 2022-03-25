<template>
  <layout title="Contact Us | Victory Laguna Giving Site"
    :homeImgUrl="homeImgUrl"
    :logoUrl="logoUrl"
  >
  
    <div class="relative bg-white">
      <!-- Contact Us -->
      <div class="grid grid-cols-1">
        <div>
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Contact Us</h1>
          </div>
        </div>
        <div>
          <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <p>
              Victory Laguna is composed of six churches consectetur adipiscing elit, sed do eiusmod tempor incididunt:
            </p>
          </div>
        </div>
        <div>
          <div class="grid grid-cols-2 max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <!-- Victory Calamba -->
            <div class="mr-2 mb-2">
              <div class="max-w-7xl rounded-md lg:flex">
                <div class="flex-1 pr-6 py-4">
                  <h1 class="text-xl font-extrabold text-gray-900 uppercase">
                    Victory Calamba
                  </h1>
                  <p class="mt-2 text-gray-400 text-sm">Phone</p>
                  <p class="text-sm">(555) 123-4567</p>
                  <p class="mt-2 text-gray-400 text-sm">Email</p>
                  <p class="text-sm">calamba@victory.org.ph</p>
                  <p class="mt-2 text-gray-400 text-sm">Address</p>
                  <p class="text-sm">143 New St., Batong Malake, Los Baños, Laguna, 4030</p>
                </div>
              </div>
            </div>

            <!-- Victory Santa Cruz -->
            <div class="mr-2 mb-2">
              <div class="max-w-7xl rounded-md lg:flex">
                <div class="flex-1 pr-6 py-4">
                  <h1 class="text-xl font-extrabold text-gray-900 uppercase">
                    Victory Santa Cruz
                  </h1>
                  <p class="mt-2 text-gray-400 text-sm">Phone</p>
                  <p class="text-sm">(555) 123-4567</p>
                  <p class="mt-2 text-gray-400 text-sm">Email</p>
                  <p class="text-sm">santacruz@victory.org.ph</p>
                  <p class="mt-2 text-gray-400 text-sm">Address</p>
                  <p class="text-sm">143 New St., Batong Malake, Los Baños, Laguna, 4030</p>
                </div>
              </div>
            </div>

            <!-- Victory Los Baños -->
            <div class="mr-2 mb-2 mt-2">
              <div class="max-w-7xl rounded-md lg:flex">
                <div class="flex-1 pr-6 py-4">
                  <h1 class="text-xl font-extrabold text-gray-900 uppercase">
                    Victory Los Baños
                  </h1>
                  <p class="mt-2 text-gray-400 text-sm">Phone</p>
                  <p class="text-sm">(555) 123-4567</p>
                  <p class="mt-2 text-gray-400 text-sm">Email</p>
                  <p class="text-sm">losbanos@victory.org.ph</p>
                  <p class="mt-2 text-gray-400 text-sm">Address</p>
                  <p class="text-sm">143 New St., Batong Malake, Los Baños, Laguna, 4030</p>
                </div>
              </div>
            </div>

            <!-- Victory Siniloan -->
            <div class="mr-2 mb-2 mt-2">
              <div class="max-w-7xl rounded-md lg:flex">
                <div class="flex-1 pr-6 py-4">
                  <h1 class="text-xl font-extrabold text-gray-900 uppercase">
                    Victory Siniloan
                  </h1>
                  <p class="mt-2 text-gray-400 text-sm">Phone</p>
                  <p class="text-sm">(555) 123-4567</p>
                  <p class="mt-2 text-gray-400 text-sm">Email</p>
                  <p class="text-sm">siniloan@victory.org.ph</p>
                  <p class="mt-2 text-gray-400 text-sm">Address</p>
                  <p class="text-sm">143 New St., Batong Malake, Los Baños, Laguna, 4030</p>
                </div>
              </div>
            </div>

            <!-- Victory San Pablo -->
            <div class="mr-2 mb-2">
              <div class="max-w-7xl rounded-md lg:flex">
                <div class="flex-1 pr-6 py-4">
                  <h1 class="text-xl font-extrabold text-gray-900 uppercase">
                    Victory San Pablo
                  </h1>
                  <p class="mt-2 text-gray-400 text-sm">Phone</p>
                  <p class="text-sm">(555) 123-4567</p>
                  <p class="mt-2 text-gray-400 text-sm">Email</p>
                  <p class="text-sm">sanpablo@victory.org.ph</p>
                  <p class="mt-2 text-gray-400 text-sm">Address</p>
                  <p class="text-sm">143 New St., Batong Malake, Los Baños, Laguna, 4030</p>
                </div>
              </div>
            </div>

            <!-- Victory Cabuyao -->
            <div class="mr-2 mb-2">
              <div class="max-w-7xl rounded-md lg:flex">
                <div class="flex-1 pr-6 py-4">
                  <h1 class="text-xl font-extrabold text-gray-900 uppercase">
                    Victory Cabuyao
                  </h1>
                  <p class="mt-2 text-gray-400 text-sm">Phone</p>
                  <p class="text-sm">(555) 123-4567</p>
                  <p class="mt-2 text-gray-400 text-sm">Email</p>
                  <p class="text-sm">cabuyao@victory.org.ph</p>
                  <p class="mt-2 text-gray-400 text-sm">Address</p>
                  <p class="text-sm">143 New St., Batong Malake, Los Baños, Laguna, 4030</p>
                </div>
              </div>
            </div>

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