import Vue from "vue";
import routes from "./routes/route";
require("./bootstrap");
import CxltToastr from "cxlt-vue2-toastr";
import "cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css";

// toaster package
var toastrConfigs = {
  position: "top right",
  showDuration: 1000,
  closeButton: true,
  timeOut: 5000,
  showMethod: "fadeIn",
  hideMethod: "fadeOut",
};
Vue.use(CxltToastr, toastrConfigs);

// Vue.component("app-header", require("./components/Header.vue").default);

// main app initialize
const app = new Vue({
  el: "#app",
  router: routes,
});
