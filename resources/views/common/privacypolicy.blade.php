@extends('layouts.soyprotein')

@section('header')
  @include('components.header')
@endsection

@section('content')
<main class="w-full">
  <!-- キービジュアル -->
  <div class="lg:max-w-screen-lg md:max-w-screen-md mx-auto p-2 my-12">
    <h1 class="text-center lg:text-28px md:text-48px">プライバシーポリシー・免責事項</h1>
    <p class="mt-6">Health Seed -健康商品ポータルサイト-（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いと免責事項について，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）と免責事項を定めます。</p>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第1条（個人情報）</h2>
      <p class="pl-4">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先, 電子メールアドレス, その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第2条（個人情報の収集方法）</h2>
      <p class="pl-4">当社は，ユーザーが説明会の実施依頼をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第3条（個人情報を収集・利用する目的）</h2>
      <p class="pl-8">1.当社サービスの提供・運営のため</p>
      <p class="pl-8">2.ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</p>
      <p class="pl-8">3.ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するためメンテナンス，重要なお知らせなど必要に応じたご連絡のため</p>
      <p class="pl-8">4.利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため</p>
      <p class="pl-8">5.ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため</p>
      <p class="pl-8">6.有料サービスにおいて，ユーザーに利用料金を請求するため</p>
      <p class="pl-8">7.上記の利用目的に付随する目的</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第4条（利用目的の変更）</h2>
      <p class="pl-4">1.当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。</p>
      <p class="pl-4">2.利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第5条（個人情報の第三者提供）</h2>
      <p class="pl-4">1.当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。</p>
      <p class="pl-8">1-1.人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき</p>
      <p class="pl-8">1-2.公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき</p>
      <p class="pl-8">1-3.国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合で   あって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</p>
      <p class="pl-8">1-4.予め次の事項を告知あるいは公表し，かつ当社が個人情報保護委員会に届出をしたとき</p>
      <p class="pl-12">1-4-1.利用目的に第三者への提供を含むこと</p>
      <p class="pl-12">1-4-2.第三者に提供されるデータの項目</p>
      <p class="pl-12">1-4-3.第三者への提供の手段または方法</p>
      <p class="pl-12">1-4-4.本人の求めに応じて個人情報の第三者への提供を停止すること</p>
      <p class="pl-12">1-4-5.本人の求めを受け付ける方法</p>
      <p class="pl-4">2.前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。</p>
      <p class="pl-8">2-1.当社が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合</p>
      <p class="pl-8">2-2.合併その他の事由による事業の承継に伴って個人情報が提供される場合</p>
      <p class="pl-8">2-3.個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いた場合</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第6条（個人情報の開示）</h2>
      <p class="pl-4">1.当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。なお，個人情報の開示に際しては，1件あたり1，000円の手数料を申し受けます。</p>
      <p class="pl-8">1-1.本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合</p>
      <p class="pl-8">1-2.当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合</p>
      <p class="pl-8">1-3.その他法令に違反することとなる場合</p>
      <p class="pl-4">2.前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第7条（個人情報の訂正および削除）</h2>
      <p class="pl-4">1.ユーザーは，当社の保有する自己の個人情報が誤った情報である場合には，当社が定める手続きにより，当社に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。</p>
      <p class="pl-4">2.当社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。</p>
      <p class="pl-4">3.当社は，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第8条（個人情報の利用停止等）</h2>
      <p class="pl-4">1.当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。</p>
      <p class="pl-4">2.前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。</p>
      <p class="pl-4">3.当社は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。</p>
      <p class="pl-4">4.前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第9条（免責事項について）</h2>
      <p>下記の各条項に定める事項については、免責されるものとします。当サイトをご利用のユーザーは、本免責事項の内容をご承諾頂いたものと見なしますので、ご了承ください。</p>
      <p>下記のような内容につきましては、当社としては責任を負いかねない事がございますので御了承ください。</p>
      <p class="pl-4">1.当サイトの本サービスは、可能な限り正確な情報を掲載するよう努めていますが、誤情報が入りこんだり、古くなっていることもあります。必ずしも正確性・信頼性を保証するものではございません。</p>
      <p class="pl-4">2.当サイトで掲載している文章・画像・動画等の著作権・肖像権は各権利所有者に帰属します。万が一問題がある場合は、ご連絡お願いします。</p>
      <p class="pl-4">3.当サイトに存在する、文章・画像・動画等の著作物の情報を無断転載することを禁止します。</p>
      <p class="pl-4">4.当サイトに掲載された内容により、生じた損害等については一切の責任を負いかねます。また、当サイトからリンクやバナーなどを通じて他サイトに移動された場合、移動先サイトで提供される情報やサービス等について、当方を一切の責任を負いません。</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第10条 当サイトに掲載されている広告について</h2>
      <p class="pl-4">当サイトでは本サービスの向上のため、第三者配信の広告サービスを利用しています。このような広告配信事業者は、ユーザーの興味に応じた商品やサービスの広告を表示するため、当サイトや他サイトへのアクセスに関する情報 『Cookie』(氏名、住所、メール アドレス、電話番号は含まれません) を使用することがあります。またGoogleアドセンスに関して、このプロセスの詳細やこのような情報が広告配信事業者に使用されないようにする方法については、<a href="https://policies.google.com/technologies/ads?gl=jp" target="_blank" rel="noopener noreferrer" class="transition duration-500 border-b-2 border-gray-300 transform hover:border-b-2 hover:border-black">こちらをクリックしてください。</a></p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第11条 当サイトが使用しているアクセス解析ツールについて</h2>
      <p class="pl-4">当サイトでは本サービスの向上のため、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。このGoogleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。このトラフィックデータは匿名で収集されており、個人を特定するものではありません。この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。この規約に関して、<a href="https://marketingplatform.google.com/about/analytics/terms/jp/" target="_blank" rel="noopener noreferrer" class="transition duration-500 border-b-2 border-gray-300 transform hover:border-b-2 hover:border-black">詳しくはこちら</a>、または<a href="https://policies.google.com/technologies/partner-sites?hl=ja" target="_blank" rel="noopener noreferrer" class="transition duration-500 border-b-2 border-gray-300 transform hover:border-b-2 hover:border-black">こちらをクリックしてください。</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第12条（プライバシーポリシーの変更）</h2>
      <p class="pl-4">1.本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。</p>
      <p class="pl-4">2.当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。</p>
    </div>
    <div class="mt-6">
      <h2 class="font-bold lg:text-20px md:text-40px">第13条（お問い合わせ窓口）</h2>
      <p class="pl-4">1.本ポリシーに関するお問い合わせは，下記の窓口までお願いいたします。</p>
      <p class="pl-8">Health Seed(ヘルスシード)相談窓口</p>
      <p class="pl-8">Eメールアドレス：health.seed.site@gmail.com</p>
    </div>
  </div>
</main>
@endsection

@section('footer')
  @include('components.footer')
@endsection