<template>
    <div>
        <div class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover"
             style="background-image:url('/images/back-sha.jpg')">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
                <!--Main Col-->
                <div id="profile"
                     class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl  opacity-75 mx-6 lg:mx-0">
                    <div class="p-4 md:p-12 text-center lg:text-left">
                        <!-- Image for mobile view-->
                        <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div>
                        <h1 v-show="elementVisibleFirst" class="text-4xl  pt-8 lg:pt-0 text-white font-serif">Shakuntalam InfoSolutions</h1>
                        <div class="flex flex-row w-full">
                            <div v-show="elementVisibleSecond"
                                 class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-4 border-white opacity-25 "></div>
                            <hr  v-show="elementVisibleSecond"  class="mx-auto w-1/5 lg:mx-0 mt-4 bg-gray-500 border-8 dark:bg-gray-700">
                        </div>
                        <p v-show="elementVisibleThird" class="pt-8 text-sm text-white">India's First Real Time
                            Accounting and Book-keeping Services For demat Accounts.</p>
                        <div v-show="elementVisibleFour" class="pt-12 pb-8">
                            <button class=" text-white font-bold py-2 px-4 border border-white rounded-full"
                                    @click="register">
                                Get In Touch
                            </button>
                        </div>
                        <!-- Use https://simpleicons.org/ to find the svg for your preferred product -->
                    </div>
                </div>
                <!--Img Col-->
                <div class="w-full lg:w-2/5">
                    <!-- Big profile image for side bar (desktop) -->
                    <img src="images/ezgif-3-8c5b436662.png"
                         class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
                    <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
                </div>
                <!-- Pin to top right corner -->
                <div class="absolute top-0 right-0 h-12 w-18 p-4">
                    <button class="js-change-theme focus:outline-none">🌙</button>
                </div>
            </div>
        </div>
        <div class="fixed right-0 bottom-0 m-6 p-2 bg-white inline-flex items-center rounded-full z-10">
            <button class="bg-gray-700 w-4 h-4 rounded-full mr-2 outline-none focus:outline-none" theme-button="gray">
            
            </button>
            <button class="bg-red-700 w-4 h-4 rounded-full mr-2 outline-none focus:outline-none"
                    theme-button="red"></button>
            <button class="bg-orange-700 w-4 h-4 rounded-full mr-2 outline-none focus:outline-none"
                    theme-button="orange"></button>
        </div>
        <div class="font-sans antialiased bg-gradient-to-r from-purple-500 to-pink-500 leading-normal tracking-wider bg-cover">
            <div class="max-w-4xl flex items-center h-5 lg:h-5 flex-wrap mx-auto my-32 lg:my-0">

            </div>
        </div>
        <div class="font-sans antialiased bg-gray-200 leading-normal tracking-wider bg-cover">
            <div class="max-w-4xl flex items-center h-96 lg:h-96 flex-wrap mx-auto my-32 lg:my-0">
                <img src="https://im3.ezgif.com/tmp/ezgif-3-ec928033e7.png">
            </div>
        </div>
        <!--        <div class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover">-->
        <!--            <div class="max-w-4xl flex items-center h-36 lg:h-36 flex-wrap mx-auto my-32 lg:my-0">-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div id="profile"-->
        <!--             class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl  opacity-75 mx-6 lg:mx-0">-->


        <!--            <div class="p-4 md:p-12 text-center lg:text-left">-->
        <!--                &lt;!&ndash; Image for mobile view&ndash;&gt;-->
        <!--                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center"-->
        <!--                     style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')">-->

        <!--                </div>-->

        <!--                <h1 v-show="elementVisibleFirst" class="text-4xl  pt-8 lg:pt-0 text-white font-serif">-->
        <!--                    Shakuntalam InfoSolutions</h1>-->
        <!--                <div class="flex flex-row w-full">-->
        <!--                    <div v-show="elementVisibleSecond"-->
        <!--                         class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-4 border-white opacity-25 "></div>-->
        <!--                    <hr  v-show="elementVisibleSecond"  class="mx-auto w-1/5 lg:mx-0 mt-4 bg-gray-500 border-8 dark:bg-gray-700">-->
        <!--                </div>-->
        <!--                <p v-show="elementVisibleThird" class="pt-8 text-sm text-white">India's First Real Time-->
        <!--                    Accounting and Book-keeping Services For demat Accounts.</p>-->

        <!--                <div v-show="elementVisibleFour" class="pt-12 pb-8">-->
        <!--                    <button class=" text-white font-bold py-2 px-4 border border-white rounded-full"-->
        <!--                            @click="register">-->
        <!--                        Get In Touch-->
        <!--                    </button>-->
        <!--                </div>-->


        <!--                &lt;!&ndash; Use https://simpleicons.org/ to find the svg for your preferred product &ndash;&gt;-->

        <!--            </div>-->
        <!--        </div>-->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                number: false,
                elementVisibleFirst :false,
                elementVisibleSecond :false,
                elementVisibleThird:false,
                elementVisibleFour:false,
                hoverFb :false,
                hoverinsta :false,
                hoverg :false,
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
            setTimeout(() => this.elementVisibleFirst = true, 1100)
            setTimeout(() => this.elementVisibleSecond = true, 1150)
            setTimeout(() => this.elementVisibleThird = true, 1160)
            setTimeout(() => this.elementVisibleFour = true, 1170)
        },
        methods: {
            register() {
                console.log('clicked')
               this.$router.push({name:'register'});
            },
            onSubmit() {
                if (this.success) {
                    this.login();
                } else {
                    this.sendOTP();
                }
            },
            async sendOTP() {
                this.processing = true;
                try {
                    const {data} = await axios.post('/api/send-otp', this.auth);
                    this.success = true;
                    this.label = 'Login'
                    this.auth.generatedOTP = data.generatedOTP;
                    this.$toast(`Code: ${this.auth.generatedOTP}`);
                } catch ({response}) {
                    if (response.data.errors) {
                        for (const [key, value] of Object.entries(response.data.errors)) {
                            this.formErrors[key] = value[0];
                        }
                    }
                    if (response.data.error) {
                        this.formErrors.mobileNo = response.data.error;
                    }
                } finally {
                    this.processing = false;
                }
            },
            async login() {
                this.processing = true;
                await axios.get('/sanctum/csrf-cookie');
                try {
                    await axios.post('/api/login', this.auth);
                    this.success = true;
                    let authResponse = await axios.get('/api/user');
                    this.$store.dispatch('setAuthUser', authResponse.data);
                    this.$router.push({name: 'dashboard'});
                } catch ({response}) {
                    if (response.data.errors) {
                        for (const [key, value] of Object.entries(response.data.errors)) {
                            this.formErrors[key] = value[0];
                        }
                    }
                    if (response.data.error) {
                        this.formErrors.OTP = response.data.error;
                    }
                } finally {
                    this.processing = false;
                }
            }
        }
    }
</script>

<style scoped>

</style>
