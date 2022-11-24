<template>
  <div>
    <h1 class="text-center mt-5 text-4xl"><strong>All Candidates</strong></h1>
    <div class="table mt-5">
      <header class="bg-light p-3 mb-0 text-dark w-75 m-auto text-center">
        <div class="w-full p-3 bg-teal-100 text-center font-bold">
          Your wallet has: {{ coins }} coins
        </div>
      </header>
      <table class="table-striped shadow-lg table-light w-75 mt-0 m-auto">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Description</th>
            <th scope="col">Job Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in candidate" :key="item.id">
            <td scope="row">{{ item.id }}</td>
            <td>{{ item.name }}</td>
            <td>{{ item.email }}</td>
            <td>{{ item.description }}</td>
            <td>{{ item.hired ? "Hired" : "Not Hired" }}</td>
            <td width="15%">
              <a
                href=""
                class="btn btn-info btn-sm"
                @click.prevent="contactButton(item.id)"
                >Contact</a
              >
              <a
                href=""
                class="btn btn-success btn-sm"
                @click.prevent="hireButton(item.id)"
                >Hired</a
              >
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      candidate: [],
      coins: "",
    };
  },
  methods: {
    showCandidate() {
      try {
        axios.get("/show").then((res) => {
          this.candidate = res.data;
        });
      } catch ($error) {
        console.log($error);
      }
    },
    getCoins() {
      try {
        axios.get("/coins").then((res) => {
          this.coins = res.data;
        });
      } catch ($error) {
        console.log($error);
      }
    },
    contactButton(id) {
      axios.get(`/contact/${id}`).then((res) => {
        let type = res.data.type;
        let message = res.data.message;
        this.getCoins();

        if (type == "success") {
          this.$toast.success({
            title: type,
            message,
          });
        } else if (type == "warn") {
          this.$toast.warn({
            title: type,
            message,
          });
        } else {
          this.$toast.error({
            title: type,
            message,
          });
        }
      });
    },
    hireButton(id) {
      axios.get(`/hire/${id}`).then((res) => {
        let type = res.data.type;
        let message = res.data.message;
        this.getCoins();
        this.showCandidate();

        if (type == "success") {
          this.$toast.success({
            title: type,
            message,
          });
        } else if (type == "warn") {
          this.$toast.warn({
            title: type,
            message,
          });
        } else {
          this.$toast.error({
            title: type,
            message,
          });
        }
      });
    },
  },
  mounted() {
    this.showCandidate();
    this.getCoins();
  },
};
</script>
