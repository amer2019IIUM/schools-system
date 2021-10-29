<template>
  <div>Start up</div>
</template>

<script>
import Test from "./graphql/test.gql";
export default {
  name: "App",
  data: () => ({
    //
  }),
  apollo: {
    testingData: {
      query: Test,
      update(data) {
        console.log(data);
        return data;
      },
    },
  },
};
</script>
