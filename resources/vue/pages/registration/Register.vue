<template>
    <section class="h-full gradient-form lg:h-full md:h-full w-screen  bg-gradient-to-r from-cyan-500 to-blue-500">
        <header id="header" class="h-20 flex justify-content-between">
            <div class="cursor-pointer ">
                <router-link :to="{name: 'dashboard'}">
<!--                    <img src="/images/Web.png" class="h-3/4	ml-4">-->

                </router-link>
            </div>
            <router-link :to="{name: 'service'}">
<!--                <svg class="w-8 h-8 cursor-pointer mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>-->
            </router-link>
        </header>
        <div id="registration" class="container px-6 h-auto border border-gray-200 rounded rounded-lg w-9/12 md:w-10/12 lg:w-2/4 bg-white">
            <div class="md:p-12 md:mx-6 items-center justify-center">
                <div class="flex justify-content-between">
                <h2 class="font-bold text-2xl">Register</h2>
                <router-link :to="{name: 'service'}">
                    <svg class="w-8 h-8 cursor-pointer mr-4 flex" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </router-link>
                </div>
                <form>
                    <div class="col-12 col-lg-12 flex">
                        <div class="col-6 col-lg-6">
                            <div class="form-group">
                                <label for="fname" class="mt-4 text-sm font-semibold">First Name</label>
                                <input type="text" name="name" id="fname" autocomplete="off" class="form-control" v-model="form.fname">
                                <span class="text-red-700 mb-30" v-if="formErrors.fname" v-text="formErrors.fname"/>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 px-2">
                            <div class="form-group">
                                <label for="lname" class="mt-4 text-sm font-semibold">Last Name</label>
                                <input type="text" name="name" id="lname" autocomplete="off" class="form-control " v-model="form.lname">
                                <span class="text-red-700 mb-30" v-if="formErrors.lname" v-text="formErrors.lname"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="form-group">
                            <label for="address" class="mt-4 text-sm font-semibold">Address</label>
                            <input type="text" name="city" id="address" autocomplete="off" class="form-control " v-model="form.address">
                            <span class="text-red-700 mb-30" v-if="formErrors.address" v-text="formErrors.address"/>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 flex">
                        <div class="col-4 col-lg-4">
                            <div class="form-group">
                                <label for="city" class="mt-4 text-sm font-semibold">City</label>
                                <input type="email" name="city" id="city" autocomplete="off" class="form-control " v-model="form.city">
                                <span class="text-red-700 mb-30" v-if="formErrors.city" v-text="formErrors.city"/>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4 px-2">
                            <div class="form-group">
                                <label for="state" class="mt-4 text-sm font-semibold">State</label>
                                <input type="text" maxlength="10" name="state" id="state" autocomplete="off" class="form-control " v-model="form.state">
                                <span class="text-red-700 mb-30" v-if="formErrors.state" v-text="formErrors.state"/>
                            </div>
                        </div>
                        <div class="col-4 col-lg-4">
                            <div class="form-group">
                                <label for="pincode" class="mt-4 text-sm font-semibold">Pincode</label>
                                <input type="number" maxlength="10" name="pincode" id="pincode" autocomplete="off" class="form-control " v-model="form.pincode">
                                <span class="text-red-700 mb-30" v-if="formErrors.pincode" v-text="formErrors.pincode"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 flex">
                        <div class="col-6 col-lg-6">
                            <div class="form-group">
                                <label for="mobile-number" class="mt-4 text-sm font-semibold">Mobile Number</label>
                                <input type="number" maxlength="10" name="mobile-number" id="mobile-number" autocomplete="off" class="form-control " v-model="form.contact_no">
                                <span class="text-red-700 mb-30" v-if="formErrors.contact_no" v-text="formErrors.contact_no"/>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6 px-2">
                            <div class="form-group">
                                <label for="email-address" class="mt-4 text-sm font-semibold">Email Address</label>
                                <input type="email" name="email-address" id="email-address" autocomplete="off" class="form-control " v-model="form.email">
                                <span class="text-red-700 mb-30" v-if="formErrors.email" v-text="formErrors.email"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="form-group mt-4">
<!--                            <input type="checkbox" value="true" id="flexCheckDefault" >-->
                            <label class="form-check-label inline-block text-gray-800">Already have a demat account</label>
                            <div class="flex flex-row">
                                <div class="flex items-center m-2">
                                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4" @change="checked = !checked" v-model="form.demate">
                                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                                </div>
                                <div class="flex items-center m-2">
                                    <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4" @change="checkedNo">
                                    <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                                </div>
                            </div>
                            <!--                            <span class="text-red-700 mb-30" v-if="formErrors.address" v-text="formErrors.address"/>-->
                        </div>
                    </div>
                    <div class="col-12 col-lg-12" v-if="checked">
                        <label class="mt-4 text-sm font-semibold">Broker</label>
                        <multiselect v-model="form.broker" :options="brokers" :multiple="false" :max-height="700" label="name" class="form-control cursor-pointer bg-white" size="30" style="height: 100%" @select="open"/>
