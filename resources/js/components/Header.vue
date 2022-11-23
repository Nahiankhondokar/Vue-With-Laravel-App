<template>
  <h1 class="text-center mt-5 text-4xl"><strong>All Candidates</strong></h1>
</template>

<script>
export default {
  data() {
    return {
      coins: "",
    };
  },
  methods: {
    getCoins() {
      axios.get("/coins").then((res) => {
        this.coins = res.data;
      });
    },
  },
  mounted() {
    this.getCoins();
  },
};
</script>
