<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" persistent max-width="600px">
      <v-card>
        <v-card dark class="text-center" color="teal"
          ><h1>قسم الاستفارات</h1></v-card
        >
        <v-divider></v-divider>
        <div class="pa-10">
          <v-form ref="form" v-model="valid" lazy-validation>
            <v-row>
              <v-col cols="12" sm="6" md="6">
                <v-select
                  v-model="grade"
                  :items="grades"
                  :rules="[(v) => !!v || 'مطلوب']"
                  label=" قسم الاستفسار"
                  required
                ></v-select>
              </v-col>
              <v-col cols="12" sm="6" md="6">
                <v-select
                  v-model="classs"
                  :items="classes"
                  :rules="[(v) => !!v || 'مطلوب']"
                  label=" لمن توجه سؤالك أو استفسارك"
                  required
                ></v-select>
              </v-col>
              <v-col cols="12" sm="6" md="6">
                <v-select
                  v-model="center"
                  :items="centers"
                  :rules="[(v) => !!v || 'مطلوب']"
                  label="الفصل المتعلق باستفسارك"
                  required
                ></v-select>
              </v-col>
              <v-col cols="12" sm="6" md="6">
                <v-select
                  v-model="course"
                  :items="courses"
                  :rules="[(v) => !!v || 'مطلوب']"
                  label="المادة التي تريد الاستفسار عنها"
                  required
                ></v-select>
              </v-col>

              <v-col cols="12">
                <v-select
                  v-model="livingCountry"
                  :items="livingCountries"
                  :rules="[(v) => !!v || 'مطلوب']"
                  label="بلد الانتساب"
                  required
                ></v-select>
              </v-col>
              <v-col cols="12">
                <v-textarea
                  filled
                  auto-grow
                  label="اشرح سؤالك أو استفسارك هنا"
                  rows="4"
                  row-height="25"
                  shaped
                ></v-textarea>
              </v-col>

              <v-col cols="12">
                <v-row align="center" justify="space-around">
                  <div>
                    <v-btn
                      class="px-5 my-2"
                      x-large
                      block
                      color="teal"
                      dark
                      @click="validate"
                    >
                      تسليم
                    </v-btn>
                  </div>
                  <div>
                    <v-btn
                      class="px-5 my-2"
                      x-large
                      block
                      color="red darken-3"
                      dark
                      @click="closeDialog"
                    >
                      الغاء
                    </v-btn>
                  </div>
                </v-row>
              </v-col>
            </v-row>
          </v-form>
        </div>
      </v-card>
    </v-dialog>
  </v-row>
</template>
<script>
export default {
  data: () => ({
    dialog: true,
    valid: true,
    grade: null,
    grades: [" الثالث الثانوي", "الثالث الثانوي", "  الثالث الثانوي"],
    classs: null,
    classes: [" الثالث الثانوي أ", "الثالث الثانوي ب", " الثالث الثانوي"],
    courses: [" العلوم", "القران الكريم", "الرياضيات"],
    course: null,
    center: null,
    centers: [" استراليا", "كولالمبور", " ي"],
    livingCountry: null,
    livingCountries: [" استراليا", "كولالمبور", " ي"],

    rules: {
      required: (value) => !!value || "Required.",
      min: (v) => (v && v.length >= 8) || "Min 8 characters",
    },
  }),

  methods: {
    validate() {
      this.$refs.form.validate();
    },

    closeDialog() {
      this.$emit("hideDialog", false);
      this.dialog = false;
    },
  },
};
</script>
