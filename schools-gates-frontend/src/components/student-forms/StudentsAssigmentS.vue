<template>
  <v-main>
    <!-- Provides the application the proper gutter -->
    <v-container class="grey lighten-5 mb-6 mt-6">
      <div>
        <v-card class="pa-2" outlined tile>
          <v-row :align="'center'" no-gutters>
            <v-col :align="'center'">
              <v-card class="mx-auto">
                <div class="white--text teal align-center" height="200px">
                  <div class="pt-10 pb-10"><h1>التكليفات المطلوبة</h1></div>
                </div>
              </v-card>
            </v-col>
          </v-row>
          <v-container fluid>
            <v-row align="center">
              <v-col cols="12">
                <v-select
                  :items="courses"
                  v-model="course"
                  filled
                  label="اختر المادة"
                ></v-select>
              </v-col>

              <v-col cols="12" v-if="course == 'علوم'">
                <v-simple-table class="elevation-1 teal lighten-5">
                  <template v-slot:default>
                    <thead>
                      <tr>
                        <th>اسم التكليف</th>
                        <th>اسم المعلم/ة</th>
                        <th>عرض التكليف</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="course in courses" :key="course.name">
                        <td>رسم الجهاز التنفسي</td>
                        <td>عامر جابر</td>
                        <td>
                          <v-btn
                            :loading="loading3"
                            :disabled="loading3"
                            color="teal"
                            class="white--text"
                            @click="loader = 'loading3'"
                          >
                            عرض
                            <v-icon right dark> mdi-cloud-upload </v-icon>
                          </v-btn>
                        </td>
                      </tr>
                    </tbody>
                  </template>
                </v-simple-table>
              </v-col>
              <v-col cols="12" v-if="course == ''">
                <v-card class="elevation-1 teal lighten-5" height="250px">
                </v-card>
              </v-col>
            </v-row>
          </v-container>
        </v-card>
      </div>
    </v-container>
  </v-main>
</template>

<script>
export default {
  watch: {
    loader() {
      const l = this.loader;
      this[l] = !this[l];

      setTimeout(() => (this[l] = false), 3000);

      this.loader = null;
    },
  },
  data() {
    return {
      loader: null,
      course: "",
      courses: ["", "علوم", "علوم", "علوم"],
      loading3: false,
    };
  },
};
</script>

<style scoped>
.custom-loader {
  animation: loader 1s infinite;
  display: flex;
}
@-moz-keyframes loader {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
@-webkit-keyframes loader {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
@-o-keyframes loader {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
@keyframes loader {
  from {
    transform: rotate(0);
  }
  to {
    transform: rotate(360deg);
  }
}
</style>
