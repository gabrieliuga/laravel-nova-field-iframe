<template>
    <panel-item :field="field">
        <template slot="value">
            <iframe v-if="showIframe" :width="width" :height="height" :class="classes" :style="style" :srcdoc="field.value"></iframe>
            <p v-else>-</p>
        </template>
    </panel-item>
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],
        data: () => ({
            width: "100%",
            height: '600px',
            showIframe: false,
        }),
        mounted: function () {
            if (this.field.hasOwnProperty('width')) {
                this.width = this.field.width;
            }
            if (this.field.hasOwnProperty('height')) {
                this.height = this.field.height;
            }
            if (this.field.value !== '') {
                this.showIframe = true;
            }
        }
    }
</script>
