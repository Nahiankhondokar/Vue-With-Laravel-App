<template>
  <div class="container">
    <h1 class="p-40 text-4xl font-bold text-center">
      Welcome to the Hiring Platform
    </h1>
    <div class="flex items-center justify-center">
      <router-link
        :to="{ name: 'candidates' }"
        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow align-middle"
      >
        Go to Candidates List
      </router-link>
    </div>
  </div>
</template>

<script>
export default {};
</script>
