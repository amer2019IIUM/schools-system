<template>
  <v-main>
    <!-- Provides the application the proper gutter -->
    <v-container class="grey lighten-5 mb-6 mt-6">
      <v-card class="mx-auto my-12" max-width="800" flat tile>
        <v-row :align="'center'" no-gutters>
          <v-col :align="'center'">
            <v-card class="mx-auto">
              <div class="white--text teal align-center" height="200px">
                <div class="pt-10 pb-10"><h1>جداول المقررات</h1></div>
              </div>
            </v-card>
          </v-col>
        </v-row>
        <v-container class="grey lighten-4" fluid>
          <v-row>
            <v-spacer></v-spacer>
            <v-col cols="12">
              <v-card>
                <v-img
                  src="https://antitrustlair.files.wordpress.com/2012/02/6a014e5fdb89d5970c014e8a755fba970d-800wi.jpg"
                  height="800px"
                >
                </v-img>
              </v-card>
            </v-col>
          </v-row>
        </v-container>
      </v-card>
    </v-container>
  </v-main>
</template>

<script>
export default {
  data: () => ({
    types: ["Places to Be", "Places to See"],
    cards: ["Good", "Best", "Finest"],
    socials: [
      {
        icon: "mdi-facebook",
        color: "indigo",
      },
      {
        icon: "mdi-linkedin",
        color: "cyan darken-1",
      },
      {
        icon: "mdi-instagram",
        color: "red lighten-3",
      },
    ],
  }),

  methods: {
    getImage() {
      const min = 550;
      const max = 560;

      return Math.floor(Math.random() * (max - min + 1)) + min;
    },
  },
};
</script>
<style scoped>
@media (min-width: 0px) and (max-width: 1000px) {
  .announcement-div {
    max-width: 100%;
  }
}
</style>
