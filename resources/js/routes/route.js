// vue router support
import Vue from "vue";
import VueRouter from "vue-router";
import Test from "../components/Test.vue";
import Header from "../components/Header.vue";
Vue.use(VueRouter);

const routes = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      component: Test,
      name: "candidates",
    },
  ],
});

export default routes;
