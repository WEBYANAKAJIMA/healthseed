<p>お問い合せいただき誠にありがとうございます。</p>
<p>お問い合わせ頂いた内容は下記の通りです。</p>
<p>ご確認ください。</p>
<p>※２～３営業日内に説明会についての詳細をご連絡致します。</p>
<div style="width: 800px; border-top: dashed 1px black; border-bottom: dashed 1px black; padding-bottom: 30px;">
  <p>【説明会実施依頼内容】</p>
  <table border="1" cellpadding="5px" style="word-break : break-all;">
    <tr>
      <td width="265px">氏名</td>
      <td width="500px">{{$name}}</td>
    </tr>
    <tr>
      <td width="265px">メールアドレス</td>
      <td width="500px">{{$email}}</td>
    </tr>
    <tr>
      <td width="265px">説明会の形式</td>
      @if ($meetingType === 0)
        <td width="500px">対面</td>
      @else
        <td width="500px">リモート</td>
      @endif
    </tr>
    <tr>
      <td width="265px">お問合せ内容</td>
      <td width="500px">{{$contactContent}}</td>
    </tr>
  </table>
</div>
<p>もし内容に間違いがある場合、お手数ですが文末の連絡先までご一報ください。</p>
<p>よろしくお願い致します。</p>
<p>連絡先：health.seed.site@gmail.com</p>

