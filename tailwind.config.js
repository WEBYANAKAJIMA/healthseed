module.exports = {
  future: {
    // ビルドに非推奨のクラスが含まれていることを通知する警告のオン・オフ
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: [],
  darkMode: false, // or 'media' or 'class'
  // 既存定義の上書き
  theme: {
    // 既存定義の拡張
    extend: {
      // h-[XXX]
      height: theme => ({
        'lg-header': '65px',
        'md-header': '90px',
        '30px': '30px',
        '50px': '50px',
        '55px': '55px',
        '82px': '82px',
        '176px': '176px',
        '230px': '230px',
        '90vh': '90vh',
        '75vh': '75vh',
      }),
      // w-[XXX]
      width: theme => ({
        'lg-farm-img': '144px',
        'lg-certificate-img': '150px',
        'lg-aminoacid-img': '200px',
        '30px': '30px',
        '55px': '55px',
        '130px': '130px',
        '144px': '144px',
        '150px': '150px',
        '176px': '176px',
        '200px': '200px',
        '230px': '230px',
        '240px': '240px',
        '285px': '285px',
        '300px': '300px',
        '360px': '360px',
        '390px': '390px',
        '450px': '450px',
        '560px': '560px',
        '704px': '704px',
        '722px': '722px',
        '756px': '756px',
        '1008px': '1008px',
        '90vh': '90vh',
      }),
      // text-[XXX]
      fontSize: theme => ({
        '10px': '10px',
        '12px': '12px',
        '16px': '16px',
        '18px': '18px',
        '20px': '20px',
        '22px': '22px',
        '24px': '24px',
        '27px': '27px',
        '28px': '28px',
        '30px': '30px',
        '32px': '32px',
        '36px': '36px',
        '38px': '38px',
        '40px': '40px',
        '42px': '42px',
        '44px': '44px',
        '46px': '46px',
        '48px': '48px',
        '52px': '52px',
        '55px': '55px',
      }),
      // leading-[XXX]
      lineHeight: theme => ({
        '20px': '20px',
        '28px': '28px',
        '48px': '48px',
        '58px': '58px',   
        '72px': '72px',
      }),
      // bg-[XXX] 
      backgroundColor: theme => ({
        'green-type-1': '#3eaf4c',
        'green-type-2': '#e6f1e6',
        'skin-type-1': '#e1dbb4',
        'pink-type-1': '#ff3e66',
      }),
      // bg-[XXX] 
      backgroundImage: theme => ({
        'lg-img-top': 'url(../images/lg_img_top.png)',
        'md-img-top': 'url(../images/md_img_top.png)',
        'lg-subtitle-01': 'url(../images/lg_subtitle_bg_01.svg)',
        'lg-subtitle-02': 'url(../images/lg_subtitle_bg_02.svg)',
        'lg-subtitle-03': 'url(../images/lg_subtitle_bg_03.svg)',
        'md-subtitle-01': 'url(../images/md_subtitle_bg_01.svg)',
        'md-subtitle-02': 'url(../images/md_subtitle_bg_02.svg)',
        'md-subtitle-03': 'url(../images/md_subtitle_bg_03.svg)',
        'lg-award': 'url(../images/lg_award_bg.svg)',
        'md-award': 'url(../images/md_award_bg.svg)',
        'lg-component-wapper': 'url(../images/lg_component_wapper_bg.svg)',
        'md-component-wapper': 'url(../images/md_component_wapper_bg.svg)',
        'lg-component': 'url(../images/lg_component_bg.svg)',
        'md-component': 'url(../images/md_component_bg.svg)',
        'hukidasi': 'url(../images/hukidasi_bg.svg)',
      }),
      // bg-[XXX] 
      backgroundSize: theme => ({
        'lg-hukidasi-size': '175px 130px',
        'md-hukidasi-size': '304px 195px',
      }),
      // text-[XXX] 
      textColor: theme => ({
        'pink-type-1': '#ff3e66',
        'green-type-1': '#3eaf4c',
        'blue-type-1': '#3752b1ff',
      }),
      // p-[XXX] 
      padding: theme => ({
        'b-5px': '0px 0px 5px 0;',
      }),
      // rid-cols-[XXX] 
      gridTemplateColumns: theme => ({
        '13': 'repeat(13, minmax(0, 1fr))',
      }),
      // rid-cols-[XXX] 
      gradientColorStops: theme => ({
        'pink-type-1': '#f6696a',
        'orange-type-1': '#f8b043',
      }),
      // border-[XXX] 
      borderWidth: theme => ({
        '1px': '1px'
      }),
      // rounded-[XXX] 
      borderRadius: theme => ({
        '25px': '25px',
        '41px': '41px'
      }),
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/forms')],
}
