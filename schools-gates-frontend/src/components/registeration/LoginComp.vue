<template>
  <div>
    <v-form ref="form" v-model="valid" lazy-validation>
      <v-text-field
        v-model="email"
        :rules="emailRules"
        label="البريد الالكتروني"
        required
      ></v-text-field>

      <v-text-field
        :append-icon="showPass ? 'mdi-eye' : 'mdi-eye-off'"
        :rules="[passwordRules.required, passwordRules.min]"
        :type="showPass ? 'text' : 'password'"
        name="input-10-2"
        label="كلمة المرور"
        hint="يجب ان تكون اكبر من 7"
        value=""
        class="input-group--focused"
        @click:append="showPass = !showPass"
      ></v-text-field>
      <v-col cols="12">
        <v-row align="center" justify="space-around">
          <div>
            <v-btn
              class="px-15"
              x-large
              block
              color="teal"
              dark
              @click="validate"
            >
              تسجيل الدخول
            </v-btn>
          </div>
        </v-row>
      </v-col>
    </v-form>
  </div>
</template>
<script>
export default {
  data: () => ({
    valid: true,
    showPass: false,
    password: "",

    email: "",
    emailRules: [
      (v) => !!v || " كلمة المرور مطلوبة",
      (v) => /.+@.+\..+/.test(v) || " البريد الكتروني مطلوب ",
    ],
    passwordRules: {
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
