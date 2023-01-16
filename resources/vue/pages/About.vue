<template>
    <div>
        <main id="main">
            <section id="portfolio" class="portfolio mt-16">
                <div class="container">
                    <div class="section-title">
                        <h2>About Us</h2>
                    </div>
                    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up"
                        data-aos-delay="100">

                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                    <div class="row portfolio-container">
                        <!--          data-aos="fade-up"   data-aos-delay="200"-->
                        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-img">
                                <img src="/images/1000_F_537113400_hSnmCFXiBmfYTlabob774w6WoHuTf7Kr.jpg" class="img-fluid" alt=""></div>
                        </div>
                        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-img">
                                <img src="/images/81d207a2-0f66-491c-8502-4b257052fc6f.jpeg" class="img-fluid" alt=""></div>
                        </div>

                        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-img">
                                <img src="/images/businesspeople-working-finance-accounting-analyze-financi.jpg"class="img-fluid" alt=""></div>
                        </div>

                        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-img">
                                <img src="/images/account-assets-audit-bank-bookkeeping-finance-concept.jpg" class="img-fluid" alt=""></div>
                        </div>
                    </div>
                    <div class="row content">
                        <div class="col-lg-3">
                            <h3 class="text-samibold">
                                Live Support
                            </h3>
                        </div>
                        <div class="col-lg-3">
                            <h3>
                                Real Time Monitoring
                            </h3>
                        </div>
                        <div class="col-lg-3">
                            <p>
                                Business Analysis
                            </p>
                        </div>
                        <div class="col-lg-3">
                            <p>
                                Accounting & Bookkeeping
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <div id="crypto-modal" tabindex="-1" aria-hidden="true" v-show="nav"
             class="top-0j overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
            <div class="relative w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button @click="nav = false" type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="crypto-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <!-- Modal header -->
                    <div class="py-4 px-6 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white ml-6">
                            Shakuntalam Infosolutions
                        </h3>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6">
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400"></p>
                        <ul class="my-4 space-y-3">
                            <li @click="homeBack">
                                <a href="#"
                                   class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <span class="flex-1 ml-3 whitespace-nowrap">Home</span>
                                    <!--                                    <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>-->
                                </a>
                            </li>
                            <li @click="about">
                                <a href="#"
                                   class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <span class="flex-1 ml-3 whitespace-nowrap">About Us</span>
                                </a>
                            </li>
                            <li @click="service">
                                <a href="#"
                                   class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <span class="flex-1 ml-3 whitespace-nowrap">Services</span>
                                </a>
                            </li>
                            <li @click="contactUs">
                                <a href="#"
                                   class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <span class="flex-1 ml-3 whitespace-nowrap">Contact Us</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "About",
        data() {
            return {
                aboutUs: false,
                serve: false,
                contact: false,
                home: false,
                nav: false,
            }
        },
        methods: {
            register() {
                console.log('clicked')
                this.$router.push('register');
            },
            about() {
                this.$router.push('/about');
            },
            service() {
                this.$router.push('/service');
            },
            homeBack() {
                this.$router.push({ path: '/' });
            },
            contactUs() {
                this.$router.push('/contact');
            },
            privacy(){
                this.$router.push('/policy')
            },
            menuBar() {
                this.nav = !this.nav;
            }

        }
    }
</script>

<style scoped>

</style>
