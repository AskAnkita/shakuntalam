<template>
    <div>
        <main id="main" class="mt-16">
        <section id="contact" class="contact">
            <div class="container" >
                <div class="section-title">
                    <h2>Contact</h2>
                    <h4>We are here to help you grow your business.</h4>
                    <p>Simply fill out the form to get in touch with our experts. We aim to respond within 1 business day..</p>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Dadra road, After Railway Crossing<br>
                                    Near - Ashish Gas Agency, Musafirkhana,<br>
                                    Amethi - 227813</p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@shakuntalaminfosolutions.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+91 8957918830</p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3574.2224252074852!2d81.79533531503377!3d26.38400078335817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4338e2621c133505%3A0xc8be8db9f5e8d920!2sShakuntalam%20Infosolutions!5e0!3m2!1sen!2sin!4v1669455144525!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form class="php-email-form" >
                            <div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" id="name" autocomplete="off" class="form-control " v-model="form.name">
                                        <span class="text-red-700 mb-30" v-if="formErrors.name" v-text="formErrors.name"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email-address">Email address</label>
                                        <input type="email" name="email-address" id="email-address" autocomplete="off" class="form-control " v-model="form.email">
                                        <span class="text-red-700 mb-30" v-if="formErrors.email" v-text="formErrors.email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="city" id="subject" autocomplete="off" class="form-control " v-model="form.subject">
                                    <span class="text-red-700 mb-30" v-if="formErrors.subject" v-text="formErrors.subject"/>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea v-model="form.message" class="form-control" name="message" id="message" rows="10"></textarea>
                                    <span class="text-red-700 mb-30" v-if="formErrors.message" v-text="formErrors.message"/>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn flex justify-center confer-btn my-4 bg-blue-500 w-full rounded-md text-white" @click="onSubmit">Send Message</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </section>
        </main>
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
                        <input type="number" class="form-control" placeholder="otp" v-model="auth.otp">
                        <span class="text-red-700 mb-30" v-if="formErrors.name" v-text="formErrors.name"/>
                    </div>
                    <button type="button" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2" @click="onConfirm">
                       Submit
                    </button>
                    <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600" @click="onResend">Resend</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    name: "Contact",
    data(){
        return{
            show:false,
            success: false,
            auth: {
                id: null,
                otp: null
            },
            form:{
                name: null,
                email:null,
                subject:null,
                message:null,
            },
            formErrors:{
                name: null,
                email:null,
                subject:null,
                message:null,
            }
        }
    },

    methods:{
        location(){
            window.open(
                "https://www.google.com/maps/place/Shakuntalam+Infosolutions/@26.3840008,81.797524,15z/data=!4m5!3m4!1s0x0:0xc8be8db9f5e8d920!8m2!3d26.3840008!4d81.797524" + urlSuffix,
                "_blank"
            );
        },
        onSubmit(){
            if (this.success) {
                console.log('welcome');
            } else {
                this.sendOTP();
            }
    
        },
        async sendOTP(){
            try {
                let {data} = await axios.post(`/api/otp/otp-request`, this.form);
                if(data){
                    this.show = !this.show;
                    this.success = true;
                    this.auth.id = data[0]['uniqueId'];
                    this.$toast(data.message);
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
        async onConfirm(){
            try {
                let {data} = await axios.post(`/api/otp/otp-validate`, this.auth);
                this.show = !this.show;
                this.$toast(data.message);
                
            } catch ({response}) {
                this.formErrors = {};
                if (response.data.errors) {
                    for (const [key, value] of Object.entries(response.data.errors)) {
                        this.formErrors[key] = value[0];
                    }
                }
            }
        },
        async onResend(){
            try {
                let {data} = await axios.post(`/api/otp/otp-resend`, this.auth);
                this.$toast(data.message);
                
            } catch ({response}) {
                this.formErrors = {};
                if (response.data.errors) {
                    for (const [key, value] of Object.entries(response.data.errors)) {
                        this.formErrors[key] = value[0];
                    }
                }
            }
        }
    }
}
</script>

<style scoped>

</style>
