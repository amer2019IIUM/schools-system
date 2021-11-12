<template>
  <v-main>
    <div v-if="$apollo.loading">
      <v-sheet
        :color="`grey ${theme.isDark ? 'darken-2' : 'lighten-4'}`"
        class="pa-3"
        height="300"
      >
        <v-skeleton-loader
          class="mx-auto"
          max-width="800"
          type="card"
        ></v-skeleton-loader>
      </v-sheet>
    </div>
    <!-- Provides the application the proper gutter -->
    <v-container class="grey lighten-5 mb-6 mt-6" v-else>
      <v-card class="mx-auto my-12" max-width="800" flat tile>
        <v-row :align="'center'" no-gutters>
          <v-col :align="'center'">
            <v-card class="mx-auto">
              <div class="white--text teal align-center" height="200px">
                <div class="pt-10 pb-10"><h1>التعاميم والإعلانات</h1></div>
              </div>
            </v-card>
          </v-col>
        </v-row>
        <v-container>
          <v-row>
            <v-spacer></v-spacer>
            <v-col
              v-for="(card, index) in announcements"
              :key="index"
              cols="12"
            >
              <v-card>
                <v-img :src="card.path" height="500px"> </v-img>
                <h2 class="px-10 pt-2">{{ card.title }}</h2>
                <p class="pa-10 pt-0">
                  {{ card.body }}
                </p>
              </v-card>
            </v-col>
          </v-row>
        </v-container>
      </v-card>
    </v-container>
  </v-main>
</template>

<script>
import Announcement from "../../graphql/shared/queries/announcements.gql";
export default {
  inject: {
    theme: {
      default: { isDark: false },
    },
  },
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
  apollo: {
    announcements: {
      query: Announcement,
      update(data) {
        return data.announcements.data;
      },
    },
  },
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
