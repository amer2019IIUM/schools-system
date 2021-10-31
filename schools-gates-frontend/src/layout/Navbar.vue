<template>
  <div>
    <v-app-bar color="teal" app>
      <v-row align="center" justify="center">
        <router-link :to="{ name: 'teacher-page' }">
          <v-btn class="mr-3" dark color="teal lighten-2">
            خدمات المعلمين
          </v-btn>
        </router-link>
        <router-link :to="{ name: 'student-page' }">
          <v-btn class="mr-3" dark color="teal lighten-2"> خدمات الطلاب </v-btn>
        </router-link>
        <router-link :to="{ name: 'register-page' }">
          <v-btn class="mr-3" dark color="teal lighten-2">التسجيل</v-btn>
        </router-link>
      </v-row>
    </v-app-bar>
  </div>
</template>

<script>
export default {
  name: "Navbar",
  data: () => ({}),
};
</script>
