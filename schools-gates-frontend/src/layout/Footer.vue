<template>
  <v-footer color="black" padless>
    <v-row justify="center" no-gutters>
      <v-btn color="white" text rounded class="my-2"> خدمات المعلمين </v-btn>
      <v-btn color="white" text rounded class="my-2"> خدمات الطلاب </v-btn>
      <v-col class="black py-4 text-center white--text" cols="12">
        {{ new Date().getFullYear() }} — <strong>المدراس السعودية</strong>
      </v-col>
    </v-row>
  </v-footer>
</template>

<script>
export default {
  name: "Footer",
  data: () => ({}),
};
</script>
