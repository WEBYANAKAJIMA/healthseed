<p>以下説明会実施依頼を受付ました。</p>

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
