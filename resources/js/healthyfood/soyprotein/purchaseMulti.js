import Vue from 'vue';
import modal from '../../components/modal/modal.vue';

new Vue({
    el: '#purchaseMulti',
    data: {
        couponCode: 'AA202021',
        modalDate: {
            displayFlag: false,
            name: '',   
        }
    },
    components: {
        modal
    },
    methods: {
        onCouponCopy() {
            // クーポンコードをコピーする
            let selBox = document.createElement('textarea');
            selBox.value = this.couponCode;
            document.body.appendChild(selBox);
            selBox.select();
            document.execCommand('copy');
            document.body.removeChild(selBox);

            alert("クーポンコードをコピーしました。\n（「Ctrl + V」で貼り付けられます。）");
        },
        onComponent(modalName) {
            this.modalDate.displayFlag = true;
            this.modalDate.name = modalName;
        },
        onPurchase(purchaseType) {
            // 別タブにアマゾンの購入ページを開く
            if (purchaseType == 1) {
                window.open('https://jp.amwy.me/21DANYqR');
            } else if (purchaseType == 2) {
                window.open('https://jp.amwy.me/21DA7UNd');
            } else if (purchaseType == 3) {
                window.open('https://jp.amwy.me/21DAlZ5A');
            } else if (purchaseType == 4) {
                window.open('https://jp.amwy.me/21DA8Ein');
            }

        }
    }
})