import Vue from 'vue';
import modal from '../../components/modal/modal.vue';

new Vue({
    el: '#qualityTest',
    data: {
        modalDate: {
            displayFlag: false,
            name: '',
        }
    },
    components: {
        modal
    },
    methods: {
        onComponent(modalName) {
            this.modalDate.displayFlag = true;
            this.modalDate.name = modalName;
        },
    }
})