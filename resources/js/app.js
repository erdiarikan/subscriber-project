import { createApp } from 'vue';
import SubscriberForm from './components/SubscriberForm.vue';

const app = createApp({});
app.component('subscriber-form', SubscriberForm);
app.mount('#app');
