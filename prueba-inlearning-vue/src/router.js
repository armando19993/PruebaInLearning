import { createWebHistory, createRouter } from "vue-router";

const routes =  [
  {
    path: "/",
    alias: "/contactos",
    name: "contactos",
    component: () => import("./components/ContactosComponent")
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;