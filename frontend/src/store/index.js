import Vue from 'vue';
import Vuex from 'vuex';
import axios from "axios";

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    projects: [],
  },
  getters: {
    api() {
      return process.env.VUE_APP_API;
    },
    getProjects(state, getters) {
      return state.projects.map(project => {
        return {
          title: project.title,
          description: project.description,
          logo: getters.api + project.logo,
          image: getters.api + project.image,
          background: project.background,
          tags: project.tags,
        }
      })
    }
  },
  mutations: {
    setProjects(state, projects) {
      state.projects = projects;
    }
  },
  actions: {
    async getProjects({commit, getters}) {
      const URL = getters.api + '/api/projects';
      const response = await axios(URL);
      const projects = response.data.data;
      commit('setProjects', projects);
    },
  },
  modules: {
  }
});
