import './bootstrap';
import '../css/app.css';
import {createApp} from 'vue'
// import App from './App.vue'
import Draggable from './Draggable.vue'
import User from './components/User.vue'
const app = createApp({});
// createApp(App).mount("#app")
app.component('Draggable', Draggable);
app.component('User', User);
app.mount('#app');