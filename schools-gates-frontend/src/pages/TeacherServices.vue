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
                      <div class="mt-4 mb-4">
                        <!-- Upload Assigment service btn -->
                        <v-btn
                          class="mt-4 mb-4"
                          v-if="index == 0"
                          dark
                          depressed
                          color="teal"
                          @click="uploadAssigmentDialog = true"
                        >
                          عرض
                        </v-btn>
                        <!-- -->

                        <!-- Upload announcement service btn -->
                        <v-btn
                          class="mt-4 mb-4"
                          v-if="index == 1"
                          dark
                          depressed
                          color="teal"
                          @click="announcementDialog = !announcementDialog"
                        >
                          عرض
                        </v-btn>
                        <!-- -->

                        <!-- Upload meeting Dialog service btn -->
                        <v-btn
                          class="mt-4 mb-4"
                          v-if="index == 2"
                          dark
                          depressed
                          color="teal"
                          @click="meetingDialog = !meetingDialog"
                        >
                          عرض
                        </v-btn>
                        <!-- -->
                        <!-- Upload inquiries  Dialog service btn -->
                        <v-btn
                          class="mt-4 mb-4"
                          v-if="index == 4"
                          dark
                          depressed
                          color="teal"
                          @click="inquiriesDialog = !inquiriesDialog"
                        >
                          عرض
                        </v-btn>
                        <!-- -->
                        <!-- Upload examSchedule Dialog service btn -->
                        <v-btn
                          class="mt-4 mb-4"
                          v-if="index == 5"
                          dark
                          depressed
                          color="teal"
                          @click="examScheduleDialog = !examScheduleDialog"
                        >
                          عرض
                        </v-btn>
                        <!-- -->
                      </div>
                    </v-card>
                  </v-card>
                </v-col>
              </v-row>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
      <upload-assigment
        v-if="uploadAssigmentDialog"
        v-on:hideDialog="sideButtomDialog($event)"
      />
      <announcement-t
        v-if="announcementDialog"
        v-on:hideDialog="sideButtomDialog($event)"
      />
      <meetings-t
        v-if="meetingDialog"
        v-on:hideDialog="sideButtomDialog($event)"
      />
      <inquiries-t
        v-if="inquiriesDialog"
        v-on:hideDialog="sideButtomDialog($event)"
      />
      <exam-schedule-t
        v-if="examScheduleDialog"
        v-on:hideDialog="sideButtomDialog($event)"
      />
    </v-main>
  </div>
</template>

<script>
import UploadAssigment from "../components/teacher-forms/UploadAssigmentT.vue";
import AnnouncementT from "../components/teacher-forms/AnnouncementT.vue";
import MeetingsT from "../components/teacher-forms/MeetingsT.vue";
import InquiriesT from "../components/teacher-forms/InquiriesT.vue";
import ExamScheduleT from "../components/teacher-forms/ExamScheduleT.vue";
export default {
  components: {
    UploadAssigment,
    AnnouncementT,
    MeetingsT,
    InquiriesT,
    ExamScheduleT,
  },
  name: "TeacherServices",
  data: () => ({
    uploadAssigmentDialog: false,
    announcementDialog: false,
    meetingDialog: false,
    inquiriesDialog: false,
    examScheduleDialog: false,

    services: [
      "رفع التكليفات للطلاب",
      "التعاميم والاعلانات",
      "اللقاءات والاجتماعات",
      "متابعة التكليفات",
      "قسم الاستفارات",
      "جداول الاختبارات",
    ],
  }),
  methods: {
    sideButtomDialog(hide) {
      this.uploadAssigmentDialog = false;
      this.announcementDialog = false;
      this.meetingDialog = false;
      this.inquiriesDialog = false;
      this.examScheduleDialog = false;
      this.uploadAssigment = hide;
    },
  },
};
</script>
