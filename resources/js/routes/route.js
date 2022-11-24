// vue router support
import Vue from "vue";
import VueRouter from "vue-router";
import Candidates from "../components/Candidates.vue";
import Home from "../components/Home.vue";
import NotFound from "../components/NotFound.vue";
Vue.use(VueRouter);

// all routes area here
const routes = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      component: Home,
      name: "home",
    },
    {
      path: "/candidates",
      component: Candidates,
      name: "candidates",
    },
    {
      path: "/:pathMatch(.*)*",
      component: NotFound,
      name: "found",
    },
  ],
});

export default routes;
