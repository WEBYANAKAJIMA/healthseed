import Vue from 'vue';

new Vue({
    el: '#purchaseSingle',
    data: {
        couponCode: 'AA202021',
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
        onPurchase() {
            // 別タブにアマゾンの購入ページを開く
            window.open('https://jp.amwy.me/21DANYqR');
        }
    }
})