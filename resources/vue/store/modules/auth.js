/*
|--------------------------------------------------------------------------
| Mutation Types
|--------------------------------------------------------------------------
*/

export const SET_USER = 'SET_USER';
export const UNSET_USER = 'UNSET_USER';

/*
|--------------------------------------------------------------------------
| Initial State
|--------------------------------------------------------------------------
*/
const initialState = {
    name: null,
    mobileNo: null,
    auth_checked: false
};

/*
|--------------------------------------------------------------------------
| Mutations
|--------------------------------------------------------------------------
*/
const mutations = {
    [SET_USER](state, payload) {
        state.name = payload.user.name;
        state.mobileNo = payload.user.mobile_no;
    },
    [UNSET_USER](state, payload) {
        state.name = null;
        state.mobileNo = null;
    },
    setAuthChecked(state, payload) {
        state.auth_checked = true;
    }
};

/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
const actions = {
    isLoggedIn: async ({state, commit, dispatch, getters}) => {
        if(!state.name && !state.mobileNo) {
            if(!state.auth_checked) {
                commit('setAuthChecked');
                try {
                    let {data} = await axios.get('/api/user');
                    dispatch('setAuthUser', data);
                    return 200;
                } catch(error) {
                    return error.response.status;
                }
            }
        }
        else {
            return 200;
        }
        return 401;
    },
    setAuthUser: (context, user) => {
        context.commit(SET_USER, {user})
    },
    authChecked: (context) => {
        context.commit('isChecked', true);
    },
    unsetAuthUser: (context) => {
        context.commit(UNSET_USER);
    }
};

/*
|--------------------------------------------------------------------------
| Getters
|--------------------------------------------------------------------------
*/
const getters = {
    isLoggedIn: (state) => {
        return !!(state.name && state.mobileNo);
    }
};

/*
|--------------------------------------------------------------------------
| Export the module
|--------------------------------------------------------------------------
*/
export default {
    state: initialState,
    mutations,
    actions,
    getters
}
