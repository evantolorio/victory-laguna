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
    </header>
    

    <!-- Content -->
    <div class="bg-cover shadow-md bg-blend-multiply bg-victory-blue"
      :style="{'background-image': whoWeAreImageUrl, 'height': `350px`}"
    >
      <div class="max-w-7xl mx-auto py-20 text-white">
        <h1 class="text-3xl font-bold">
          Welcome to Victory Laguna Website!
        </h1>
        <h1 class="mt-12 text-5xl font-bold text-blue-300">
          Who We Are
        </h1>
        <p class="mt-2 text-lg text-gray-100">
          We exist to Honor God and Make Disciples.
        </p>
      </div>
    </div>
    <div class="max-w-7xl mx-auto py-10">
      <!-- Jesus. -->
      <div class="mb-14 px-40">
        <h1 class="text-5xl font-bold">
          Jesus.
        </h1>
        <p class="mt-4">
          We desire to honor God in every area of life. Our starting point, goal, and motive is the honor of God. This is foundational for understanding why we do what we do. It is all about Him, not us.
        </p>
        <p class="mt-4">
          We follow Jesus and help others follow Him. We make disciples by engaging culture and community, establishing biblical foundations, equipping believers to minister, and empowering disciples to make disciples.
        </p>
      </div>
      <!-- Cards -->
      <div class="grid grid-cols-6 gap-6 px-40">
        <!-- History -->
        <div class="col-span-3">
          <div class="rounded-lg shadow-md overflow-hidden bg-white">
            <div class="bg-cover"
              :style="{'background-image': historyImageUrl, 'height': `300px`}"
            >
            </div>
            <div class="px-6 py-5">
              <div class="flex items-center justify-between">
                <h1 class="text-xl font-semibold">
                  Our History
                </h1>
                <a @click.prevent="showHistory = !showHistory"
                  href="#!" class="bg-victory-blue/75 rounded-full p-2 hover:bg-victory-blue"
                >
                  <svg v-if="showHistory == false"
                    class="h-5 w-5 text-white font-semibold" 
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                  >
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                  <svg v-else 
                    class="h-5 w-5 text-white font-semibold" 
                    xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor"
                  >
                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
              <div v-show="showHistory">
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  In June 1984, Rice Broocks, Al Manamtam, and Steve and Deborah Murrell led a team of sixty-­five American university students on a one­-month summer mission trip in Manila’s University Belt. After two weeks of meetings at the Girl Scouts Auditorium on Padre Faura, the new church, consisting of about 150 high school and university students, moved into the basement of the Tandem Theater on Recto Avenue. From this original group of 150, Victory has planted churches across the Philippines and is now composed of thousands of students, professionals, and families. We have Victory group leaders who lead discipleship groups weekly in campuses, coffee shops, homes, and offices.
                </p>
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  In 1994, Rice Broocks, Phil Bonasso, and Steve Murrell met in Manila, Philippines, to explore ways to cooperate in campus ministry, church planting, and world missions. This meeting resulted in the birthing of Every Nation, a worldwide church-planting movement with a vision to establish churches and campus ministries in every nation. Victory is a founding member of this global family.
                </p>
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  Since its founding, Victory has sent Filipino campus missionaries and church planters to serve as cross­-cultural missionaries to countries across the globe. Besides these long­-term missionaries, Victory has also sent numerous teams for short-term missions to reach every campus and every nation.
                </p>
              </div>
            </div>          
          </div>
        </div>

        <!-- Statement of Faith -->
        <div class="col-span-3">
          <div class="rounded-lg shadow-md overflow-hidden bg-white">
            <div class="bg-cover"
              :style="{'background-image': statementImageUrl, 'height': `300px`}"
            >
            </div>
            <div class="px-6 py-5">
              <div class="flex items-center justify-between">
                <h1 class="text-xl font-semibold">
                 Our Statement of Faith
                </h1>
                <a @click.prevent="showStatement = !showStatement"
                  href="#!" class="bg-victory-blue/75 rounded-full p-2 hover:bg-victory-blue"
                >
                  <svg v-if="showStatement == false"
                    class="h-5 w-5 text-white font-semibold" 
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                  >
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                  <svg v-else 
                    class="h-5 w-5 text-white font-semibold" 
                    xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor"
                  >
                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
              <div v-show="showStatement">
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  We believe . . . <br>
  
                  . . . <b class="text-victory-blue">in the Holy Scriptures as originally given by God</b>, divinely inspired, infallible, entirely trustworthy; and the supreme authority in all matters of faith and conduct. <br>
  
                  . . . <b class="text-victory-blue">in one God</b>, eternally existent in three persons, Father, Son, and Holy Spirit. <br>
  
                  . . . <b class="text-victory-blue">in our Lord Jesus Christ</b>, God manifest in the flesh, His virgin birth, His sinless human life, His divine miracles, His vicarious and atoning death, His bodily resurrection, His ascension, His mediatorial work, and His personal return in power and glory. <br>
  
                  . . . <b class="text-victory-blue">in the salvation of lost and sinful man</b> through the shed blood of the Lord Jesus Christ by faith apart from works, and regeneration by the Holy Spirit. <br>
  
                  . . . <b class="text-victory-blue">in the Holy Spirit</b>, by whose indwelling the believer is enabled to live a holy life, to witness and work for the Lord Jesus Christ. <br>
  
                  . . . <b class="text-victory-blue">in the unity of the Spirit of all true believers</b>, the Church, the Body of Christ. <br>
  
                  . . . <b class="text-victory-blue">in the resurrection of both the saved and the lost</b>; they that are saved unto the resurrection of life, they that are lost unto the resurrection of damnation. <br> <br>
  
                  <i>We adhere to the World Evangelical Alliance Statement of Faith.</i> 
                </p>
              </div>
            </div>          
          </div>
        </div>

        <!-- Core Values -->
        <div class="col-span-3">
          <div class="rounded-lg shadow-md overflow-hidden bg-white">
            <div class="bg-cover"
              :style="{'background-image': valuesImageUrl, 'height': `300px`}"
            >
            </div>
            <div class="px-6 py-5">
              <div class="flex items-center justify-between">
                <h1 class="text-xl font-semibold">
                 Our Core Values
                </h1>
                <a @click.prevent="showValues = !showValues"
                  href="#!" class="bg-victory-blue/75 rounded-full p-2 hover:bg-victory-blue"
                >
                  <svg v-if="showValues == false"
                    class="h-5 w-5 text-white font-semibold" 
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                  >
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                  <svg v-else 
                    class="h-5 w-5 text-white font-semibold" 
                    xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor"
                  >
                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
              <div v-show="showValues">
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  Our core values express the good deposit we guard together. These are our essential values and help describe how we build our ministry.
                </p>
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  <b class="text-victory-blue">LORDSHIP</b> <br>
  
                  <b>We value obedience</b>. Because Jesus is “King of kings and Lord of lords,” we believe that wholehearted submission to God’s will and His Word is the starting point of the Christian faith and the foundation of all spiritual growth. (Colossians 2:6)
                </p>
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  <b class="text-victory-blue">EVANGELISM</b> <br>
  
                  <b>We value lost people</b>. Because God’s heart is to reach the lost, we seek to build churches primarily through evangelism, not transfer; through birth, not adoption. (John 3:16; Luke 19:10)
                </p>
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  <b class="text-victory-blue">DISCIPLESHIP</b> <br>
  
                  <b>We value spiritual growth</b>. Because we are called to make disciples, our primary focus is ministering to people, not conducting meetings, facilitating programs, or building buildings. (Matthew 28:19,20)
                </p>
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  <b class="text-victory-blue">LEADERSHIP</b> <br>
  
                  <b>We value leadership development</b>. Because we are called to develop future leaders who will serve in the church and in the community, we prioritize leadership development. We do this by deliberately creating opportunities for young potential leaders to develop their gifts, and empowering them through identification, instruction, impartation, and internship. (2 Timothy 2:2)
                </p>
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  <b class="text-victory-blue">FAMILY</b> <br>
  
                  <b>We value long-term relationships</b>. Because the family is the foundation and validation of ministry, we refuse to sacrifice our marriages and our children on the altars of temporal success. And because we believe God has called us to be a spiritual family, we embrace community, reject the idea of disposable relationships, and choose to walk in love, respect, and unity. (Psalm 127:1,3; Ephesians 4:3)
                </p>
              </div>
            </div>          
          </div>
        </div>

        <!-- Ministries -->
        <div class="col-span-3">
          <div class="rounded-lg shadow-md overflow-hidden bg-white">
            <div class="bg-cover"
              :style="{'background-image': ministryImageUrl, 'height': `300px`}"
            >
            </div>
            <div class="px-6 py-5">
              <div class="flex items-center justify-between">
                <h1 class="text-xl font-semibold">
                 Our Ministry
                </h1>
                <a @click.prevent="showMinistry = !showMinistry"
                  href="#!" class="bg-victory-blue/75 rounded-full p-2 hover:bg-victory-blue"
                >
                  <svg v-if="showMinistry == false"
                    class="h-5 w-5 text-white font-semibold" 
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                  >
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                  <svg v-else 
                    class="h-5 w-5 text-white font-semibold" 
                    xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20" fill="currentColor"
                  >
                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
              <div v-show="showMinistry">
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  Victory is a founding member of Every Nation, a global movement that exists to honor God by establishing Christ-centered, Spirit-empowered, socially responsible churches and campus ministries in every nation.
                </p>
                <p class="pt-2 text-sm text-gray-600 text-justify">
                  You can visit <a href="https://everynation.org.ph" target="_blank" class="text-indigo-600">everynation.org.ph</a> to know more.
                </p>
              </div>
            </div>          
          </div>
        </div>

      </div>
    </div>
  </div>

</template>

<script>
  export default {
    props: [
      'whoWeAreImgUrl', 'logoUrl', 
      'historyImgUrl', 'statementImgUrl', 'valuesImgUrl', 'ministryImgUrl'
    ],

    data() {
      return {
        showHistory: false,
        showStatement: false,
        showValues: false,
        showMinistry: false
      }
    },

    computed: {
      whoWeAreImageUrl() {
        return `url(${this.whoWeAreImgUrl})`; 
      },

      historyImageUrl() {
        return `url(${this.historyImgUrl})`; 
      },

      statementImageUrl() {
        return `url(${this.statementImgUrl})`; 
      },

      valuesImageUrl() {
        return `url(${this.valuesImgUrl})`; 
      },

      ministryImageUrl() {
        return `url(${this.ministryImgUrl})`; 
      },

    },

    methods: {
      goToPage(url) {
        this.$inertia.visit(url);
      },
    },

    mounted() {
      document.title = 'Who We Are | Victory Laguna Giving Site';
    }

  }
</script> 