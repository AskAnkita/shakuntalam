import Vue from 'vue';
import Vuex from 'vuex';
import auth from "./modules/auth";

Vue.use(Vuex);

const state = {
    title: null
};

const mutations = {
    setTitle (state, title) {
        this.state.title = title;
    }
}

export default new Vuex.Store({
    modules: {
        auth
    },
    state,
    mutations,
    strict: true
});
