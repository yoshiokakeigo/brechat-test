import { createApp } from 'vue';
import ChatRoom from './ChatRoom.vue';
import '../css/app.css';

const Chatroom = createApp(ChatRoom);

Chatroom.mount('#chatRoom');