import Vue from 'vue';
import Axios from 'axios';
import { ValidationObserver, ValidationProvider, extend, localize} from 'vee-validate';

// バリデーションルールの読込
import * as rules from 'vee-validate/dist/rules';
Object.keys(rules).forEach(rule => {
    extend(rule, rules[rule]);
});

// エラーメッセージの言語を設定
import ja from 'vee-validate/dist/locale/ja.json';
localize('ja', ja);

// reCAPTCHA
import VueRecaptcha from 'vue-recaptcha';

new Vue({
    el: '#contact',
    components: {
        ValidationObserver,
        ValidationProvider,
        'vue-recaptcha': VueRecaptcha
    }, 
    data: {
        field: {
            name: '',
            email: '',
            meetingType: 0,
            contactContent: '',
            term: false
        },
        recaptcha: {
            setflag: false, //reCAPTCHAに値が入ったかどうか
            responseToken: '', //レスポンスのトークン
        },
        errorFlag: false,
        errorMessage: '',
        optionSize: {
            type: "500px"
        },
        recaptchaTimeoutId: '',
    },
    methods: {
        onVerify(response) {
            // 選択フラグをオンにし、reCAPTCHAのトークを取得
            this.recaptcha.responseToken = response
            if(this.recaptcha.responseToken !== null && 
                this.recaptcha.responseToken !== undefined && 
                this.recaptcha.responseToken.length > 0) {
                    this.recaptcha.setflag = true;
            }
            // 選択してから1分後に説明会の送信を行っていなかった場合、選択フラグ、reCAPTCHAのトークンをリセットする
            this.recaptchaTimeoutId = setTimeout(this.recaptchaTimeout, 60000);

        },
        recaptchaTimeout : function () {
            this.recaptcha.setflag = false;
            this.recaptcha.responseToken = '';
        },
        onContact: function() {

            clearTimeout(this.recaptchaTimeoutId);

            if(this.field.term){
                //if(this.recaptcha.setflag){
                    const params = { 
                        responseToken: this.recaptcha.responseToken,
                        name: this.field.name,
                        email: this.field.email,
                        meetingType: this.field.meetingType,
                        contactContent: this.field.contactContent,
                    };

                    Axios.post("/api/healthyfood/soyprotein/contact", params)
                        .then(response => {
                        if(response.data.status === "OK"){
                            this.recaptcha.setflag = false;
                            this.recaptcha.responseToken = '';
                            this.errorFlag = false;
                            this.errorMessage = '';
                            alert("説明会の実施依頼が完了しました。\n説明会実施依頼受付のご案内メールが届きますのでご確認ください。");

                        } else {
                            this.errorFlag = true;
                            this.errorMessage = 'reCAPTCHAの確認結果がNGのため、お問合せできません。';
                        }
                    })
                    .catch( error => { 
                        console.log(error);
                    });
                //} else {
                //    this.errorFlag = true;
                //    this.errorMessage = '「私はロボットではありません」にチェックを入れてください。';
                //}
            } else {
                this.errorFlag = true;
                this.errorMessage = '利用規約に同意してください。';
            }
        }
    }
})