const state = {
    users : []
}

const mutations = {
    'SAVE_USER' (state, users){
        state.users = users;
    },
    'GET_USER' (state, users){
        state.users = users;
    },
    'INIT_USER' (state, users) {
        state.users = users;
    }
}

const actions = {
    saveUser : ({commit}, user) => {
        commit('SAVE_USER', user);
    },
    getUser : ({commit}, users) =>{
        commit('GET_USER', users);
    },
    initUser : ({commit}, users) => {
        commit('INIT_USER', users);
    }
}

const getters = {
    users (state){
        return state.users;
    }
};

export default {
    state,
    mutations,
    actions,
    getters
}