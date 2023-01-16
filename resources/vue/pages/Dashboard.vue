<template>
    <div>
        <section id="hero" class="d-flex align-items-center banner" v-for="i in [currentIndex]" :key="i"
                 v-bind:style="{ backgroundImage: 'url(' + currentImg + ')'}"
                 style="background-size: cover; background-repeat: no-repeat">

            <div class="container overlay ">
                <div class="row ">
                   <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <!--                          -->
<!--                        <h1 class="text-center text-4xl">Shakuntalam Infosolutions</h1>-->
                        <h2 class="text-center font-semibold text-4xl">India's First Real Time,Accounting And Book-Keeping<br> Services For
                            Securities and shares.</h2>
                    </div>
                   <!-- <div class="swiper-button-next" @click="next"></div>
                    <div class="swiper-button-prev" @click="prev"></div> -->
                </div>
            </div>
        </section>
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start text-white">
                <h3>Call To Action</h3>
                <p> As a full level service provider, we offer you knowledgeable, practical, and timely counsel throughout the onboarding process, on an individual basis according to all legal and regulatory obligations.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>

            </div>
    </section>
        <main id="main">
            <section id="why-us" class="why-us section-bg bg-blue-100" >
                <div class="container-fluid" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                            <div class="content">
                                <h3>Welcome to <strong>SHAKUNTALAM  INFOSOLUTIONS</strong></h3>
                                <p>
                                    Here You can get all informations about your investmets you account path and your
                                    live graphs..
                                </p>
                            </div>
                            <div class="accordion-list">
                                <ul>
                                    <li>
                                        <h4 data-bs-toggle="collapse" @click="showOne"
                                            data-bs-target="#accordion-list-1"><span>01</span>Real Time Accounting & BookKeeping.<br></h4>
                                           <i class="bx bx-chevron-down icon-show" ></i>
                                           <i class="bx bx-chevron-up icon-close"></i>
                                        
<!--                                        <div id="accordion-list-1" class="" v-show="partOne"-->
<!--                                             data-bs-parent=".accordion-list">-->
<!--                                            <p>-->
<!--                                                Keeping accurate records is a daunting task for many business owners. Whether you are a sole trader or limited company, with team4 you’ll have your own Account Manager to look after you every step of the way. We have a range of packages that are designed to help start-ups, small, large and growing businesses.-->
<!--                                            </p>-->
<!--                                        </div>-->
                                    </li>

                                    <li>
                                        <h4 data-bs-toggle="collapse" data-bs-target="#accordion-list-2" @click="showTwo"
                                            class="collapsed"><span>02</span>Accounts Management<i></i></h4>
<!--                                            class="bx bx-chevron-down icon-show"></i><i-->
<!--                                            class="bx bx-chevron-up icon-close"></i></h4>-->
<!--                                        <div id="accordion-list-2" class="" data-bs-parent=".accordion-list">-->
<!--                                            <p v-show="partTwo">-->
<!--                                                Content-->
<!--                                            </p>-->
<!--                                        </div>-->
                                    </li>

                                    <li>
                                        <h4 data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                           @click="showThree"
                                            class="collapsed"><span>03</span> Monitoring <i></i></h4>
<!--                                            class="bx bx-chevron-down icon-show"></i><i-->
<!--                                            class="bx bx-chevron-up icon-close"></i></h4>-->
<!--                                        <div id="accordion-list-3" class="" data-bs-parent=".accordion-list">-->
<!--                                            <p v-show="partThree">-->
<!--                                                Content-->
<!--                                            </p>-->
<!--                                        </div>-->
                                    </li>

                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"   data-aos="zoom-in" data-aos-delay="250"
                             style='background-image: url("/images/3d-render-robot-filing-documents.jpg");'>&nbsp;
                            <!--                           -->
                        </div>
                    </div>

                </div>
            </section><!-- End Why Us Section -->
            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="200">
                            <img src="/images/welcome.jpeg" class="img-fluid" alt="">
                        </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="200">
                            <div class="">
                                <p class="">Our work</p>
                                <h3 class=" font-bold">What We Do?</h3>
                                <div class="skills-content font-semibold mt-3">
                                    You don't just want a number cruncher! You want a financial business expert
                                    who will provide you with an accurate set of accounts with no fuss. Although
                                    we are obsessed with figures and accounts at Shakuntalam Infosolutions, our aim is to look after
                                    your business, providing financial reports to help you make sound business decisions. After all, you have entrusted us with your livelihood.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="max-w-2xl h-72 m-12 rounded overflow-hidden shadow-lg  flex flex-row justify-center ">
                        <img class="w-1/2" src="/images/account-assets-audit-bank-bookkeeping-finance-concept.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Book-Keeping</div>
                            <p class="text-gray-700 text-base">
                                Shakuntalam Infosolutions, founded by Ajay Dubey, provides security and share services in India.You can obtain information about the various stages of your shares here.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Realtime Accounting</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Book-Keeping</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="500">
                            <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Security And share</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="600">
                            <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Monitoring</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                number: false,
                aboutUs: false,
                serve: false,
                home: false,
                partOne: true,
                partTwo: false,
                partThree: false,
                policy:false,
                url:"https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=RELIANCE.BSE&outputsize=full&apikey=demo",

                slider: [
                    {
                        'images': '/images/hero-img.png'
                    },

                ],
                images: [
                    '/images/240_F_513695884_0AhFcDDs46JA8StQzrNCTX0VW0920hdr.jpg',
                    '/images/background.jpeg'
                ],

                timer: null,
                currentIndex: 0,
                className: {
                    label: 'block text-md font-medium text-gray-700',
                    input: 'mt-1 block w-full px-3 py-2 mb-2 rounded-md border-2 border-gray-100 shadow-sm border focus:outline-none focus:ring-1 ring-indigo-500 sm:text-sm'
                },
                auth: {
                    mobileNo: null,
                    OTP: null
                },
                formErrors: {
                    mobileNo: '',
                    OTP: '',
                },
                processing: false,
                label: 'Send OTP',
                success: false
            }
        },
        created() {
            // this.startSlide();
        },
        methods: {
            startSlide: function () {
                this.timer = setInterval(this.next, 7000);
            },
            next: function () {
                this.currentIndex += 1;
            },
            prev: function () {
                this.currentIndex -= 1;
            },
           async register() {
                await this.$router.push('register');
            },
            async about() {
                await this.$router.push('/about');
            },
            async service() {
                await this.$router.push('/service');
            },
            async homeBack() {
                await this.$router.push('/');
            },

            async privacy(){
                await this.$router.push('/policy')
            },
            async serviceModelBtn(){
                await this.$router.push({name: 'policy'});
            },
             showOne() {
                this.partOne = !this.partOne;
            },
             showTwo() {
                this.partTwo = !this.partTwo;
            },
             showThree() {
                this.partThree = !this.partThree;
            },

            showPolicy(){
                this.policy = !this.policy;
            }
        },
        computed: {
            currentImg: function () {
                return this.images[Math.abs(this.currentIndex) % this.images.length];
            }
        }
    }
</script>

<style scoped>

</style>
