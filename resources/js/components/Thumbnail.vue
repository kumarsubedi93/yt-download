<template>
    <div class="col-md-10 mb-25rem">
        <h2 class="mt-25rem"> The Art of Thumbnails: Download with Ease </h2>
        <div class="search">
            <input type="text" class="form-control" v-model="search" placeholder="YouTube Video URL">
            <button class="btn btn-primary" @click="getThumbnail">Go</button>
        </div>

        <div class="loading-box" v-if="loading">
            <img :src="globalURL + '/assets/images/l-loading.gif'" />
        </div>

        <div class="result-box mt-25rem">
            <div class="img-box" v-if="videos.length">
                <div class="iterator mb-4" v-for="item in videos">
                    <div class="img-div mb-1">
                        <img class="img-fluild max-width-100" :src="item.src">
                    </div>

                    <button class="btn btn-default btn-sm d-btn" @click="downloadImage(item.src, 'thumb-i.jpg')">
                        <i class="fas fa-arrow-alt-circle-down"></i>
                        Download
                    </button>
                    <br>
                    <span> {{ item.name }} </span>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref } from 'vue'
import axios from 'axios';
const search = ref(null)
const videos = ref([])
const loading = ref(false)
const ytVideoId = ref(null)
const globalURL = ref(window.S_BASE_URL)

const slugify = (str) => {
    return String(str)
        .normalize('NFKD')
        .replace(/[\u0300-\u036f]/g, '')
        .trim()
        .toLowerCase()
        .replace(/[^a-z0-9 -]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-');
}

const downloadImage = async (imglink = null, name) => {
    if (!imglink || !ytVideoId) return;
    axios.post(`${window.S_BASE_URL}/download`, {
        'file-url': imglink
    }, {
        responseType: 'blob',
    }).then(r => {
        const url = window.URL.createObjectURL(new Blob([r.data]));
        const link = document.createElement('a');
        link.href = url;
        const imageName = slugify(name)
        link.setAttribute('download', `${imageName}.jpg`);
        document.body.appendChild(link);
        link.click();
        link.remove();
    })
}

const getThumbnail = () => {
    initialFunction()
}

const initialFunction = () => {
    var value = search.value;
    if (!value) return;
    loading.value = true
    var isVimeo = checkVimeo(value);
    if (isVimeo) {
        isVimeo = isVimeo[isVimeo.length - 1];
        getVimeoDetails(isVimeo);
        return;
    }
    var videoId = (extractYoutubeLink(value));
    if (videoId === 0) {
        return;
    }
    prepareYoutubeThumbnail(videoId)
    return;
}

const prepareYoutubeThumbnail = (videoId) => {
    if (videoId) {
        videos.value = [
            {
                height: 700,
                src: `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`,
                name: 'HD Image (1280x720)',
                qt: 'HD'
            },
            {
                height: 400,
                src: `https://img.youtube.com/vi/${videoId}/sddefault.jpg`,
                name: 'SD Image (640x480)',
                qt: 'SD'
            },
            {
                height: 300,
                src: `https://i3.ytimg.com/vi/${videoId}/hqdefault.jpg`,
                name: 'Normal Image (480x360)',
                qt: 'HQ'
            },
            {
                height: 180,
                src: `https://img.youtube.com/vi/${videoId}/mqdefault.jpg`,
                name: 'Normal Image (320x180)',
                qt: 'MQ'
            }, {
                height: 90,
                src: `https://img.youtube.com/vi/${videoId}/default.jpg`,
                name: 'Normal Image (120x90)',
                qt: 'def'
            }
        ]
        search.value = `https://youtube.com/watch?v=${videoId}`
        ytVideoId.value = videoId
    } else {
        videos.value = []
        ytVideoId.value = ''
    }
    setTimeout(() => {
        loading.value = false
    }, 500)
}

const checkVimeo = (link) => {
    var res = link.match(/https?:\/\/(?:www\.|player\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)(?:$|\/|\?)/)
    return res;
}


const getVimeoDetails = (link) => {
    loading.value = true
    axios.get(`https://vimeo.com/api/v2/video/${link}.json`).then(response => {
        if (response.status === 200) {
            const { thumbnail_large, thumbnail_medium, thumbnail_small } = response.data[0]
            videos.value = [
                {
                    name: 'HD Image (640x480)',
                    src: thumbnail_large,
                    height: 400
                },
                {
                    name: 'SD Image (200x150)',
                    src: thumbnail_medium,
                    height: 150
                },
                {
                    name: 'Normal Image (100x74)',
                    src: thumbnail_small,
                    height: 70
                }
            ]
        }
        loading.value = false
    }).catch(err => {
        loading.value = false
        videos.value = []
    })
}

const extractYoutubeLink = (link) => {
    var regex = /(?:https?:\/\/)?(?:www\.)?(?:youtu(?:be\.com\/(?:watch\?(?:v=|vi=)|v\/|vi\/)|\.be\/|be\.com\/embed\/|be\.com\/shorts\/)|youtube\.com\/\?(?:v=|vi=))([\w-]{11})/;
    var res = regex.exec(link)
    if (res && res[1]) {
        return res[1];
    }
    return;
}


</script>

<style scoped>
.loading-box {
    display: flex;
    justify-content: center;
    margin-top: 19px;
}

.loading-box img {
    width: 40px;
}

.no-radius {
    border-radius: 0px !important;
}

.max-width-100 {
    max-width: 100%;
}

.icon-holder {
    height: 24px;
    width: 24px;
    color: #fff;
    fill: currentColor;
}

.fix-font-size {
    font-size: 1.25rem;
}

.animation-content {
    max-width: 100%;
    position: relative;
}

.input-box {
    display: flex;
    flex-wrap: wrap;
}

.go-btn {
    height: 50px;
    margin-left: 10px;
}
</style>