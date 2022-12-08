/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import { createApp } from 'vue';
/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({
});

import HeaderComponent from '../js/components/HeaderComponent.vue';
import ExampleComponent from '../js/components/ExampleComponent.vue';
import UserIp from "./components/UserIp.vue";
app.component('example-component', ExampleComponent);
app.component('header-component', HeaderComponent);
app.component('user-ip-component', UserIp);
app.mount('#app');
