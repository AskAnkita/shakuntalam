<template>
    <div>
        <header id="header" class="fixed-top " style="background: rgba(40, 58, 90, 0.9)">
            <!--            style="background-color: rgba(48, 82, 129, 0.9)"-->
            <div class="container-fluid d-flex align-items-center px-5 py-2 justify-between">
                <div class=" logo me-auto flex flex-row align-items-center">
                    <img src="/images/Web.png">
                    <!-- <span class="  inline-block align-bottom " style="height:73px "> </span> -->
                    <span id="title" class="text-2xl text-white align-bottom" style="margin-top:22px">SHAKUNTALAM  INFOSOLUTIONS</span>
                </div>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><router-link :to="{name: 'dashboard'}"><p class=" nav-link scrollto text-white md:gap-6 hover:border-blue-400 hover:border-b-4">Home</p></router-link></li>
                        <li><router-link :to="{name: 'about'}"><p class=" nav-link scrollto text-white md:gap-6 hover:border-blue-400 hover:border-b-4">About Us</p></router-link></li>
                        <li><router-link :to="{name: 'service'}"><p class=" nav-link scrollto text-white md:gap-6 hover:border-blue-400 hover:border-b-4">Packages</p></router-link></li>
                        <li><router-link :to="{name: 'contact'}"><p class=" nav-link scrollto text-white md:gap-6 hover:border-blue-400 hover:border-b-4">Contact Us</p></router-link></li>
                    
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle" style=" color: #fff;" @click="menuBar"></i>
                </nav>
                
            </div>
        </header>    <router-view/>
        <div id="crypto-modal" tabindex="-1" aria-hidden="true" v-show="nav" class="top-0j overflow-y-auto overflow-x-hidden fixed top-0 flex justify-center right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full" style="margin-top: 97px">
            <div class="relative w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button @click="nav = false" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="crypto-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only" >Close modal</span>
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
                                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                <span class="flex-1 ml-3 whitespace-nowrap">Home</span>
                                </a>
                                    <!--                                    <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>-->
                            </li>
                            <li @click="about">
                                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <span class="flex-1 ml-3 whitespace-nowrap">About Us</span>
                                </a>
                            </li>
                            <li @click="service">
                                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <span class="flex-1 ml-3 whitespace-nowrap">Packages</span>
                                </a>
                            </li>
                            <li @click="contactUs">
                                <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                    <span class="flex-1 ml-3 whitespace-nowrap">Contact Us</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" class="bg-blue-100">
            <div class="footer-top ">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h3>Shakuntalam Infosolutions</h3>
                            <p>
                                Dadra road, After Railway Crossing<br>
                                Near - Ashish Gas Agency, Musafirkhana,<br>
                                Amethi - 227813<br><br>
                                <strong>Phone:</strong> +91 8957918830<br>
                                <strong>Email:</strong> info@shakuntalaminfosolutions.com<br>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <p @click="homeBack">Terms & Conditions</p></li>
                                <li><i class="bx bx-chevron-right"></i> <p @click="about">Privacy Policy</p></li>
                                <li><i class="bx bx-chevron-right"></i> <p @click="service">Refund Policy</p></li>
                                <li><i class="bx bx-chevron-right"></i> <p @click="privacy">FAQ</p></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Accounting</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">BookKeeping</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Real Time Support</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">demat Account Management</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Social Networks</h4>
                            <p>FOLLOW US AT</p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/people/Shakuntalam-Infosolutions/100088610291084/?mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.linkedin.com/in/shakuntalam-infosolutions/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                <a href="https://www.instagram.com/shakuntalam.infosolutions" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="https://twitter.com/Shakuntalam_IN" class="twitter"><i class="bx bxl-twitter"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container footer-bottom clearfix">
                <div class="copyright">
                </div>
                <div class="credits">
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import Navigation from "../components/core/Navigation";

export default {
    name: "Master",
    data(){
      return{
          nav: false,
      }
    },
    components: {
        Navigation
    },
    methods:{
        async about() {
            await this.$router.push('/about').catch(()=>{});
            this.nav = false;
        },
        async service() {
            await this.$router.push('/service').catch(()=>{});
            this.nav = false;
        },
        async homeBack() {
            await this.$router.push('/').catch(()=>{});
            this.nav = false;
        },
        async contactUs() {
            await this.$router.push('/contact').catch(()=>{});
            this.nav = false;
        },
        async privacy(){
            await this.$router.push('/policy').catch(()=>{});
            this.nav = false;
        },
        menuBar() {
            this.nav = !this.nav;
        },
    }
}
</script>

<style scoped>

</style>
