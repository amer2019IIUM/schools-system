import Vue from 'vue'
import VueRouter from 'vue-router'
import StudentServices from '../pages/StudentServices.vue'
import TeacherServices from '../pages/TeacherServices.vue'
import RegisterPage from '../pages/RegisterPage.vue'
import StudentsAssigmentS from '../components/student-forms/StudentsAssigmentS.vue'
import AnnouncementS from '../components/student-forms/AnnouncementS.vue'
import MeetingS from '../components/student-forms/MeetingS.vue'
import StudentExamSchedule from '../components/student-forms/StudentExamSchedule.vue'
import SubmitAssignmentS from '../components/student-forms/SubmitAssignmentS.vue'
import CheckAssigmentT from '../components/teacher-forms/CheckAssigmentT.vue'
import TeacherProfile from "../pages/TeacherProfile.vue"
import Landing from "../views/Landing.vue"


Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'landing-page',
    component: Landing
  },
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
  // 
  //
  // //////Students Routes////////////////
  // 
  //Students assigment
  {
    path: '/student-assigment',
    name: 'student-assigment',
    component: StudentsAssigmentS
  },
  // 
  // Announcement  
  {
    path: '/student-announcement',
    name: 'student-announcement',
    component: AnnouncementS
  },
  // 
  // Meeting  
  {
    path: '/student-meeting',
    name: 'student-meeting',
    component: MeetingS
  },
  // 
  // Student Exam Schedule  
  {
    path: '/student-exam-schedule',
    name: 'student-exam-schedule',
    component: StudentExamSchedule
  },
  // 
  // Student Submit Assignments
  {
    path: '/student-submit-assignments',
    name: 'student-submit-assignments',
    component: SubmitAssignmentS
  },

  // 
  //
  // //////Teachers Routes////////////////
  // 
  //Teacher checking assigment
  {
    path: '/check-assigments',
    name: 'check-assigments',
    component: CheckAssigmentT
  },
  {
    path: '/teacher-profile',
    name: 'teacher-profile',
    component: TeacherProfile
  },

]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
