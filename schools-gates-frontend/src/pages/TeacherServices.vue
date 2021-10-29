<template>
  <div>
    <v-main>
      <!-- Provides the application the proper gutter -->
      <v-container class="grey lighten-5 mb-6 mt-6">
        <v-row :align="'center'" no-gutters>
          <v-col :align="'center'">
            <v-card class="mx-auto">
              <div class="white--text teal align-center" height="200px">
                <div class="pt-10 pb-10"><h1>بوابة معلمي الانتساب</h1></div>
              </div>

              <h4 class="pt-5 pb-5">مرحبا بكم في بوابة معلمي الانتساب</h4>
            </v-card>
          </v-col>
        </v-row>
        <v-row :align="'center'" class="mt-10" no-gutters>
          <v-col :align="'center'">
            <v-card class="mx-auto">
              <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
              <v-row class="ma-2">
                <v-col
                  cols="12"
                  md="4"
                  v-for="(item, index) in [1, 2, 3, 4, 5, 6]"
                  :key="index"
                >
                  <v-card class="pa-2" outlined tile>
                    <v-card class="mx-auto" max-width="400">
                      <v-img
                        class="white--text align-end"
                        height="200px"
                        src="https://vstedu.azureedge.net/v9/content/homepage/img/logo_ex.png"
                      >
                      </v-img>
                      <hr />
                      <h3 class="mt-6">هنا سيكون خدمة</h3>
                      <div class="mt-4 mb-4">
                        <v-btn class="mt-4 mb-4" dark depressed color="teal">
                          عرض
                        </v-btn>
                      </div>
                    </v-card>
                  </v-card>
                </v-col>
              </v-row>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </div>
</template>

<script>
export default {
  name: "TeacherServices",
  data: () => ({}),
};
</script>
