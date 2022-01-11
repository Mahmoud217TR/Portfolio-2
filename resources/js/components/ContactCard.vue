<template>
    <div class="card info-card d-flex justify-content-center align-items-center p-4" @click="copyInfo()">
            <div class="card-image d-flex justify-content-center align-items-center">
                <img class="p-3" :src="picUrl" :alt="picAlt">
            </div>
            <p class="card-info d-flex justify-content-center align-items-center m-0 text-center">
                {{ info }}
            </p>
    </div>
    <div class="alert floating-message alert-cust-secondary" role="alert" v-if="display">
        <strong>{{picAlt.toUpperCase()}},  Copied!! </strong>
    </div>
</template>

<script>
    export default {
        props:['picUrl','info','picAlt'],
        methods: {
            copyInfo(){
                navigator.clipboard.writeText(this.info);
                this.display = true
                setTimeout(() => { this.display = false}, 2000);
            }
        },
        data() {
            return {
                display: false
            }
        },
    }
</script>