<!--                            <span class="text-red-700 mb-30" v-if="formErrors.address" v-text="formErrors.address"/>-->
                    </div>
                    <div class="col-12 col-lg-12" v-if="openBroker">
                        <div class="form-group">
                            <label for="openBroker" class="mt-4 text-sm font-semibold">Broker Name</label>
                            <input type="text" name="city" id="openBroker" autocomplete="off" class="form-control" v-model="form.openBroker">
                            <span class="text-red-700 mb-30" v-if="formErrors.openBroker" v-text="formErrors.openBroker"/>
                        </div>
                    </div>
                    <button type="button" class="btn flex justify-center confer-btn my-4 bg-blue-500 w-full rounded-md"
                            @click="onSubmit">Submit
                    </button>

                </form>
            </div>
        </div>
        <div class="fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal h-full flex justify-center bg-black/50" v-show="show">
        <div class="relative w-full h-full max-w-md md:h-auto flex align-items-center">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="delete-popup-modal" @click="show = false">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div class="form-group mb-3">
                        <input type="number" class="form-control" placeholder="otp" v-model="form.otp">
                        <span class="text-red-700 mb-30" v-if="formErrors.name" v-text="formErrors.name"/>
                    </div>
                    <button type="button" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2" @click="onConfirm.onAction ? onConfirm.onAction() : {}">
                       Submit
                    </button>
                
                </div>
            </div>
        </div>
    </div>
    </section>
</template>

<script>
    import {Multiselect} from "vue-multiselect";
    export default {
        name: "Register",
        components: {
            Multiselect
        },
        data() {
            return {
                className: {
                    label: 'block text-md font-medium text-gray-700',
                    input: 'mt-1 block w-full px-3 py-2 mb-2 rounded-md border-2 border-gray-100 shadow-sm border focus:outline-none focus:ring-1 ring-indigo-500 sm:text-sm'
                },
                form: {
                    fname: null,
                    lname: null,
                    contact_no: null,
                    email: null,
                    address: null,
                    city: null,
                    state: null,
                    pincode: null,
                    demat: 0,
                    broker:null,
                    openBroker:null
                },
                formErrors: {
                    fname: null,
                    lname: null,
                    contact_no: null,
                    email: null,
                    address: null,
                    city: null,
                    state: null,
                    pincode: null,
                    demat: 0,
                    broker:null,
                    openBroker:null
                },
                brokers:[
                    {name:'ZERODHA'},
                    {name:'ICICI DIRECT'},
                    {name:'HDFC SECURITIES'},
                    {name:'ANGEL BROKING ( ANGEL ONE )'},
                    {name:'5PAISA'},
                    {name:'UPSTOX' },
                    {name:'SHAREKHAN'},
                    {name:'MOTILAL OSWAL'},
                    {name:'KOTAK SECURITIES'},
                    {name:'INDIA INFOLINE (IIFL)'},
                    {name:'SBI CAP SECURITIES (SSL)'},
                    {name:'CHOICE'},
                    {name:'TRADE SMART'},
                    {name:'PAYTM MONEY'},
                    {name:'GROWW'},
                    {name:'  AXIS DIRECT'},
                    {name:'OTHER'},
                ],
                processing: false,
                success: false,
                checked:false,
                openBroker:false,
                label: 'Send OTP'

            }
        },
        methods: {
            async onSubmit() {
                try {
                    let {data} = await axios.post(`/api/customers`, this.form);
                    if (data) {
                        this.$toast(data.message);
                        this.$router.push({name: 'policy'});
                    }
                } catch ({response}) {
                    this.formErrors = {};
                    if (response.data.errors) {
                        for (const [key, value] of Object.entries(response.data.errors)) {
                            this.formErrors[key] = value[0];
                        }
                    }
                }
            },
            homeBack() {
                this.$router.push({name: '/'});
            },
            packages() {
                this.$router.push('/service').catch(() => {
                });
            },
            open(value){
                if(value.name === 'OTHER'){
                   return this.openBroker = !this.openBroker;
                }else{
                    this.openBroker = false;
                }

            },
            checkedNo(){
                this.checked = false;
                this.openBroker = false;

            }
        }
    }
</script>

<style scoped>

</style>
