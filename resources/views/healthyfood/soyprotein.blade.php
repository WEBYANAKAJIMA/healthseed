@extends('layouts.soyprotein')

@section('header')
  @include('components.header')
@endsection

@section('content')
<main class="w-full">
  <!-- キービジュアル -->
  <h1 class="hidden">Halth Seed -健康商品ポータルサイト-</h1>
  <!-- PC -->
  <div class="hidden lg:block max-w-screen-lg mx-auto bg-lg-img-top bg-no-repeat pt-10">
    <div class="lg-product-bg">
      <p class="YuMincho text-36px tracking-wider">ボディメイク・美容目的<span class="YuMincho text-30px">にオススメな</span></p>
      <p class="YuMincho text-36px mt-12 tracking-wider"><span class="YuMinchoBd text-48px Y-underline">売上高世界No1*</span><span class="YuMincho text-30px">の</span>高品質ソイプロテイン</p>
      <p class="YuMincho text-30px mt-12 tracking-wider">容量:<span class="YuMinchoBd text-42px">490</span>g&nbsp;値段:<span class="YuMinchoBd text-42px">5,970</span>円(税込)</p>
      <p class="YuMincho text-30px mt-6 p-2 bg-lg-subtitle-01 bg-no-repeat text-white">日本を超える品質管理基準+αの実績</p>
      <p class="YuMincho text-30px mt-6 p-2 bg-lg-subtitle-02 bg-no-repeat text-white">最高のアミノ酸バランス・消化吸収</p>
      <p class="YuMincho text-30px mt-6 p-2 bg-lg-subtitle-03 bg-no-repeat text-white">100%植物由来のタンパク質</p>
      <p class="meiryo text-12px mt-2 p-2">*ユーロモニターインターナショナルにより、実施された世界のビタミン及び栄養補助食品のグローバルブランドに関する調査より(総小売上額、2018年調べ)</p>
    </div>
  </div>
  <div class="block lg:hidden max-w-screen-lg mx-auto bg-md-img-top bg-no-repeat pt-6">
    <div>
      <p class="YuMincho text-40px pl-2 tracking-wider">ボディメイク・美容目的<span class="YuMincho text-36px">にオススメな</span></p>
      <p class="YuMincho text-40px mt-4 pl-2 tracking-wider"><span class="YuMinchoBd text-52px Y-underline">売上高世界No1*</span><span class="YuMincho text-36px">の </span></p>
      <p class="YuMincho text-40px mt-4 pl-2 tracking-wider">高品質ソイプロテイン</p>
      <p class="YuMincho text-36px mt-4 pl-2 tracking-wider">容量:<span class="YuMinchoBd text-46px tracking-wider">490</span>g</p>
      <p class="YuMincho text-36px mt-4 pl-2 tracking-wider">値段:<span class="YuMinchoBd text-46px tracking-wider">5,970</span>円(税込)</p>
      <p class="YuMincho text-32px mt-4 p-2 bg-md-subtitle-01 bg-no-repeat text-white">日本を超える品質管理基準+αの実績</p>
      <p class="YuMincho text-32px mt-4 p-2 bg-md-subtitle-02 bg-no-repeat text-white">最高のアミノ酸バランス・消化吸収</p>
      <p class="YuMincho text-32px mt-4 p-2 bg-md-subtitle-03 bg-no-repeat text-white">100%植物由来のタンパク質</p>
      <p class="meiryo text-18px leading-28px p-2">*ユーロモニターインターナショナルにより、実施された世界のビタミン及び<br>&nbsp;&nbsp;栄養補助食品のグローバルブランドに関する調査より(総小売上額、2018年調べ)</p>
    </div>
  </div>
  <!-- スマホ -->
  <div class="block lg:hidden max-w-screen-md mx-auto">
  </div>

  <!-- 購入 -->
  <div id="purchaseSingle" class="lg:max-w-screen-lg md:max-w-screen-md mx-auto p-2">
    <div class="bg-green-type-1 mt-6 p-2 rounded-sm">
      <div class="bg-white text-center">
        <p class="YuMincho lg:text-30px md:text-40px pt-6 text-pink-type-1"><span class="YuMinchoBd lg:text-42px md:text-55px">今なら20％OFF</span>の</p>
        <p class="YuMincho lg:text-30px md:text-40px pt-4 text-pink-type-1" >クーポンコードご利用可能!</p>
        <p class="YuMincho lg:text-30px md:text-40px pt-4 text-pink-type-1">AA202021</p>
        <div class="pt-4">
          <button class="button-type-1 w-704px lg:h-50px lg:rounded-25px lg:text-30px md:h-82px md:rounded-41px md:text-46px" v-on:click="onCouponCopy()">クーポンコードをコピーする</button>
        </div>
        <div class="p-4">
          <button class="button-type-2 w-704px lg:h-50px lg:rounded-25px lg:text-30px md:h-82px md:rounded-41px md:text-46px" v-on:click="onPurchase()">ご購入の方はこちら<i class="align-middle lg-arrow01-icon lg:h-30px lg:h-30px md:w-55px md:w-55px"></i></button>
        </div>
        <p class="text-left p-4">※ボタン押下で<span class="text-pink-type-1 font-bold">Amazon</span>の商品ページに遷移し、ご購入する流れとなります。また注文内容の確認画面で「ギフト券、種類別商品券、またはプロモーションコード」にクーポンコードを入力することで割引価格でご購入する事ができます。</p>
      </div>
    </div>
  </div>
  <script src="{{ mix('js/healthyfood/soyprotein/purchaseSingle.js') }}"></script>

  <!-- こんな方いませんか -->
  <div class="lg:max-w-screen-lg md:max-w-screen-md mx-auto p-2">
    <div class="mt-12">
      <h2 class="YuMinchoBd lg:text-38px md:text-44px text-center tracking-wider">こんな方いませんか？</h2>
      <p class="lg:text-24px mt-6 ml-12 tracking-wider"><i class="lg-checkbox-icon mr-2"></i>高品質なソイプロテインを探している方</p>
      <p class="lg:text-24px mt-6 ml-12 tracking-wider"><i class="lg-checkbox-icon mr-2"></i>健康維持のため、タンパク質を補給できるプロテインを探している方</p>
      <p class="lg:text-24px mt-6 ml-12 tracking-wider"><i class="lg-checkbox-icon mr-2"></i>ダイエット中の間食や寝る前の栄養補給できるサプリを探している方</p>
      <p class="lg:text-24px mt-6 ml-12 tracking-wider"><i class="lg-checkbox-icon mr-2"></i>ボディラインを整えながら動ける体づくりを目指している方</p>
    </div>
  </div>

  <!-- そんな方たちにオススメな -->
  <div class="bg-green-type-1 mt-12">
    <img class="block m-auto" src="../images/icons/arrow02.svg" alt="白い下向き矢印">
    <div class="lg:max-w-screen-lg md:max-w-screen-md mx-auto px-2 pt-12  pb-20 lg:bg-lg-award md:bg-md-award bg-no-repeat">
      <p class="YuMincho lg:text-30px md:text-36px mt-6 text-center text-white tracking-wider">そんな方たちにオススメな</p>
      <p class="YuMincho lg:text-30px md:text-36px mt-6 text-center text-white tracking-wider"><span class="YuMinchoBd text-42px md:text-44px tracking-wider">売上高世界No1</span>の</p>
      <p class="YuMincho lg:text-30px md:text-36px mt-6 text-center text-white tracking-wider"><span class="YuMinchoBd text-42px md:text-44px tracking-wider">高品質ソイプロテイン</span>です</p>
    </div>
  </div>
  <img class="block m-auto" src="../images/icons/arrow03.svg" alt="みどり下向き矢印">

  <!-- 選ばれる３つの理由 -->
  <div class="lg:max-w-screen-lg md:max-w-screen-md mx-auto p-2 mt-12">
    <h2 class="YuMincho lg:text-30px md:text-36px text-center tracking-wider">選ばれる<span class="YuMinchoBd lg:text-38px md:text-44px tracking-wider">３つの理由</span></h2>

    <!-- POINT01 -->
    <div id="qualityTest" class="my-12">
      <p class="block YuMinchoBd G-underline mr-2 w-22 p-b-5px float-left lg:text-24px lg:leading-20px md:text-32px md:leading-48px">POINT</p>
      <p class="block YuMinchoBd float-left w-10 float-left lg:text-36px md:text-42px">01</p>
      <h3 class="YuMinchoBd pxmt-6 pt-4 clear-both lg:text-36px md:text-44px">日本を超える品質管理基準+αの実績</h3>
      <p class="mt-4">
        製品の品質管理基準<span class="text-10px">※1</span>は日本よりもアメリカの方が厳しい法律が定められています。<br>
        実は日本の製品は表示通りの成分量が入っていない等の事例があります。<br>
        本製品はさらなる安全を求め、アメリカの基準に＋αの取り組みとして放射線殺菌検査<span class="text-10px">※2</span>やX線遺物探知検査<span class="text-10px">※3</span>などを行っています。</p>
      </p>
      <div class="mt-4">
        <img class="hidden lg:block" src="../images/lg_img_test.png" alt="2008年8月に国民生活センターより公表された成分量のテスト結果">
        <img class="block lg:hidden" src="../images/md_img_test.png" alt="2008年8月に国民生活センターより公表された成分量のテスト結果">
        <p class="ml-2 lg:text-12px md:text-24px "><span class="transition duration-500 border-b-2 border-gray-300 transform hover:border-b-2 hover:border-black" v-on:click="onComponent('qualityTestAnnotation')">※注釈の詳細を見る</span></p>
      </div>

      <p class="mt-8">
        また製品の原料はアメリカ、メキシコ、ブラジルの3つの広大な有機農場でそれぞれ最も適した農場で栽培しており、<br>
        収穫から加工までを一貫して行うことで高品質のソイプロテインを生成しています。<br>
        また栽培する植物が種の出生地を記録した出生証明書を持ち、<span class="text-pink-type-1 font-bold">ファイトケミカルが豊富な種</span>だけを選別しています。
      </p>

      <div class="grid lg:grid-cols-13 md:grid-cols-2 lg:gap-4 mt-4">
        <div class="lg:col-span-6 lg:row-span-13 md:col-span-2 md:row-span-1">
          <div class="overflow-hidden">
            <a href="https://www.amwaylive.com/psl/businesssupport/amwaych/5763528761001_ano.html?cid=qr:jp:ja:na:com:catalog9_mov:20200812_59" target="_blank" rel="noopener noreferrer">
              <img class="lg:w-144px md:w-240px float-left w-lg-farm-img" src="../images/lg_img_farm_01.png" alt="トラウトレイク農場">
            </a>
            <p class="float-left YuMinchoBd lg:text-30px md:text-40px mt-2 ml-4">トラウトレイク農場</p>
            <p class="float-left YuMincho lg:text-18px md:text-32px mt-2 ml-6">北米最大の有機ハーブ園</p>
            <a href="https://www.amwaylive.com/psl/businesssupport/amwaych/5763528761001_ano.html?cid=qr:jp:ja:na:com:catalog9_mov:20200812_59" target="_blank" rel="noopener noreferrer" class="float-left lg:text-18px md:text-36px mt-2 ml-6"><span class="transition duration-500 border-b-2 border-gray-300 transform hover:border-b-2 hover:border-black">動画を見る</span><i class="lg-arrow02-icon"></i></a>
          </div>
          <div class="overflow-hidden mt-6">
            <a href="https://www.amwaylive.com/psl/businesssupport/amwaych/6163566323001_ano.html?cid=qr:jp:ja:na:com:catalog9_mov:20200812_42" target="_blank" rel="noopener noreferrer">
              <img class="lg:w-144px md:w-240px float-left w-lg-farm-img" src="../images/lg_img_farm_02.png" alt="エルペタカル農場">
            </a>
            <p class="float-left YuMinchoBd lg:text-30px md:text-40px  mt-2 ml-4">エルペタカル農場</p>
            <p class="float-left YuMincho lg:text-18px md:text-32px mt-2 ml-6">７つの火山に囲まれた理想の大地</p>
            <a href="https://www.amwaylive.com/psl/businesssupport/amwaych/6163566323001_ano.html?cid=qr:jp:ja:na:com:catalog9_mov:20200812_42" target="_blank" rel="noopener noreferrer" class="float-left lg:text-18px md:text-36px mt-2 ml-6"><span class="transition duration-500 border-b-2 border-gray-300 transform hover:border-b-2 hover:border-black">動画を見る</span><i class="lg-arrow02-icon"></i></a>
          </div>
          <div class="overflow-hidden mt-6">
            <a href="https://www.amwaylive.com/psl/businesssupport/amwaych/6159953711001_ano.html?cid=qr:jp:ja:na:com:catalog9_mov:20200812_41" target="_blank" rel="noopener noreferrer">
              <img class="lg:w-144px md:w-240px float-left w-lg-farm-img" src="../images/lg_img_farm_03.png" alt="ウバジャラ農場">
            </a>
            <p class="float-left YuMinchoBd lg:text-30px md:text-40px  mt-2 ml-4">ウバジャラ農場</p>
            <p class="float-left YuMincho lg:text-18px md:text-32px mt-2 ml-6">ブラジルの熱帯で有機農法を育む</p>
            <a href="https://www.amwaylive.com/psl/businesssupport/amwaych/6159953711001_ano.html?cid=qr:jp:ja:na:com:catalog9_mov:20200812_41" target="_blank" rel="noopener noreferrer" class="float-left lg:text-18px md:text-36px mt-2 ml-6"><span class="transition duration-500 border-b-2 border-gray-300 transform hover:border-b-2 hover:border-black">動画を見る</span><i class="lg-arrow02-icon"></i></a>
          </div>
        </div>
        <div class="lg:col-span-7 lg:row-span-13 md:col-span-2 md:row-span-1">
          <div class="bg-green-type-1 p-2 rounded-sm lg:mt-0 md:mt-6">
            <div class="bg-white p-4">
              <p class="YuMinchoBd lg:text-24px md:text-42px pt-2">
                ファイトケミカルとは
              </p>
              <p class="mt-2">
                ファイトケミカルは野菜や果物の皮や種子に多く含まれている機能性成分のことで私たちがよく耳にする<br>
                <span class="text-pink-type-1 font-bold">ポリフェノール、イソフラボン、リコピン等はファイトケミカルの一種です。</span>
                またファイトケミカルは生きるために必須なものではありませんが、健康に生きる手助けをしてくれます。
              </p>
              <div class="text-center my-6">
                <img class="lg:w-150px md:w-300px w-lg-certificate-img m-auto" src="../images/lg_img_certificate.png" alt="出生証明書">
                <p class="font-bold">
                   ファイトケミカルが優れていることを示す<br>
                   出生証明書
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <modal v-bind:modal-date="modalDate"></modal>
    </div>
    <script src="{{ mix('js/healthyfood/soyprotein/qualityTest.js') }}"></script>
  </div>
  <!-- POINT02 -->
  <div class="bg-green-type-2">
    <div class="lg:max-w-screen-lg md:max-w-screen-md mx-auto p-2">
      <div class="my-12">
        <p class="block YuMinchoBd G-underline mr-2 w-22 p-b-5px float-left lg:text-24px lg:leading-20px md:text-32px md:leading-48px">POINT</p>
        <p class="block YuMinchoBd float-left w-10 float-left lg:text-36px md:text-42px">02</p>
        <h3 class="YuMinchoBd pxmt-6 pt-4 clear-both lg:text-36px md:text-44px">最高のアミノ酸バランス・消化吸収</h3>
        <p class="mt-4">
          ソイプロテインの原料は大豆、小麦、エンドウ豆を使用し、独自の処方で最高のアミノ酸バランスと消化吸収を実現しています。<br>
          また植物性タンパク質は吸収が緩やかのため、<span class="text-pink-type-1 font-bold">腹持ちが良くダイエットにおススメ</span>です。
        </p>
        <div class="grid lg:grid-cols-7 md:grid-cols-3 gap-4 mt-8">
          <div class="lg:col-span-1 lg:row-span-1 md:col-span-1 md:row-span-1 text-center">
            <img class="lg:w-130px md:w-240px" src="../images/lg_img_aminoacid_01.png" alt="大豆">
            <p class="YuGothB lg:text-20px mt-2">大豆</p>
            <p class="YuGothM lg:text-16px md:text-30px">植物性タンパク質</p>
            <p class="YuGothM lg:text-16px md:text-30px">の代表</p>
          </div>
          <div class="lg:col-span-1 lg:row-span-1 md:col-span-1 md:row-span-1 text-center">
            <img class="lg:w-130px md:w-240px" src="../images/lg_img_aminoacid_02.png" alt="小麦">
            <p class="YuGothB lg:text-20px mt-2">小麦</p>
            <p class="YuGothM lg:text-16px md:text-30px">大豆のアミノ酸</p>
            <p class="YuGothM lg:text-16px md:text-30px">バランスをさらに</p>
            <p class="YuGothM lg:text-16px md:text-30px">強化する</p>
          </div>
          <div class="lg:col-span-1 lg:row-span-1 md:col-span-1 md:row-span-1 text-center">
            <img class="lg:w-130px md:w-240px" src="../images/lg_img_aminoacid_03.png" alt="エンドウ豆">
            <p class="YuGothB lg:text-20px mt-2">エンドウ豆</p>
            <p class="YuGothM lg:text-16px md:text-30px">小麦のアミノ酸</p>
            <p class="YuGothM lg:text-16px md:text-30px">バランスを補う</p>
          </div>
          <div class="lg:col-span-4 lg:row-span-1 md:col-span-3 md:row-span-2">
            <div class="ml-4 mr-4 lg:pt-20 md:py-6 lg:float-left md:text-center">
              <img class="hidden lg:block" src="../images/icons/arrow05.svg" alt="みどり右向き矢印">
              <img class="block lg:hidden md:m-auto" src="../images/icons/arrow03.svg" alt="みどり下向き矢印">
            </div>
            <div class="float-left lg:pt-0 md:pt-12">
              <p class="YuMinchoBd lg:text-28px md:text-42px mt-2"><span class="border-b-2 border-black">最高の</span></p>
              <p class="YuMinchoBd lg:text-28px md:text-42px mt-6"><span class="border-b-2 border-black">アミノ酸バランスと</span></p>
              <p class="YuMinchoBd lg:text-28px md:text-42px mt-6"><span class="border-b-2 border-black">消化吸収</span></p>
              <p class="YuMinchoBd lg:text-28px md:text-42px mt-6"><span class="border-b-2 border-black">PDCAAS*=1.0</span></p>
              <p class="hidden lg:block YuMinchoBd text-16px mt-4">*消化吸収性アミノ酸スコア1.0が最高値</p>
            </div>
            <div class="float-left pt-2 md:pl-2">
              <img class="w-lg-aminoacid-img lg:w-200px md:w-360px" src="../images/lg_img_aminoacid_04.png" alt="アミノ酸スコア">
            </div>
          </div>
        </div>
        <div class="block lg:hidden YuMinchoBd text-38px mt-4 text-center">
          <p>*消化吸収性アミノ酸スコア1.0が最高値</p>
        </div>
      </div>
    </div>
  </div>
  <!-- POINT03 -->
  <div class="lg:max-w-screen-lg md:max-w-screen-md mx-auto p-2 my-12">
    <div>
      <p class="block YuMinchoBd G-underline mr-2 w-22 p-b-5px float-left lg:text-24px lg:leading-20px md:text-32px md:leading-48px">POINT</p>
      <p class="block YuMinchoBd float-left w-10 float-left lg:text-36px md:text-42px">03</p>
      <h3 class="YuMinchoBd pxmt-6 pt-4 clear-both lg:text-36px md:text-44px">100%植物由来のタンパク質</h3>
    </div>
    <p class="mt-4">
      本製品の成分は100%植物由来のタンパク質で10gあたりのコレステロール0、脂質は0.81以下に加え合成着色料・合成保存料・合成香料・合成甘味料は不使用ため、
      <span class="text-pink-type-1 font-bold">老若男女関係なく良質なタンパク質をスマートに補給できます！</span><br>
      またフレーバーは全部で4種類用意されており、あなたの味覚、目的に合ったソイプロテインをお選び頂けます。
    </p>
    <p>
      ※1回あたりの摂取量は年齢に応じて調整が必要ですが、本製品は<span class="text-pink-type-1 font-bold">1歳以上のお子様から</span>お摂りいただけます！
    </p>
    <p class="YuGothB text-center text-38px my-8 text-green-type-1">選べる４つのフレーバー</p>
    <div class="mt-8 text-center lg:bg-lg-component-wapper lg:h-176px lg:w-1008px md:bg-md-component-wapper md:h-230px md:w-756px">
      <div class="m-auto overflow-hidden lg:w-560px md:w-722px">
        <div class="float-left bg-no-repeat text-center lg:bg-lg-component lg:h-176px lg:w-176px md:bg-md-component md:h-230px md:w-230px">
          <p class="YuGothM text-white lg:text-28px lg:mt-12 md:text-32px md:mt-8">コレステ</p>
          <p class="YuGothM mt-2 text-white lg:text-28px md:text-32px">ロール</p>
          <p class="YuGothM mt-2 pb-8 text-white lg:text-28px md:text-32px">0</p>
        </div>
        <div class="float-left bg-no-repeat text-center mx-4 lg:bg-lg-component lg:h-176px lg:w-176px md:bg-md-component md:h-230px md:w-230px">
          <p class="YuGothM mt-14 text-white lg:text-28px md:text-32px">脂質</p>
          <p class="YuGothM mt-2 pb-8 text-white lg:text-28px md:text-32px">0.81以下</p>
        </div>
        <div class="float-left bg-no-repeat text-center lg:bg-lg-component lg:h-176px lg:w-176px md:bg-md-component md:h-230px md:w-230px">
          <p class="YuGothM mt-14 text-white lg:text-28px md:text-32px">植物性</p>
          <p class="YuGothM mt-2 pb-8 text-white lg:text-28px md:text-32px">タンパク質</p>
        </div>
      </div>
    </div>
    <div id="purchaseMulti" class="lg:max-w-screen-lg md:max-w-screen-md mx-auto p-2">
      <div class="bg-green-type-1 mt-6 p-2 rounded-sm">
        <div class="bg-white text-center">
          <p class="YuMincho lg:text-30px md:text-40px pt-6 text-pink-type-1"><span class="YuMinchoBd lg:text-42px md:text-55px">今なら20％OFF</span>の</p>
          <p class="YuMincho lg:text-30px md:text-40px pt-4 text-pink-type-1" >クーポンコードご利用可能!</p>
          <p class="YuMincho lg:text-30px md:text-40px pt-4 text-pink-type-1">AA202021</p>
          <div class="pt-4">
            <button class="button-type-1 w-704px lg:h-50px lg:rounded-25px lg:text-30px md:h-82px md:rounded-41px md:text-46px" v-on:click="onCouponCopy()">クーポンコードコピーする</button>
          </div>
          <div class="grid lg:grid-cols-2 lg:gap-8 mt-8">
            <div class="lg:col-span-1 lg:row-span-1">
              <div class="float-left">
                <img class="lg:w-285px md:w-390px" src="../images/lg_img_protein_01.png" alt="オールプラントフレーバー">
              </div>
              <div class="float-left">
                <p class="YuGothB lg:text-24px md:text-40px text-left pl-4 mt-4">オールプラント</br>フレーバー！</p>
                <p class="YuGothB bg-hukidasi bg-no-repeat text-left pr-4 py-10 mt-4 text-blue-type-1 lg:text-16px lg:bg-lg-hukidasi-size lg:pl-8 md:text-27px md:bg-md-hukidasi-size md:pl-14">肌や髪の美容にも<br>おすすめ!</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-4">タンパク質</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-2">イソフラボン</p>
              </div>
              <div class="clear-left mt-4 text-center">
                <button class="button-type-1 lg:w-450px lg:h-50px lg:rounded-25px lg:text-30px md:w-704px md:h-82px md:rounded-41px md:text-46px" v-on:click="onComponent('soyProteinComponent1')">成分・摂取方法を見る</button>
              </div>
              <div class="clear-left mt-4 text-center lg:mb-4 md:mb-12">
                <button class="button-type-2 lg:w-450px lg:h-50px lg:rounded-25px lg:text-30px md:w-704px md:h-82px md:rounded-41px md:text-46px" v-on:click="onPurchase(1)"><span class="align-middle">購入する</span><i class="align-middle lg-arrow01-icon lg:h-30px lg:h-30px md:w-55px md:w-55px"></i></button>
              </div>
            </div>

            <div class="lg:col-span-1 lg:row-span-1">
              <div class="float-left">
                <img class="lg:w-285px md:w-390px" src="../images/lg_img_protein_02.png" alt="チョコレートフレーバー">
              </div>
              <div class="float-left">
                <p class="YuGothB lg:text-24px md:text-40px text-left pl-4 mt-4">チョコレート</br>フレーバー！</p>
                <p class="YuGothB bg-hukidasi bg-no-repeat text-left pr-4 py-10 mt-4 text-blue-type-1 lg:text-16px lg:bg-lg-hukidasi-size lg:pl-8 md:text-27px md:bg-md-hukidasi-size md:pl-14">飲みやすい<br>人気フレーバー！</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-4">タンパク質</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-2">カルシウム</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-2">イソフラボン</p>
              </div>
              <div class="clear-left mt-4 text-center">
                <button class="button-type-1 lg:w-450px lg:h-50px lg:rounded-25px lg:text-30px md:w-704px md:h-82px md:rounded-41px md:text-46px" v-on:click="onComponent('soyProteinComponent2')">成分・摂取方法を見る</button>
              </div>
              <div class="clear-left mt-4 text-center lg:mb-4 md:mb-12">
                <button class="button-type-2 lg:w-450px lg:h-50px lg:rounded-25px lg:text-30px md:w-704px md:h-82px md:rounded-41px md:text-46px" v-on:click="onPurchase(2)"><span class="align-middle">購入する</span><i class="align-middle lg-arrow01-icon lg:h-30px lg:h-30px md:w-55px md:w-55px"></i></button>
              </div>
            </div>

            <div class="lg:col-span-1 lg:row-span-1">
              <div class="float-left">
                <img class="lg:w-285px md:w-390px" src="../images/lg_img_protein_03.png" alt="ベリーフレーバー">
              </div>
              <div class="float-left">
                <p class="YuGothB lg:text-24px md:text-40px text-left pl-4 mt-4">ベリー</br>フレーバー！</p>
                <p class="YuGothB bg-hukidasi bg-left bg-no-repeat text-left py-10 mt-4 text-blue-type-1 lg:text-16px lg:bg-lg-hukidasi-size lg:pl-8 lg:pr-12 md:text-27px md:bg-md-hukidasi-size md:pl-14 md:pr-20">育ちざかりの<br>お子様にも！</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-4">タンパク質</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-2">ビタミンC</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-2">カルシウム</p>
              </div>
              <div class="clear-left mt-4 text-center">
                <button class="button-type-1 lg:w-450px lg:h-50px lg:rounded-25px lg:text-30px md:w-704px md:h-82px md:rounded-41px md:text-46px" v-on:click="onComponent('soyProteinComponent3')">成分・摂取方法を見る</button>
              </div>
              <div class="clear-left mt-4 text-center lg:mb-4 md:mb-12">
                <button class="button-type-2 lg:w-450px lg:h-50px lg:rounded-25px lg:text-30px md:w-704px md:h-82px md:rounded-41px md:text-46px" v-on:click="onPurchase(3)"><span class="align-middle">購入する</span><i class="align-middle lg-arrow01-icon lg:h-30px lg:h-30px md:w-55px md:w-55px"></i></button>
              </div>      
            </div>

            <div class="lg:col-span-1 lg:row-span-1">
              <div class="float-left">
                <img class="lg:w-285px md:w-390px" src="../images/lg_img_protein_04.png" alt="抹茶フレーバー">
              </div>
              <div class="float-left">
                <p class="YuGothB lg:text-24px md:text-40px text-left pl-4 mt-4">抹茶</br>フレーバー！</p>
                <p class="YuGothB bg-hukidasi bg-no-repeat text-left py-10 mt-4 text-blue-type-1 lg:text-16px lg:bg-lg-hukidasi-size lg:pl-8 lg:pr-8 md:text-27px md:bg-md-hukidasi-size md:pl-14 md:pr-12">すっきりとした<br>甘さの抹茶味！</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-4">タンパク質</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-2">カフェイン</p>
                <p class="YuGothB bg-skin-type-1 rounded-3xl lg:text-16px md:text-32px mt-2">カテキン</p>
              </div>
              <div class="clear-left mt-4 text-center">
                <button class="button-type-1 lg:w-450px lg:h-50px lg:rounded-25px lg:text-30px md:w-704px md:h-82px md:rounded-41px md:text-46px" v-on:click="onComponent('soyProteinComponent4')">成分・摂取方法を見る</button>
              </div>
              <div class="clear-left mt-4 text-center lg:mb-4 md:mb-12">
                <button class="button-type-2 lg:w-450px lg:h-50px lg:rounded-25px lg:text-30px md:w-704px md:h-82px md:rounded-41px md:text-46px" v-on:click="onPurchase(4)"><span class="align-middle">購入する</span><i class="align-middle lg-arrow01-icon lg:h-30px lg:h-30px md:w-55px md:w-55px"></i></button>
              </div>
            </div>
          </div>
          <p class="text-left p-4">※ボタン押下で<span class="text-pink-type-1 font-bold">Amazon</span>の商品ページに遷移し、ご購入する流れとなります。また注文内容の確認画面で「ギフト券、種類別商品券、またはプロモーションコード」にクーポンコードを入力することで割引価格でご購入する事ができます。</p>
        </div>
      </div>

      <modal v-bind:modal-date="modalDate"></modal>

    </div>
    <script src="{{ mix('js/healthyfood/soyprotein/purchaseMulti.js') }}"></script>
  </div>
  <!-- POINT03 -->
  <div class="bg-green-type-2">
    <div class="lg:max-w-screen-lg md:max-w-screen-md mx-auto p-2">
      <div class="mt-12 bg-gradient-to-r from-pink-type-1 to-orange-type-1 p-2">
        <div class="border-2 border-white p-6">
          <p class="YuMincho text-center text-white lg:text-30px md:text-48px">お得情報</p>
          <p class="YuMincho text-center text-white mt-2 lg:text-20px md:text-40px">INFOTMATION<span class="lg:px-2 mb:px-4">OF</span>SALE</p>
        </div>
      </div>
      <div class="bg-white p-2 mb-8">
        <p>
          本商品の製造会社の無料の説明会を受け会員登録して頂いた方は<span class="text-pink-type-1 font-bold">ソイプロテインだけでなく良質なサプリ、化粧品、生活用品等も更にお得にお買い求め頂くことが可能</span>になります。まずはお気軽にご連絡ください！
        </p>
        <p>※説明会の実施時間は1時間程度で都内で行いますが、カメラ付きPCをお持ちの方はリモートでの説明会の実施が可能です。
        </p>
 
        <div id="contact" class="mt-8">
          <validation-observer v-slot="{ invalid }" ref="form">
            <form action="#">

              <validation-provider rules="required" v-slot="{ errors }">
                <div class="lg:mb-8 md:mb-12">
                  <label class="block ml-8 mb-2 lg:text-22px md:text-40px">名前<span class="ml-4 px-2 text-white bg-pink-type-1 lg:text-18px md:text-32px">必須</span></label>
                  <input v-model="field.name" name="名前" type="text" maxlength="30" class="form-input ml-8 block rounded-md border-gray-300 mt-2 lg:text-16px lg:py-2 lg:w-5/12 md:text-32px md:py-6 md:w-11/12 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                  <span class="block ml-8 mt-2 text-red-500">@{{ errors[0] }}</span>
                </div>
              </validation-provider>

              <validation-provider rules="required|email" v-slot="{ errors }">
                <div class="lg:mb-8 md:mb-12">
                  <label class="block ml-8 mb-2 lg:text-22px md:text-40px">メールアドレス<span class="ml-4 px-2 text-white bg-pink-type-1 lg:text-18px md:text-32px">必須</span></label>
                  <input v-model="field.email" name="メールアドレス" type="text" maxlength="255" class="form-input ml-8 block rounded-md border-gray-300 mt-2 lg:text-16px lg:py-2 lg:w-5/12 md:text-32px md:py-6 md:w-11/12 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"/>
                  <span class="block ml-8 mt-2 text-red-500">@{{ errors[0] }}</span>
                </div>
              </validation-provider>

              <div class="block lg:mb-8 md:mb-10">
                <span class="pl-8 block lg:text-22px md:text-40px">説明会の形式<span class="ml-4 px-2 text-white bg-pink-type-1 lg:text-18px md:text-32px">必須</span></span>
                <label class="inline-flex items-center ml-16 mt-4">
                  <input v-model="field.meetingType" value="0" type="radio" name="対面" class="form-radio text-pink-type-1 focus:border-indigo-300 lg:h-6 lg:w-6 md:h-12 md:w-12 focus:ring focus:ring-indigo-200 focus:ring-opacity-60"/>
                  <span class="ml-2 lg:text-18px lg:py-0 md:text-36px md:py-6">対面</span>
                </label>
                <label class="inline-flex items-center ml-16 mt-4">
                  <input v-model="field.meetingType" value="1" type="radio" name="リモート" class="form-radio text-pink-type-1 focus:border-indigo-300 lg:h-6 lg:w-6 md:h-12 md:w-12 focus:ring focus:ring-indigo-200 focus:ring-opacity-60"/>
                  <span class="ml-2 lg:text-18px lg:py-0 md:text-36px md:py-6">リモート</span>
                </label>
              </div>

              <div class="block lg:mb-8 md:mb-12">
                <label class="block pl-8 mb-2 lg:text-22px md:text-40px" for="name2">お問い合わせ内容<span class="ml-4 px-2 text-white bg-gray-400 lg:text-18px md:text-32px">任意</span></label>
                <span class="block pl-8 my-2">※ご希望する説明会の場所・実施日時等があれば記入して下さい</span>
                <textarea v-model="field.contactContent" class="form-textarea ml-8 rounded-md border-gray-300 focus:border-indigo-300 lg:text-16px lg:leading-28px lg:py-2 lg:w-10/12 md:text-32px md:leading-58px md:py-6 md:w-11/12 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="お問い合わせ内容" rows="5" maxlength="500" placeholder="場所：都内、実施日時：XX/XX XX:XX"></textarea>
              </div>

              <div class="block text-center lg:mb-8 md:mb-12">
                <span class="block lg:text-22px md:text-40px">利用規約</span>

                <div class="mx-8 mb-8 overflow-auto lg:h-44 md:h-80 text-left border border-gray-300">
                  <p>この利用規約（以下，「本規約」といいます。）は，Health Seed -健康商品ポータルサイト-（以下，「当社」といいます。）において説明会の実施依頼について条件を定めるものです。
                     なお、「上記の利用規約に同意する」にチェックを入れた時点で、本利用規約に同意したものとみなします。</p>
                  <p>&nbsp;&nbsp;1.本説明会は20以上のお客様より参加することが可能になります。</p>
                  <p>&nbsp;&nbsp;2.本説明会の実施前に年齢確認できるもの(運転免許書、健康保険証等)をご提示して頂きます。</p>
                  <p>&nbsp;&nbsp;3.お客様から頂く個人情報は、お問合せ・ご質問への回答、情報提供のために使用させていただきます。</p>
                  <p>&nbsp;&nbsp;4.利用目的の範囲内でお客様の個人情報を弊社が使用することがございます。</p>
                  <p>&nbsp;&nbsp;5.お客様の個人情報の取扱や本サービス全般に関する当社の考え方をご覧になりたい方は、<a href="/common/privacypolicy" class="transition duration-500 border-b-2 border-gray-300 transform hover:border-b-2 hover:border-black">「プライバシーポリシー・免責事項」</a>をご覧ください。</p>
                  <p>&nbsp;&nbsp;6.当社からお客様へ送信するe-mailは、お客様個人宛にお送りするものです。回答の内容の一部または全部を転載、二次利用することはご遠慮ください。</p>
                </div>
    
                <label class="inline-flex items-center ml-8">
                  <input v-model="field.term" type="checkbox" class="form-checkbox text-pink-type-1 lg:h-6 lg:w-6 md:h-12 md:w-12 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-60">
                  <span class="ml-2 lg:text-22px lg:py-0 md:text-40px md:py-6">上記の利用規約に同意する</span>
                </label>
              </div>
              <p v-if="errorFlag" class="block text-xl ml-12 m-4 text-red-500 text-center">@{{ errorMessage }}</p>

              <div class="pl-8 mb-2">
                <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script>
                <vue-recaptcha sitekey="{{ env('MIX_RECAPTCHA_SITE_KEY') }}" ref="invisibleRecaptcha" @verify="onVerify" vue-recaptcha-size="optionSize"></vue-recaptcha>
              </div>

              <p class="pl-8 text-pink-type-1 lg:text-30px md:text-42px text-center mt-8">＼説明会は無料開催中！／</p>

              <div class="p-4 text-center">
                <button type="button" v-on:click="onContact" v-bind:disabled="invalid" class="button-type-3 w-704px lg:h-50px lg:rounded-25px lg:text-30px md:h-82px md:rounded-41px md:text-46px">説明会の実施を依頼する</button>
              </div>

            </form>
          </validation-observer>
        </div>
        <script src="{{ mix('js/healthyfood/soyprotein/contact.js') }}"></script>
      </div>
    </div>
  </div>
</main>
@endsection

@section('footer')
  @include('components.footer')
@endsection