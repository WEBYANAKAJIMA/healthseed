<template>
    <div v-show="modalDate.displayFlag" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-30 table">
        <div class="table-cell align-middle">
           <div class="bg-white lg:w-90vh h-90vh mx-auto p-4">
                <div v-if="modalDate.name == 'qualityTestAnnotation' ">
                    <qualityTestAnnotation><qualityTestAnnotation/>
                </div>
                <div v-if="modalDate.name == 'soyProteinComponent1' ">
                    <soyProteinComponent1><soyProteinComponent1/>
                </div>
                <div v-if="modalDate.name == 'soyProteinComponent2' ">
                    <soyProteinComponent2><soyProteinComponent2/>
                </div>
                <div v-if="modalDate.name == 'soyProteinComponent3' ">
                    <soyProteinComponent3><soyProteinComponent3/>
                </div>
                <div v-if="modalDate.name == 'soyProteinComponent4' ">
                    <soyProteinComponent4><soyProteinComponent4/>
                </div>
                <div class="text-center">
                    <button class="button-type-1 lg:w-450px lg:h-50px lg:rounded-25px lg:text-30px lg:mt-4 md:w-704px md:h-82px md:rounded-41px md:text-46px md:mt-12" v-on:click="close()">閉じる</button>
                </div>
           <div>
        <div>
    </div>
</template>

<script lang="ts">
    import qualityTestAnnotation from './contents/qualityTestAnnotation';
    import soyProteinComponent1 from './contents/soyProteinComponent1';
    import soyProteinComponent2 from './contents/soyProteinComponent2';
    import soyProteinComponent3 from './contents/soyProteinComponent3';
    import soyProteinComponent4 from './contents/soyProteinComponent4';

    export default {
        name: 'modal',
        props: {
            modalDate: {
                displayFlag:Boolean,
                name:String     
            }
        },
        components: { 
            qualityTestAnnotation,
            soyProteinComponent1,
            soyProteinComponent2,
            soyProteinComponent3,
            soyProteinComponent4,
        },
        methods: {
            // モーダルを閉じる
            close() {
                this.modalDate.displayFlag = false;
                this.modalDate.name = '';
            }
        }
    }
</script>