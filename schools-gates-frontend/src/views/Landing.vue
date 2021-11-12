<template>
  <div>
    <v-main>
      <!-- Provides the application the proper gutter -->
      <v-container class="mb-6 mt-6">
        <div>
          <v-row :align="'center'" no-gutters>
            <v-col :align="'center'">
              <v-img
                class="white--text align-end"
                height="200px"
                width="400px"
                :src="Logo"
              >
              </v-img>
            </v-col>
          </v-row>
          <v-row :align="'center'" class="mt-0" no-gutters>
            <v-col :align="'center'">
              <v-card class="mx-auto">
                <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                <v-row class="ma-2">
                  <v-col
                    cols="12"
                    md="4"
                    v-for="(enter, index) in entries"
                    :key="index"
                  >
                    <v-card class="pa-2" outlined tile>
                      <v-card class="mx-auto" max-width="400">
                        <v-img
                          class="white--text align-end"
                          height="300px"
                          :src="logos[index]"
                        >
                        </v-img>
                        <hr />
                        <h3 class="mt-6">{{ enter }}</h3>
                        <div class="mt-4 mb-4">
                          <router-link :to="{ name: 'student-assigment' }">
                            <v-btn
                              class="mt-4 mb-4"
                              dark
                              depressed
                              color="teal"
                            >
                              دخول
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
      </v-container>
    </v-main>
  </div>
</template>

<script>
import Logo from "../assets/logo.png";
import StudentPng from "../assets/image/landingImages/student.png";
import TeacherPng from "../assets/image/landingImages/teacher.png";
import AdminPng from "../assets/image/landingImages/admin.png";
export default {
  components: {},
  name: "StudentsServices",
  data: () => ({
    Logo,
    StudentPng,
    TeacherPng,
    AdminPng,
    studentInquiries: false,
    entries: [
      "الدخول بحساب الطالب  ",
      "الدخول بحساب المعلم  ",
      "الدخول بحساب المدير  ",
    ],
    logos: [StudentPng, TeacherPng, AdminPng],
  }),
  methods: {
    sideButtomDialog() {
      this.studentInquiries = false;
    },
  },
};
</script>
