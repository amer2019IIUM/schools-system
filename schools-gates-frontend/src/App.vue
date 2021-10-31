<template>
  <div>
    <v-app>
      <navbar />
      <router-view></router-view>
      <Footer />
    </v-app>
  </div>
</template>

<script>
import Footer from "./layout/Footer.vue";
import Navbar from "./layout/Navbar.vue";
export default {
  components: { Navbar, Footer },
  name: "App",
  data: () => ({}),
};
</script>
