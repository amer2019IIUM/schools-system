<template>
  <div>
    <v-app>
      <navbar />
      <teacher-services />
      <Footer />
    </v-app>
  </div>
</template>

<script>
import Footer from "./layout/Footer.vue";
import Navbar from "./layout/Navbar.vue";
import TeacherServices from "./pages/TeacherServices.vue";
export default {
  components: { Navbar, Footer, TeacherServices },
  name: "App",
  data: () => ({}),
};
</script>
