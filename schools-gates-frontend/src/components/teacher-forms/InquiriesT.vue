<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" persistent max-width="600px">
      <v-card>
        <div>قسم الاستفارات</div>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="closeDialog"> تسليم </v-btn>
          <v-btn color="blue darken-1" text @click="closeDialog"> إلغاء </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>
<script>
export default {
  data: () => ({
    dialog: true,
  }),

  methods: {
    closeDialog() {
      this.$emit("hideDialog", false);
      this.dialog = false;
    },
  },
};
</script>
