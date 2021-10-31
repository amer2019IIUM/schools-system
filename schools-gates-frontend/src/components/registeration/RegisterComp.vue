<template>
  <div>
    <v-form ref="form" v-model="valid" lazy-validation>
      <v-row>
        <v-col cols="12" sm="6" md="6">
          <v-text-field
            v-model="fullName"
            :rules="[rules.required]"
            label="الاسم الثلاثي باللغة العربية حصراً"
            style="text-align: right"
            maxlength="20"
            justify-left
            required
          ></v-text-field>
        </v-col>
        <v-col cols="12" sm="6" md="6">
          <v-text-field
            v-model="lastName"
            :rules="[rules.required]"
            label="الرقم الوطني أو رقم جواز السفر
"
            maxlength="20"
            required
          ></v-text-field>
        </v-col>
        <v-col cols="12" sm="6" md="6">
          <v-select
            v-model="grade"
            :items="grades"
            :rules="[(v) => !!v || 'مطلوب']"
            label=" القسم"
            required
          ></v-select>
        </v-col>
        <v-col cols="12" sm="6" md="6">
          <v-select
            v-model="classs"
            :items="classes"
            :rules="[(v) => !!v || 'مطلوب']"
            label=" الصف"
            required
          ></v-select>
        </v-col>
        <v-col cols="12" sm="6" md="6">
          <v-select
            v-model="center"
            :items="centers"
            :rules="[(v) => !!v || 'مطلوب']"
            label="  مركز الانتساب"
            required
          ></v-select>
        </v-col>
        <v-col cols="12" sm="6" md="6">
          <v-text-field
            v-model="emailTeam"
            :rules="emailRules"
            label=" ايميلك على منصة تيمز ؟ (إذا لايوجد اكتب  لا   
"
            required
          ></v-text-field>
        </v-col>
        <v-col cols="12" sm="6" md="6">
          <v-text-field
            v-model="personalEmail"
            :rules="emailRules"
            label=" ايميلك الشخصي
"
            required
          ></v-text-field>
        </v-col>

        <v-col cols="12" sm="6" md="6">
          <v-text-field
            v-model="phoneNumber1"
            :rules="[rules.required]"
            label=" رقم هاتف أول للتواصل معك؟ (مع الرمز الدولي)  
"
            required
          ></v-text-field>
        </v-col>
        <v-col cols="12" sm="6" md="6">
          <v-text-field
            v-model="phoneNumber2"
            :rules="[rules.required]"
            label="  رقم هاتف ثاني للتواصل معك  
"
            required
          ></v-text-field>
        </v-col>

        <v-col cols="12" sm="6" md="6">
          <v-select
            v-model="livingCountry"
            :items="livingCountries"
            :rules="[(v) => !!v || 'مطلوب']"
            label="المدينة التي تعيش فيها حاليا؟"
            required
          ></v-select>
        </v-col>
        <v-col cols="12">
          <v-text-field
            v-model="emailTeam"
            :rules="emailRules"
            label="هذا النموذج يعتبر رسمي وأقر بأن كل البيانات المعبئة أعلاه صحيحة وعلى مسؤوليتي الشخصية"
            required
          ></v-text-field>
        </v-col>
        <v-col cols="12">
          <v-alert outlined color="teal">
            <div>
              <v-checkbox
                v-model="agreement"
                :rules="agreementRules"
                label="هذا النموذج يعتبر رسمي وأقر بأن كل البيانات المعبئة أعلاه صحيحة وعلى مسؤوليتي الشخصية"
                required
              ></v-checkbox>
            </div>
          </v-alert>
        </v-col>

        <v-col cols="12">
          <v-row align="center" justify="space-around">
            <div>
              <v-btn
                class="px-15 my-12"
                x-large
                block
                color="teal"
                dark
                @click="validate"
              >
                Register
              </v-btn>
            </div>
          </v-row>
        </v-col>
      </v-row>
    </v-form>
  </div>
</template>
<script>
export default {
  data: () => ({
    valid: true,
    showPass: false,
    password: "",
    fullName: "",
    nationalNumber: "",
    grade: null,
    grades: [" الثالث الثانوي", "الثالث الثانوي", "  الثالث الثانوي"],
    classs: null,
    classes: [" الثالث الثانوي أ", "الثالث الثانوي ب", " الثالث الثانوي"],
    center: null,
    centers: [" استراليا", "كولالمبور", " ي"],
    checkbox: false,
    lastName: "",
    emailTeam: "",
    personalEmail: "",
    phoneNumber1: "",
    phoneNumber2: "",
    livingCountry: null,
    livingCountries: [" استراليا", "كولالمبور", " ي"],
    agreement: false,

    rules: {
      required: (value) => !!value || "Required.",
      min: (v) => (v && v.length >= 8) || "Min 8 characters",
    },
    emailRules: [
      (v) => !!v || " كلمة المرور مطلوبة",
      (v) => /.+@.+\..+/.test(v) || " البريد الكتروني مطلوب ",
    ],
    passwordRules: {
      required: (value) => !!value || " كلمة المرور مطلوبة",
    },
    agreementRules: {
      required: (value) => !!value || " كلمة المرور مطلوبة",
    },
  }),

  methods: {
    validate() {
      this.$refs.form.validate();
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    },
  },
};
</script>
