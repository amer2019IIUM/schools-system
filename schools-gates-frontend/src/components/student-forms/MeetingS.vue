<template>
  <v-main>
    <!-- Provides the application the proper gutter -->
    <v-container class="grey lighten-5 mb-6 mt-6">
      <v-card flat tile>
        <v-row :align="'center'" no-gutters>
          <v-col :align="'center'">
            <v-card class="mx-auto">
              <div class="white--text teal align-center" height="200px">
                <div class="pt-10 pb-10">
                  <h1>حضور اجتماع طلاب الانتساب</h1>
                </div>
              </div>
            </v-card>
          </v-col> </v-row
        ><v-container
          v-for="type in types"
          :key="type"
          class="grey lighten-4"
          fluid
        >
          <v-row>
            <v-spacer></v-spacer>
            <v-col v-for="card in cards" :key="card" cols="12">
              <v-card class="">
                <v-card color="teal lighten-4">
                  <h4 class="px-10 pt-2">اجتماع الاحتفال الوطني</h4></v-card
                >
                <h2 class="px-10 pt-2"></h2>
                <p class="pa-10 pt-0">
                  السلام عليكم, سيكون يوم الجمعة اجتماع الاحتفال الوطني الموافق
                  2021/11/30 رابط الاجتماع: meeting.amer.com
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
