import Vue from 'vue'
import VueRouter from 'vue-router'
import StudentServices from '../pages/StudentServices.vue'
import TeacherServices from '../pages/TeacherServices.vue'
import RegisterPage from '../pages/RegisterPage.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/teacher-services',
    name: 'teacher-page',
    component: TeacherServices
  },
  {
    path: '/students-services',
    name: 'student-page',
    component: StudentServices
  },
  {
    path: '/register',
    name: 'register-page',
    component: RegisterPage
  },

]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
