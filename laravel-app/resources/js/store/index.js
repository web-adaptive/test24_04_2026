import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        forms: [],
    },
    mutations: {
        ADD_FORM(state, payload) {
            state.forms.push(payload);
        },
    },
    actions: {
        async submitFeedback({ commit }, payload) {
            await axios.post('/api/feedback', payload);
            commit('ADD_FORM', payload);
        },
    },
});
