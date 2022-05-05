<template>
  <div class="relative bg-gray-50 min-h-full">

    <!-- Navigation -->
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center md:justify-start md:space-x-10">
          <!-- Logo -->
          <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="#">
              <img class="h-16 w-auto" :src="logoUrl" alt="Victory Logo">
            </a>
          </div>
          
          <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
            <a href="#" 
              class="ml-6 whitespace-nowrap inline-flex items-center justify-center px-6 py-1 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-victory-blue hover:bg-victory-blue/75"
              @click.prevent="goToPage('/who-we-are')"
            > 
              Who We Are
            </a>
            <a href="#" 
              class="ml-6 whitespace-nowrap inline-flex items-center justify-center px-10 py-1 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-victory-blue hover:bg-victory-blue/75"
              @click.prevent="goToPage('/')"
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
    </header>
    

    <!-- Content -->
    <div class="max-w-7xl mx-auto py-8 sm:px-6 h-screen">
      <div class="grid grid-cols-3">

        <!-- Alert Messages -->
        <div v-if="payMayaGivingStatus == 'success'" class="col-span-3 rounded-lg mb-6 overflow-hidden">
          <div class="px-6 py-6 bg-emerald-50">
            <div class="flex">
              <div class="">
                <svg class="h-6 w-6 text-emerald-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-2">
                <h1 class="text-base font-bold text-emerald-800">Giving Success</h1>
                <p class="text-sm text-emerald-600 mt-2 mb-4">Giving through PayMaya is successful. Thank you for your generosity!</p>
                <a @click.prevent="payMayaGivingStatus = ''"
                  href="#!" class="text-sm text-emerald-800 font-semibold"
                >
                  Dismiss
                </a>
              </div>
            </div>
          </div>
        </div>

        <div v-if="payMayaGivingStatus == 'failure'" class="col-span-3 rounded-lg mb-6 overflow-hidden">
          <div class="px-6 py-6 bg-rose-50">
            <div class="flex">
              <div class="">
                <svg class="h-6 w-6 text-rose-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-2">
                <h1 class="text-base font-bold text-rose-800">Giving Failed</h1>
                <p class="text-sm text-rose-600 mt-2 mb-4">Giving through PayMaya failed. Please take note of your reference number and contact our finance officer for further details.</p>
                <a @click.prevent="payMayaGivingStatus = ''"
                  href="#!" class="text-sm text-rose-800 font-semibold"
                >
                  Dismiss
                </a>
              </div>
            </div>
          </div>
        </div>

        <div v-if="payMayaGivingStatus == 'cancel'" class="col-span-3 rounded-lg mb-6 overflow-hidden">
          <div class="px-6 py-6 bg-amber-50">
            <div class="flex">
              <div class="">
                <svg class="h-6 w-6 text-amber-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-2">
                <h1 class="text-base font-bold text-amber-800">Giving Canceled</h1>
                <p class="text-sm text-amber-600 mt-2 mb-4">Giving through PayMaya canceled.</p>
                <a @click.prevent="payMayaGivingStatus = ''"
                  href="#!" class="text-sm text-amber-800 font-semibold"
                >
                  Dismiss
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Giving Image -->
        <div class="bg-cover rounded shadow-md grayscale"
          :style="{'background-image': givingImageUrl}"
        >
        </div>

        <!-- Giving Input -->
        <div class="col-span-2 rounded-lg shadow-md ml-6 overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="">
              <h1 class="text-3xl font-bold text-gray-900">Give</h1>
              <p class="mt-1 text-sm text-gray-600">
                Giving online is easy and secure.
              </p>
            </div>
            <div class="grid grid-cols-5 gap-6 pb-6">
              <div class="col-span-5 sm:col-span-5 space-y-1 mb-4">
                <!-- Two-step form navigator -->
                <div class="flex flex-row">
                  <div class="basis-1/2">
                    <div class="w-full flex justify-center py-2 rounded-t cursor-pointer"
                      :class="activeTab == 'general' 
                        ? 'text-victory-blue border-victory-blue border-b-2 bg-victory-blue/25' 
                        : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900 border-gray-200 border-b-2'"
                      @click.prevent="activeTab = 'general'"
                    >
                      <a href="#" class="text font-medium">
                        General Information
                      </a>
                    </div>
                  </div>
                  <div class="basis-1/2">
                    <div class="w-full flex justify-center py-2 rounded-t cursor-pointer"
                      :class="activeTab == 'specific' 
                        ? 'text-victory-blue border-victory-blue border-b-2 bg-victory-blue/25' 
                        : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900 border-gray-200 border-b-2'"
                      @click.prevent="proceedToGiving"
                    >
                      <a href="#" class="text font-medium">
                        Giving Information
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- General Information -->
              <div v-if="activeTab == 'general'"
                id="general-information" 
                class="col-span-5"
              >
                <div class="grid grid-cols-5 gap-6">

                  <!-- Location -->
                  <div class="col-span-5 sm:col-span-3">
                    <label for="location" class="block text-sm font-medium text-gray-700">Where do you like to give?</label>
                    <select v-model="giveToCenter"
                      id="location" name="location" autocomplete="location-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    >
                      <option disabled value="">Please select center</option>
                      <option value="cabuyao">Victory Cabuyao</option>
                      <option value="calamba">Victory Calamba</option>
                      <option value="los_banos">Victory Los Baños</option>
                      <option value="san_pablo">Victory San Pablo</option>
                      <option value="sta_cruz">Victory Santa Cruz</option>
                      <option value="siniloan">Victory Siniloan</option>
                    </select>
                  </div>

                  <!-- Giving Channel -->
                  <div class="col-span-5 sm:col-span-3">
                    <label for="channel" class="block text-sm font-medium text-gray-700">How would you like to give?</label>
                    <select v-model="giveThruChannel"
                      id="channel" name="channel" autocomplete="channel-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    >
                      <option disabled value="">Please select payment channel</option>
                      <option value="credit_debit">Credit/Debit Card</option>
                      <option value="gcash">GCash</option>
                      <option value="paymaya">PayMaya</option>
                    </select>
                  </div>

                  <div class="col-span-5 sm:col-span-3">
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input v-model="dataPrivacy"
                          id="data-privacy" name="data-privacy" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                        >
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="data-privacy" class="font-medium text-gray-700">Data Privacy</label>
                        <p class="text-gray-500">
                          By providing my information, I am allowing Victory to process my information and I would like to receive an update on my ministry support.
                        </p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Giving Information -->
              <div v-else 
                id="specific-information" 
                class="col-span-5"
              >
                <!-- Credit/Debit Giving Channel -->
                <div v-if="giveThruChannel == 'credit_debit'" class="grid grid-cols-6 gap-6">
                  
                  <div class="col-span-6">
                    <h1 class="text-center font-bold text-gray-900">{{ centerDetails['name'] }}</h1>
                  </div>
                  <div class="col-span-6 sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input v-model="firstName"
                      type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    >
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input v-model="lastName"
                      type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    >
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="mobile-no" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                    <input v-model="mobileNo"
                      type="text" name="mobile-no" id="mobile-no" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    >
                  </div>

                  <div class="col-span-6 sm:col-span-3">
                    <label for="email-add" class="block text-sm font-medium text-gray-700">Email</label>
                    <input v-model="email"
                      type="text" name="email-add" id="email-add" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                    >
                  </div>

                  <div class="col-span-6 sm:col-span-1">
                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                    <select v-model="country"
                      id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    >
                      <option value="PH">PH</option>
                    </select>
                  </div>

                  <div class="col-span-6 sm:col-span-6 mt-4">
                    <div class="flex items-center">
                      <h1 class="text font-medium text-gray-900 mr-2">Type of Giving</h1>
                      <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                      </svg>
                    </div>
                  </div>

                  <div class="col-span-6 sm:col-span-6">
                    <div class="flex items-center">
                      <button type="button" 
                        class="inline-flex justify-center px-4 py-2 rounded text-sm text-victory-blue bg-victory-blue/25 hover:bg-victory-blue/50"
                        @click.prevent="addGiving"
                      >
                        Add Giving
                        <svg class="ml-2 h-5 w-5 text-victory-blue" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                      </button>
                    </div>
                  </div>

                  <!-- Giving Breakdown -->
                  <template v-for="(breakdown, index) in givingBreakdown" :key="index">
                    <div class="col-span-6">
                        <div class="grid grid-cols-7 gap-4">
                          <div class="col-span-6 sm:col-span-1">
                          <label for="currency" class="block text-sm font-medium text-gray-700">Currency</label>
                          <select v-model="currency"
                            id="currency" name="currency" autocomplete="currency-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                          >
                            <option>PHP</option>
                            <option>USD</option>
                          </select>
                        </div>
                        
                        <div class="col-span-6 sm:col-span-1">
                          <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                          <input v-model="breakdown.amount"
                            type="text" name="amount" id="amount" autocomplete="total-amount" 
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                          >
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                          <label for="category" class="block text-sm font-medium text-gray-700">Type of Giving</label>
                          <select v-model="breakdown.typeOfGiving"
                            id="category" name="category" autocomplete="category-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                          >
                            <option value="tithes_and_offering">Tithes and Offering</option>
                            <option value="benevolence">Benevolence</option>
                            <option value="local_building">Local Building Fund</option>
                            <option value="missions">Missions</option>
                            <option value="en_building">Every Nation Building</option>
                            <option value="en_campus">Every Nation Campus</option>
                            <option value="real_life">Real LIFE Foundation</option>
                            <option value="others">Others</option>
                          </select>
                        </div>

                        <div v-show="breakdown.typeOfGiving == 'others'"
                          class="col-span-6 sm:col-span-2"
                        >
                          <label for="others" class="block text-sm font-medium text-gray-700">&nbsp;</label>
                          <input v-model="breakdown.others"
                            type="text" name="others" id="others"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                          >
                        </div>

                        <div v-if="index > 0"
                          class="col-span-6 sm:col-span-1"
                        >
                          <div class="grid content-center h-full">
                            <div>
                              <label class="block">&nbsp;</label>
                              <svg class="flex-shrink-0 h-6 w-6 text-red-400 cursor-pointer"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                @click.prevent="removeGiving(index)"
                              >
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </template>

                  <div class="col-span-6 sm:col-span-1">
                    <div class="flex justify-end">
                      <h1 class="text-sm font-medium text-gray-500">Total</h1>
                    </div>
                  </div>

                  <div class="col-span-6 sm:col-span-1">
                    <div class="flex items-center">
                      <span class="text-sm font-semibold text-gray-900"> {{ formattedTotalAmount }} </span>
                    </div>
                  </div>

                </div>

                <!-- GCash or PayMaya giving channel -->
                <template v-else>
                  <div v-if="giveThruChannel == 'gcash'" 
                    class="grid grid-cols-6 gap-4"
                  >
                    <!-- GCash -->
                    <template v-if="giveToCenter == 'cabuyao' || giveToCenter == 'siniloan'">
                      <!-- Coming Soon -->
                      <div class="col-span-6">
                        <div class="flex justify-center my-8">
                          <h1>Giving through GCash for <b>{{ centerDetails['name'] }}</b> coming soon.</h1>
                        </div>
                      </div>
                    </template>
                    <template v-else>
                      <div class="col-span-6 mx-auto">
                        <img class="" :src="centerDetails['gcashQR']" alt="GCash QR Code">
                      </div>
                      <div class="col-span-6 mb-4">
                        <div class="flex justify-center">
                          <a class="button inline-flex justify-center px-4 py-2 rounded text-sm text-victory-blue bg-victory-blue/25  hover:bg-victory-blue/50 cursor-pointer"
                          >
                            Save to Device
                          </a>
                        </div>
                      </div>
                      <div class="col-span-1">
                        <h1 class="text-xl font-medium text-gray-900 text-right">Step 1</h1>
                      </div>
                      <div class="col-span-5">
                        <p class="text-sm text-gray-600 inline-block align-bottom">Save this QR code image on your device.</p>
                      </div>
                      <div class="col-span-1">
                        <h1 class="text-xl font-medium text-gray-900 text-right">Step 2</h1>
                      </div>
                      <div class="col-span-5">
                        <p class="text-sm text-gray-600 inline-block align-bottom">
                          Open GCash app.
                        </p>
                      </div>
                      <div class="col-span-1">
                        <h1 class="text-xl font-medium text-gray-900 text-right">Step 3</h1>
                      </div>
                      <div class="col-span-5">
                        <p class="text-sm text-gray-600 inline-block align-bottom">
                          Select <b>Pay QR</b> and upload the QR code image.
                        </p>
                      </div>
                      <div class="col-span-1">
                        <h1 class="text-xl font-medium text-gray-900 text-right">Step 4</h1>
                      </div>
                      <div class="col-span-5">
                        <p class="text-sm text-gray-600 inline-block align-bottom">
                          Enter the amount. Click Submit.
                        </p>
                      </div>
                      <div class="col-span-1">
                        <h1 class="text-xl font-medium text-gray-900 text-right">Step 5</h1>
                      </div>
                      <div class="col-span-5">
                        <p class="text-sm text-gray-600 inline-block align-bottom">
                          Upload the transaction slip of your giving at  <a :href="`https://${centerDetails['givingAckLink']}`" target="_blank" class="text-indigo-600">{{ centerDetails['givingAckLink'] }}</a> or email at <a :href="`mailto:${centerDetails['email']}`" target="_blank" class="text-indigo-600">{{ centerDetails['email'] }}</a>, so we can properly acknowledge and account your giving. Thank you for your generosity.
                        </p>
                      </div>
                    </template>
                  </div>
                  <div v-else
                    class="grid-cols-5 gap-6"
                  >
                    <!-- PayMaya -->
                    <h1>PayMaya</h1>
                  </div>
                </template>
              </div>

            </div>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button v-if="activeTab == 'general'"
              type="button" 
              class="inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-victory-blue hover:bg-victory-blue/75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              @click.prevent="proceedToGiving"
            >
              Next
            </button>

            <template v-else>
              <button type="button" 
                class="inline-flex justify-center py-2 px-6 border border-gray-300 rounded-md shadow-sm text-sm font-medium rounded-md text-black bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                @click.prevent="activeTab = 'general'"
              >
                Back
              </button>
              <button type="submit" 
                class="inline-flex justify-center ml-3 py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-victory-blue hover:bg-victory-blue/75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled"
                :class="[giveProcessing ? 'disabled:bg-victory-blue/75 cursor-progress' : '']"
                :disabled="giveProcessing"
                @click.prevent="give"
              >
                {{ giveButtonText }}
              </button>
            </template>
          </div>
        </div>
      </div>
    </div>


  </div>
