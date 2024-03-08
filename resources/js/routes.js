import Uno from '@/components/uno.vue';
import Dos from '@/components/dos.vue';
import HelloWorld from "@/components/HelloWorld.vue";
import HomeComponent from "@/components/HomeComponent.vue";

const routes = [
    { path: '/', component: HomeComponent },
    { path: '/uno', component: Uno },
    { path: '/dos', component: Dos },
];

export default routes;
