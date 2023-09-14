require('./bootstrap');
import { createApp } from 'vue'
import Thumbnail from './components/Thumbnail.vue'

const app = createApp({})
app.component('thumbnail-getter', Thumbnail)
app.mount('#app')


