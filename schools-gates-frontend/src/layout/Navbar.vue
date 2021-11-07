<template>
  <div>
    <v-app-bar color="teal" app>
      <v-menu offset-y>
        <v-list three-line width="250">
          <template v-for="(item, index) in items">
            <v-subheader
              v-if="item.header"
              :key="item.header"
              v-text="item.header"
            >
            </v-subheader>
            <v-divider
              v-else-if="item.divider"
              :key="index"
              :inset="item.inset"
            ></v-divider>

            <v-list-item v-else :key="item.title">
              <v-list-item-avatar>
                <v-img :src="item.avatar"></v-img>
              </v-list-item-avatar>

              <v-list-item-content>
                <v-list-item-title v-html="item.title"></v-list-item-title>
                <v-list-item-subtitle
                  v-html="item.subtitle"
                ></v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </template>
        </v-list>
      </v-menu>
      <v-menu offset-y>
        <template v-slot:activator="{ attrs, on }">
          <span style="cursor: pointer" v-bind="attrs" v-on="on">
            <v-chip link>
              <span>عامر عبدالله</span>
            </v-chip>
          </span>
        </template>
        <v-list width="250" class="py-0">
          <v-list-item two-line>
            <v-list-item-content>
              <v-list-item-title>عامر عبدالله</v-list-item-title>
              <v-list-item-subtitle>لقد تم تسجيل دخولك</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
          <v-divider />
          <v-list-item link v-for="(menu, i) in menus" :key="i">
            <router-link
              v-if="i == 0"
              :to="{ name: 'teacher-profile' }"
              style="text-decoration: none; color: inherit"
            >
              <v-list-item-icon>
                <v-icon>{{ menu.icon }}</v-icon>
                <v-list-item-title>
                  {{ menu.title }}
                </v-list-item-title>
              </v-list-item-icon>
            </router-link>
            <router-link
              v-if="i == 1"
              :to="{ name: 'teacher-page' }"
              style="text-decoration: none; color: inherit"
            >
              <v-list-item-icon v-if="i == 1">
                <v-icon>{{ menu.icon }}</v-icon>
                <v-list-item-title>
                  {{ menu.title }}
                </v-list-item-title>
              </v-list-item-icon>
            </router-link>
          </v-list-item>
        </v-list>
      </v-menu>
      <v-row align="center" justify="center">
        <router-link :to="{ name: 'teacher-page' }">
          <v-btn class="mr-3" dark color="teal lighten-2">
            خدمات المعلمين
          </v-btn>
        </router-link>
        <router-link :to="{ name: 'student-page' }">
          <v-btn class="mr-3" dark color="teal lighten-2"> خدمات الطلاب </v-btn>
        </router-link>
        <router-link :to="{ name: 'register-page' }">
          <v-btn class="mr-3" dark color="teal lighten-2">التسجيل</v-btn>
        </router-link>
      </v-row>
    </v-app-bar>
  </div>
</template>

<script>
export default {
  name: "Navbar",
  data: () => ({
    menus: [
      { title: "صفحة شخصية", icon: "mdi-account" },
      { title: "تسجيل الخروج", icon: "mdi-logout" },
    ],
  }),
};
</script>