</template>


<script>
  export default {
    props: [
      'appUrl', 'payMayaUrl', 'logoUrl', 'givingImgUrl', 
      'pkCAL', 'pkLB', 'pkSP', 'pkSC', 
      'gcashCALQR', 'gcashLBQR', 'gcashSPQR', 'gcashSCQR',
    ],

    data() {
      return {
        payMayaGivingStatus:'',
        activeTab: 'general',
        giveProcessing: false,
        giveToCenter: '',
        giveThruChannel: '',
        dataPrivacy: false,
        firstName: '',
        lastName: '',
        mobileNo: '',
        email: '',
        country: 'PH',
        currency: 'PHP',
        totalAmount: 0,
        phpFormatter: new Intl.NumberFormat(
          'en-PH', {
            style: 'currency',
            currency: 'PHP'
          }
        ),
        usdFormatter: new Intl.NumberFormat(
          'en-US', {
            style: 'currency',
            currency: 'USD'
          }
        ),
        givingBreakdown: [
          {
            'amount': 0.0,
            'typeOfGiving': 'tithes_and_offering',
            'others': ''
          }
        ]
      }
    },

    computed: {
      givingImageUrl() {
        return `url(${this.givingImgUrl})`; 
      },

      giveButtonText() {
        return (this.giveProcessing) ? 'Processing...' : 'Give';
      },

      formattedTotalAmount() {
        let sum = 0.0;
        let currency = this.currency;

        this.givingBreakdown.forEach(breakdown => {
          let amount = (isNaN(parseFloat(breakdown.amount))) ? 0 : parseFloat(breakdown.amount);
          sum = parseFloat(sum) + parseFloat(amount);
        });

        sum = (sum == 0 || isNaN(sum)) ? 0 : parseFloat(sum);

        this.totalAmount = sum;

        return (currency == 'PHP') 
          ? this.phpFormatter.format(sum) 
          : this.usdFormatter.format(sum);
      },

      parsedItems() {
        let items = [];

        this.givingBreakdown.forEach(breakdown => {

          let typeOfGiving = this.expoundTypeOfGiving(breakdown.typeOfGiving);
          let transformedName = (typeOfGiving == 'Others') 
            ? `${typeOfGiving} - ${breakdown.others}`
            : typeOfGiving;

          items.push({
            amount: {value: parseFloat(breakdown.amount)}, 
            totalAmount: {value: parseFloat(breakdown.amount)}, 
            name: transformedName
          });
        });

        return items;
      },

      centerDetails() {
        let selectedCenter = this.giveToCenter;
        let centerDetails = {
          'name': '',
          'givingAckLink': '',
          'email': '',
          'gcashQR': '',
          'primaryKey': ''
        };

        switch (selectedCenter) {
          case 'cabuyao':
            centerDetails['name'] = 'Victory Cabuyao';
            centerDetails['givingAckLink'] = 'bit.ly/vcalambaonlinegiving';
            centerDetails['email'] = 'cabuyao@victory.org.ph';
            centerDetails['gcashQR'] = '';
            centerDetails['primaryKey'] = this.pkCAL;
            break;

          case 'calamba':
            centerDetails['name'] = 'Victory Calamba';
            centerDetails['givingAckLink'] = 'bit.ly/vcalambaonlinegiving';
            centerDetails['email'] = 'calamba@victory.org.ph';
            centerDetails['gcashQR'] = this.gcashCALQR;
            centerDetails['primaryKey'] = this.pkCAL;
            break;

          case 'los_banos':
            centerDetails['name'] = 'Victory Los Baños';
            centerDetails['givingAckLink'] = 'bit.ly/vlbonlinegiving';
            centerDetails['email'] = 'losbanos@victory.org.ph';
            centerDetails['gcashQR'] = this.gcashLBQR;
            centerDetails['primaryKey'] = this.pkLB;
            break;

          case 'san_pablo':
            centerDetails['name'] = 'Victory San Pablo';
            centerDetails['givingAckLink'] = 'bit.ly/vsanpabloonlinegiving';
            centerDetails['email'] = 'sanpablo@victory.org.ph';
            centerDetails['gcashQR'] = this.gcashSPQR;
            centerDetails['primaryKey'] = this.pkSP;
            break;

          case 'sta_cruz':
            centerDetails['name'] = 'Victory Santa Cruz';
            centerDetails['givingAckLink'] = 'bit.ly/vsantacruzonlinegiving';
            centerDetails['email'] = 'santacruz@victory.org.ph';
            centerDetails['gcashQR'] = this.gcashSCQR;
            centerDetails['primaryKey'] = this.pkSC;
            break;

          case 'siniloan':
            centerDetails['name'] = 'Victory Siniloan';
            centerDetails['givingAckLink'] = 'bit.ly/vsantacruzonlinegiving';
            centerDetails['email'] = 'siniloan@victory.org.ph';
            centerDetails['gcashQR'] = '';
            centerDetails['primaryKey'] = this.pkSC;
            break;
        
          default:
            break;
        }

        return centerDetails;

      },

    },

    methods: {
      goToPage(url) {
        this.$inertia.visit(url);
      },

      expoundTypeOfGiving(slug) {
        switch (slug) {
          case 'benevolence':
            return 'Benevolence';

          case 'local_building':
            return 'Local Building Fund';

          case 'missions':
            return 'Missions';

          case 'en_building':
            return 'Every Nation Building';
          
          case 'en_campus':
            return 'Every Nation Campus';

          case 'real_life':
            return 'Real LIFE Foundation';

          case 'others':
            return 'Others';
      
          default:
            return 'Tithes and Offering';
        }
      },

      proceedToGiving() {
        // Proceed to next tab if all general info fields are filled up
        if (this.giveToCenter && this.giveThruChannel && this.dataPrivacy)
          this.activeTab = 'specific';
          
        return;  
      },

      addGiving() {
        const breakdown = {
          'amount': 0.0,
          'typeOfGiving': 'tithes_and_offering',
          'others': ''
        };

        this.givingBreakdown.push(breakdown);
      },

      removeGiving(index) {
        this.givingBreakdown.splice(index,1);
      },

      getUrlParams() {
        let vars = {};
        let parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
            vars[key] = value;
        });

        return vars;
      },

      parseReferenceNumber(date) {
        let selectedCenter = this.giveToCenter;
        let center = '';
        let month = date.getMonth() + 1;
        let day = date.getDate();

        switch (selectedCenter) {
          case 'cabuyao':
            center = 'CAB';
            break;

          case 'calamba':
            center = 'CAL';
            break;

          case 'los_banos':
            center = 'LB';
            break;

          case 'san_pablo':
            center = 'SP';
            break;

          case 'sta_cruz':
            center = 'SC';
            break;

          case 'siniloan':
            center = 'SL';
            break;
        
          default:
            break;
        }

        month = (month < 10) ? '0'+month : month;
        day   = (day < 10) ? '0'+day : day;
        

        return `${center}-${month}${day}${date.getFullYear()}-${date.getTime()}`;

      },

      give() {
        this.giveProcessing = true;
        let centerDetails = this.centerDetails;

        const options = {
          method: 'POST',
          headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json',
            Authorization: `Basic ${centerDetails['primaryKey']}`
          },
          body: JSON.stringify({
            totalAmount: {value: this.totalAmount, currency: this.currency},
            buyer: {
              contact: {phone: this.mobileNo, email: this.email},
              billingAddress: {countryCode: this.country},
              firstName: this.firstName,
              lastName: this.lastName
            },
            items: this.parsedItems,
            redirectUrl: {
              success: `${this.appUrl}/give?status=success`,
              failure: `${this.appUrl}/give?status=failure`,
              cancel: `${this.appUrl}/give?status=cancel`
            },
            requestReferenceNumber: this.parseReferenceNumber(new Date())
          })
        };

        fetch(`${this.payMayaUrl}`, options)
          .then(response => response.json())
          .then((response) => {
            // Redirect to PayMaya Gateway
            window.location.href = response['redirectUrl'];
          })
          .catch(err => console.error(err));

      }

    },

    mounted() {
      document.title = 'Give | Victory Laguna Giving Site';

      // Check if there's an init parameter
      let urlParams = this.getUrlParams();
      if (urlParams.hasOwnProperty('init')) {
        this.givingBreakdown[0]['typeOfGiving'] = urlParams['init'];
      }

      // Check if there's a status parameter
      if (urlParams.hasOwnProperty('status')) {
        this.payMayaGivingStatus = urlParams['status'];
      }
    }

  }
</script> 