import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Index',
    meta: {title: 'Inicio'},
    component: () => import(/* webpackChunkName: "Index" */ '../views/Index.vue'),
  },
  {
    path: '/sobre-nosotros',
    name: 'AboutUs',
    meta: {title: 'Sobre Nosotros'},
    component: () => import(/* webpackChunkName: "AboutUs" */ '../views/Index.vue'),
  },
  {
    path: '/servicios',
    name: 'Services',
    meta: {title: 'Servicios'},
    component: () => import(/* webpackChunkName: "Services" */ '../views/Index.vue'),
  },
  {
    path: '/casos-de-exito',
    name: 'SuccessStories',
    meta: {title: 'Casos de Éxito'},
    component: () => import(/* webpackChunkName: "SuccessStories" */ '../views/Index.vue'),
  },
  {
    path: '/unete-al-equipo',
    name: 'JoinTheTeam',
    meta: {title: 'Únete al equipo'},
    component: () => import(/* webpackChunkName: "JoinTheTeam" */ '../views/Index.vue'),
  },
  {
    path: '/contacto',
    name: 'Contact',
    meta: {title: 'Contacto'},
    component: () => import(/* webpackChunkName: "Contact" */ '../views/Index.vue'),
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

const PAGE_TITLE = 'Soho CX & UX · Consultoría y Desarrollo de Proyectos';
router.afterEach((to) => {
  Vue.nextTick(() => {
    document.title = to.meta.title + ' | ' + PAGE_TITLE;
  });
});

export default router
