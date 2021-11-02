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
                  <div class="pt-10 pb-10"><h1>متابعة التكليفات</h1></div>
                </div>
              </v-card>
            </v-col>
          </v-row>
          <v-container fluid>
            <v-row align="center">
              <v-col cols="12">
                <v-select
                  :items="['1', '2', '3', '4']"
                  filled
                  label="بلد الانتساب"
                ></v-select>
              </v-col>
              <v-col cols="12">
                <v-select
                  :items="['1', '2', '3', '4']"
                  filled
                  label="اختر الفصل الذي تريد متابعة التكليفات له"
                ></v-select>
              </v-col>
              <v-col cols="12">
                <v-select
                  :items="['1', '2', '3', '4']"
                  filled
                  label="اختر المادة"
                ></v-select>
              </v-col>
              <v-col cols="12">
                <v-select
                  :items="['1', '2', '3', '4']"
                  filled
                  label="عنوان التكليف"
                ></v-select>
              </v-col>
              <v-col cols="12">
                <v-select
                  v-model="submissioType"
                  :items="submissionOptions"
                  filled
                  label="الطلاب"
                ></v-select>
              </v-col>
              <v-col cols="12" v-if="submissioType == 'الطلاب الذين سلموا'">
                <v-simple-table class="elevation-1 teal lighten-5">
                  <template v-slot:default>
                    <thead>
                      <tr>
                        <th>اسم الطالب</th>
                        <th>المادة</th>
                        <th>تم التسليم</th>
                        <th>عرض التسليم</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        v-for="item in [1, 2, 3, 4, 5, 6, 7]"
                        :key="item.name"
                      >
                        <td>احمد</td>
                        <td>قران</td>
                        <td>
                          <v-btn fab dark small color="teal">
                            <v-icon dark> mdi-checkbox-marked-circle </v-icon>
                          </v-btn>
                        </td>
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
              <v-col cols="12" v-if="submissioType == 'الطلاب الذين لم يسلموا'">
                <v-simple-table class="elevation-1 pink lighten-5">
                  <template v-slot:default>
                    <thead>
                      <tr>
                        <th>اسم الطالب</th>
                        <th>المادة</th>
                        <th>تم التسليم</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        v-for="item in [1, 2, 3, 4, 5, 6, 7]"
                        :key="item.name"
                      >
                        <td>احمد</td>
                        <td>قران</td>
                        <td>
                          <v-btn color="pink" dark>
                            لم يسلم
                            <v-icon dark right> mdi-cancel </v-icon>
                          </v-btn>
                        </td>
                      </tr>
                    </tbody>
                  </template>
                </v-simple-table>
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
      submissioType: null,
      submissionOptions: ["", "الطلاب الذين لم يسلموا", "الطلاب الذين سلموا"],
      loading3: false,
      desserts: [
        {
          name: "Frozen Yogurt",
          calories: 159,
        },
        {
          name: "Ice cream sandwich",
          calories: 237,
        },
        {
          name: "Eclair",
          calories: 262,
        },
        {
          name: "Cupcake",
          calories: 305,
        },
        {
          name: "Gingerbread",
          calories: 356,
        },
        {
          name: "Jelly bean",
          calories: 375,
        },
        {
          name: "Lollipop",
          calories: 392,
        },
        {
          name: "Honeycomb",
          calories: 408,
        },
        {
          name: "Donut",
          calories: 452,
        },
        {
          name: "KitKat",
          calories: 518,
        },
      ],
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
