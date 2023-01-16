<template>
    <div>
        <section id="pricing" class="pricing mt-16">
            <div class="container">
                <!--                    data-aos="fade-up"-->
                <div class="section-title">
                    <h2>Packages </h2>
                    <p class="font-semibold">Go Through Our Packages.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 hover:scale-110 hover:bg-blue-100" v-for="(p,key) in price" :key="key">
                        <!--                            data-aos="fade-up" data-aos-delay="100"-->
                        <div class="box border-2 border-white" style="background-color: #171f28; ">
                            <h3 class="text-white">{{p.title}}</h3>
                           <div class=" flex flex-row"> <h4 class="text-white"><sup>₹</sup>{{p.price}}</h4><span class="text-white text-2xl mt-4">+ GST</span></div>
                            <ul>
                                <li><i class="bx bx-check"></i>Real Time demat Account Monitoring.</li>
                                <li><i class="bx bx-check"></i> Live Market Information.</li>
                                <li><i class="bx bx-check"></i> {{p.acc}}</li>
                                <!--                                    <li><i class="bx bx-check"></i>  .</li>-->
                                <li><i class="bx bx-check"></i>Validity {{p.session}} Trading Session Of {{p.validity}} Days.</li>
                                <li><i v-if="p.free" class="bx bx-check"></i>{{p.free}}</li>
                            </ul>
                            <button @click="service" class="buy-btn">Get Started</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
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
        <div tabindex="-1"
             class="fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal h-full flex justify-center bg-black/50"
             v-show="packageModel">
            <div class="relative w-full h-full max-w-md md:h-auto flex align-items-center">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="delete-popup-modal" @click="packageModel = false">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Main modal -->
        <div id="crypto" tabindex="-1" aria-hidden="true" v-show="policy" class="fixed flex justify-center inset-0 w-full mt-20 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full rounded bg-black bg-opacity-30 backdrop-blur-sm">
            <div class="relative w-full h-full max-w-md md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" @click="policy = false"
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
                    <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                            Shakuntalam Infosolutions
                        </h3>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6">
                        <h3 class="text-center font-semibold">SERVICE AGREEMENT</h3>
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400 p-4">This Agreement is made and
                            entered into at Amethi, Uttar Pradesh on 25st day of September, 2022.</p>
                        <p class="text-center text-sm font-semibold">BY AND BETWEEN</p>
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400 p-4">SHAKUNTALAM INFOSOLUTIONS
                            (PAN: _____________________), a proprietorship concern having its office at
                            ____________________________ hereinafter referred to as “SHAKUNTALAM INFOSOLUTIONS” or
                            “Client” (which expression shall unless repugnant to the context or meaning thereof shall
                            mean and include its successors and permitted assigns) of the ONE PART.</p>
                        <p class="text-center text-sm font-semibold">AND </p>
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400 p-4">INDIVIDUAL (PROVIDE NAME), a
                            firm OR PERSON having its office --------------------------- hereinafter referred to as the
                            (INDIVIDUAL) which expression shall, unless it be repugnant to the context or meaning
                            thereof, mean and include its partners, successors and permitted assignees} PARTY OF OTHER
                            PART.
                            <br>“SHAKUNTALAM INFOSOLUTIONS” and “INDIVIDUAL” wherever the context so requires be
                            hereinafter individually referred to as a “Party” and collectively referred to as the
                            “Parties”.</p>
                        <p class="text-center text-sm font-semibold">CONFIDENTIALITY</p>
                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400 p-4"> The party of second part
                            i.e. INDIVIDUAL (Receiving Party) hereby agrees
                            (i) to hold the SHAKUNTALAM INFOSOLUTIONS (the “Disclosing Party”) Confidential Information
                            in strict confidence and to take reasonable precautions to protect such Confidential
                            Information (including, without limitation, all precautions the Receiving Party employs with
                            respect to its own confidential materials),
                            (ii) not to divulge any such Confidential Information or any information derived therefrom
                            to any third person;
                            (iii) not to make any use whatsoever at any time of such Confidential Information except as
                            contemplated hereunder
                            (iv) not to copy or reverse engineer any such Confidential Information, and
                            (v) that any employee, subcontractor, or agent given access to any such Confidential
                            Information must have a legitimate “need to know” and shall be bound in writing to comply
                            with the Receiving Party’s confidentiality obligations, whether generally or specific to
                            this Agreement.</p>
                        <section class="flex flex-row justify-between">
                            <div class="col-lg-4 cta-btn-container rounded-md text-center bg-gray-500"
                                 @click="policy=false">
                                <div class="text-center text-white h-8">
                                    <button type="submit">Back</button>
                                </div>
                            </div>
                            <div class="col-lg-4 cta-btn-container rounded-md text-center bg-blue-500"
                                 @click="contactUs">
                                <div class="text-center text-white h-8">
                                    <button type="submit">Next</button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "Services",
        data() {
            return {
                aboutUs: false,
                serve: false,
                contact: false,
                home: false,
                nav: false,
                policy: false,
                serviceModel: false,
                packageModel: false,
                packages: [
                    {
                        'price': 999,
                        'title': 'Weekly',
                    },
                    {
                        'price': 9,
                        'title': 'Monthly',
                    },
                    {
                        'price': '',
                        'title': 'Quarterly',
                    },
                    {
                        'price': 6999,
                        'title': 'HalfYearly',
                    },
                    {
                        'price': '',
                        'title': 'Yearly',
                    }

                ],
                price:[
                    {
                        'price': 999,
                        'title':'Weekly Plan',
                        'session':'1 ',
                        'validity' : 5,
                        'acc' : 'Shared Account Manager (1 Accountant Handling 4 demat Accounts ).'
                    },
                    {
                        'price': 3999,
                        'title':'Monthly Plan',
                        'session':'4',
                        'validity' : 20,
                        'acc' : 'Shared Account Manager (1 Accountant Handling 2 demat Accounts ).'

                    },
                    {
                        'price': 11999  ,
                        'title':'Quarterly Plan',
                        'session':'48',
                        'validity' : 240,
                        'free':'Get 1 Week Extra',
                        'acc' : 'Dedicated Account Manager.'
                    },
                    {
                        'price': 23999,
                        'title':'Half-Yearly Plan',
                        'session':'48',
                        'validity' : 240,
                        'free':'Get 2 Week Extra',
                        'acc' : 'Dedicated Account Manager.'
                    },
                    {
                        'price': 45999,
                        'title':'Yearly Plan',
                        'session':'48',
                        'validity' : 240,
                        'free':'Get 4 Week Extra',
                        'acc' : 'Dedicated Account Manager.'
                    }

                ],
            }

        },
        methods: {
            about() {
                this.$router.push('/about');
            },
            service() {
                this.$router.push('/registration')
            },
            homeBack() {
                this.$router.push('/');
            },
            contactUs() {
                this.$router.push('/contact');
            },
            menuBar() {
                this.nav = !this.nav;
            },

            privacy() {
                this.$router.push('/policy')
            },
            async showPolicy() {
                console.log('policy');
               let {data} = await axios.get(`/api/generate-pdf`);
                console.log(data);
            },
            showModel() {
                this.packageModel = !this.packageModel;
            },
            // async download(){
            //     await axios.get(`/api/generate-pdf`);
            // }
        }
    }
</script>

<style scoped>

</style>
