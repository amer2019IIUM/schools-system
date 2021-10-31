<template>
  <div>
    <div class="mt-16">
      <v-app>
        <v-container class="grey lighten-5 mb-6 mt-6 register-div">
          <v-main class="px-10">
            <div>
              <v-tabs
                v-model="tab"
                show-arrows
                background-color="teal accent-9"
                icons-and-text
                dark
                grow
              >
                <v-tabs-slider color="purple darken-4"></v-tabs-slider>
                <v-tab v-for="i in tabs" :key="i">
                  <v-icon large>{{ i.icon }}</v-icon>
                  <div class="caption py-1">{{ i.name }}</div>
                </v-tab>
                <v-tab-item>
                  <login-comp />
                </v-tab-item>
                <v-tab-item>
                  <RegisterComp />
                </v-tab-item>
              </v-tabs>
            </div> </v-main
        ></v-container>
      </v-app>
    </div>
  </div>
</template>
<script>
import LoginComp from "../components/registeration/LoginComp.vue";
import RegisterComp from "../components/registeration/RegisterComp.vue";
export default {
  components: { LoginComp, RegisterComp },
  computed: {
    passwordMatch() {
      return () => this.password === this.verify || "Password must match";
    },
  },
  methods: {
    validate() {
      if (this.$refs.loginForm.validate()) {
        // submit form to server/API here...
      }
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    },
  },
  data: () => ({
    dialog: true,
    tab: 0,
    tabs: [
      { name: "تسجيل الدخول", icon: "mdi-account" },
      { name: "سجل حساب جديد", icon: "mdi-account-outline" },
    ],
    valid: true,

    fullName: "",
    lastName: "",
    email: "",
    password: "",
    verify: "",
    loginPassword: "",
    loginEmail: "",
    loginEmailRules: [
      (v) => !!v || "Required",
      (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
    ],
    emailRules: [
      (v) => !!v || "Required",
      (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
    ],

    show1: false,
    rules: {
      required: (value) => !!value || "Required.",
      min: (v) => (v && v.length >= 8) || "Min 8 characters",
    },
  }),
};
</script>
<style>
.register-div {
  max-width: 60%;
}
@media (min-width: 0px) and (max-width: 1000px) {
  .register-div {
    max-width: 100%;
  }
}
</style>
