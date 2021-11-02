<template>
  <div>
    <v-main>
      <!-- Provides the application the proper gutter -->
      <v-container class="grey lighten-5 mb-6 mt-6">
        <div>
          <v-row :align="'center'" no-gutters>
            <v-col :align="'center'">
              <v-card class="mx-auto">
                <div class="white--text teal align-center" height="200px">
                  <div class="pt-10 pb-10"><h1>بوابة طلاب الانتساب</h1></div>
                </div>

                <h4 class="pt-5 pb-5">مرحبا بكم في بوابة طلاب الانتساب</h4>
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
                    v-for="(service, index) in services"
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
                        <h3 class="mt-6">{{ service }}</h3>
                        <div v-if="index == 0" class="mt-4 mb-4">
                          <router-link :to="{ name: 'student-assigment' }">
                            <v-btn
                              class="mt-4 mb-4"
                              dark
                              depressed
                              color="teal"
                            >
                              عرض
                            </v-btn>
                          </router-link>
                        </div>
                        <div v-if="index == 1" class="mt-4 mb-4">
                          <router-link :to="{ name: 'student-announcement' }">
                            <v-btn
                              class="mt-4 mb-4"
                              dark
                              depressed
                              color="teal"
                            >
                              عرض
                            </v-btn>
                          </router-link>
                        </div>
                        <div v-if="index == 2" class="mt-4 mb-4">
                          <router-link :to="{ name: 'student-meeting' }">
                            <v-btn
                              class="mt-4 mb-4"
                              dark
                              depressed
                              color="teal"
                            >
                              عرض
                            </v-btn>
                          </router-link>
                        </div>
                        <div v-if="index == 3" class="mt-4 mb-4">
                          <router-link
                            :to="{ name: 'student-submit-assignments' }"
                          >
                            <v-btn
                              class="mt-4 mb-4"
                              dark
                              depressed
                              color="teal"
                            >
                              عرض
                            </v-btn>
                          </router-link>
                        </div>
                        <div v-if="index == 4" class="mt-4 mb-4">
                          <v-btn
                            class="mt-4 mb-4"
                            @click="studentInquiries = !studentInquiries"
                            dark
                            depressed
                            color="teal"
                          >
                            عرض
                          </v-btn>
                        </div>
                        <div v-if="index == 5" class="mt-4 mb-4">
                          <router-link :to="{ name: 'student-exam-schedule' }">
                            <v-btn
                              class="mt-4 mb-4"
                              dark
                              depressed
                              color="teal"
                            >
                              عرض
                            </v-btn>
                          </router-link>
                        </div>
                      </v-card>
                    </v-card>
                  </v-col>
                </v-row>
              </v-card>
            </v-col>
          </v-row>
        </div>

        <inquiries-s
          v-if="studentInquiries"
          v-on:hideDialog="sideButtomDialog($event)"
        />
      </v-container>
    </v-main>
  </div>
</template>

<script>
import InquiriesS from "../components/student-forms/InquiriesS.vue";

export default {
  components: {
    InquiriesS,
  },
  name: "StudentsServices",
  data: () => ({
    studentInquiries: false,
    services: [
      "معرفة التكليفات",
      "التعاميم والاعلانات",
      "اللقاءات والاجتماعات",
      "إرسال التكليفات",
      "قسم الاستفارات",
      "جداول الاختبارات",
    ],
  }),
  methods: {
    sideButtomDialog() {
      this.studentInquiries = false;
    },
  },
};
</script>
