<template>
  <!-- Provides the application the proper gutter -->
  <v-main>
    <v-container class="grey lighten-5 mb-6 mt-6">
      <div>
        <v-row :align="'center'" no-gutters>
          <v-col :align="'center'">
            <v-card class="mx-auto">
              <v-card class="mx-auto" max-width="434" tile>
                <div height="100%">
                  <v-row align="end" class="fill-height">
                    <v-col align-self="start" class="pa-0" cols="12">
                      <v-avatar class="profile" color="grey" size="100" tile>
                        <v-img
                          src="https://i.pinimg.com/236x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg"
                        ></v-img>
                      </v-avatar>
                    </v-col>
                    <v-col class="py-0">
                      <v-list-item color="rgba(0, 0, 0, .4)">
                        <v-list-item-content>
                          <v-list-item-title class="text-h6">
                            Marcus Obrien
                          </v-list-item-title>
                          <v-list-item-subtitle
                            >Network Engineer</v-list-item-subtitle
                          >
                        </v-list-item-content>
                      </v-list-item>
                    </v-col>
                  </v-row>
                </div>
              </v-card>
            </v-card>
          </v-col>
        </v-row>
        <v-row :align="'center'" class="mt-10" no-gutters>
          <v-col :align="'center'">
            <v-card class="mx-auto">
              <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
              <v-row class="ma-2">
                <v-card class="mx-auto">
                  <v-tabs
                    v-model="tab"
                    background-color="transparent"
                    color="basil"
                    grow
                  >
                    <v-tab v-for="item in items" :key="item">
                      {{ item }}
                    </v-tab>
                  </v-tabs>

                  <v-tabs-items v-model="tab">
                    <v-tab-item v-for="item in componentNames" :key="item">
                      <v-card>
                        <v-card-text>
                          <component v-bind:is="item"> </component>
                        </v-card-text>
                      </v-card>
                    </v-tab-item>
                  </v-tabs-items>
                </v-card>
              </v-row>
            </v-card>
          </v-col>
        </v-row>
      </div>
    </v-container>
  </v-main>
</template>

<script>
import Announcement from "../components/teacher-profle-comp/Announcement.vue";
import Assignment from "../components/teacher-profle-comp/Assignment.vue";
import Meeting from "../components/teacher-profle-comp/Meeting.vue";
import Schedule from "../components/teacher-profle-comp/Schedule.vue";
export default {
  // eslint-disable-next-line vue/no-unused-components
  components: { Assignment, Announcement, Meeting, Schedule },
  data() {
    return {
      componentNames: ["Assignment", "Announcement", "Meeting", "Schedule"],
      tab: null,
      items: [
        "التكليفات",
        "التعاميم",
        "اللقاءات والاجتماعات",
        "جداول الاختبارات",
      ],
      text: " xf",
    };
  },
};
</script>
