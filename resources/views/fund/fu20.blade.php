<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="all">
	<!-- <meta name="robots" content="noindex"> -->
	<title>XXXXXX</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-------- ogp -------->

	<!-------- /ogp -------->

	<link rel="shortcut icon" href="">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="canonical" href="">
	<meta http-equiv="content-style-type" content="text/css">
	<meta http-equiv="content-script-type" content="text/javascript">
	
	<!-- css -->
	<link type="text/css" rel="stylesheet" href="/assets/css/common/reset.css">
	<link type="text/css" rel="stylesheet" href="/assets/css/common/common.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link type="text/css" rel="stylesheet" href="/assets/css/fund/fu20.css">

	<!-- js -->
	<script type="text/javascript" src="/assets/js/common/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="/assets/js/common/include.js"></script>
	<script type="text/javascript" src="/assets/js/common/common.js" defer></script>
	<script type="text/javascript" src="/assets/js/fund.js" defer></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
		$(function() {
			var slide = $('.slide');
			slide.slick({
				'arrows': false,
			});
			document.querySelectorAll('.thumbnail li').forEach(function (thumbnail, i) {
				thumbnail.addEventListener('click', function () {
					slide.slick('slickGoTo', i, false);
				});
			});
		});
	</script>

</head>
<body>
	<header id="header" class="member_none"></header><!-- classでスイッチ　member_on member_none -->

	<main class="FU10">
		<div class="breadcrumbs">
			<ul itemscope itemtype="https://schema.org/BreadcrumbList">
				<!-- InstanceBeginEditable name="breadcrumbs" -->
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<meta itemprop="position" content="1" />
					<a itemprop="item" href="/">
						<span itemprop="name">不動産クラウドファンディングの彩-sai-トップ</span>
					</a>
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<meta itemprop="position" content="2" />
					<a itemprop="item" href="/fund/fu10">
						<span itemprop="name">ファンド一覧</span>
					</a>
				</li>
				<!-- InstanceEndEditable -->
				<li>アルファアセットファンド学芸大学　第2回</li>
			</ul>
		</div>
		<div class="mv">
			<div class="inner">
				<h1 class="mincho">
					アルファアセットファンド学芸大学　第2回
				</h1>
			</div>
		</div>
		<div class="content">
			<div class="main">
				<section class="img">
					<ul class="slide">
						<li>
							<img src="/assets/img/fund/items/item1_1.jpg" alt="">
						</li>
						<li>
							<img src="/assets/img/fund/items/item1_2.jpg" alt="">
						</li>
						<li>
							<img src="/assets/img/fund/items/item1_3.jpg" alt="">
						</li>
						<li>
							<img src="/assets/img/fund/items/item1_4.jpg" alt="">
						</li>
					</ul>
					<ul class="thumbnail">
						<li>
							<img src="/assets/img/fund/items/item1_1.jpg" alt="">
						</li>
						<li>
							<img src="/assets/img/fund/items/item1_2.jpg" alt="">
						</li>
						<li>
							<img src="/assets/img/fund/items/item1_3.jpg" alt="">
						</li>
						<li>
							<img src="/assets/img/fund/items/item1_4.jpg" alt="">
						</li>
					</ul>
				</section>
				<section class="text">
					<input type="radio" name="tab" id="tab1" checked>
					<input type="radio" name="tab" id="tab2" checked>
					<input type="radio" name="tab" id="tab3" checked>
					<input type="radio" name="tab" id="tab4" checked>
					<input type="radio" name="tab" id="tab5" checked>
					<input type="radio" name="tab" id="tab6" checked>
					<div class="tabs">
						<label for="tab1">
							物件
						</label>
						<label for="tab2">
							物件詳細
						</label>
						<label for="tab3">
							想定収支<br>スキーム
						</label>
						<label for="tab4">
							リスク
						</label>
						<label for="tab5">
							営業者
						</label>
						<label for="tab6">
							FAQ
						</label>
					</div>
					<div class="contents">
						<div class="tab summary">
							<img src="/assets/img/fund/summary.jpg" alt="">
						</div>
						<div class="tab property">
							<h3>
								物件概要
							</h3>
							<dl>
								<dt>
									物件名称
								</dt>
								<dd>
									アールヴェール学芸大学103
								</dd>
								<dt>
									所在地
								</dt>
								<dd>
									世田谷区野沢3丁目30-15
								</dd>
								<dt>
									交通
								</dt>
								<dd>
									東急田園都市線「駒澤大学駅」徒歩15分<br>
									東急東横線「学芸大学駅」徒歩16分
								</dd>
							</dl>
							<div class="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.8847959149716!2d139.6703694152574!3d35.630566480206205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f4bf8f9edeb5%3A0xe879b07a3669ad20!2z44CSMTU0LTAwMDMg5p2x5Lqs6YO95LiW55Sw6LC35Yy66YeO5rKi77yT5LiB55uu77yT77yQ4oiS77yR77yV!5e0!3m2!1sja!2sjp!4v1642503516652!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
							<h3>
								土地
							</h3>
							<dl>
								<dt>
									地目
								</dt>
								<dd>
									宅地
								</dd>
								<dt>
									面積
								</dt>
								<dd>
									2449.65㎡ （登記簿記録による）
								</dd>
								<dt>
									権利
								</dt>
								<dd>
									所有権（敷地権）
								</dd>
							</dl>
							<h3>
								建物
							</h3>
							<dl>
								<dt>
									構造
								</dt>
								<dd>
									鉄筋コンクリート造　陸屋根　地上3階建（1階部分）
								</dd>
								<dt>
									床面積
								</dt>
								<dd>
									【専有部】74.08㎡
								</dd>
								<dt>
									築年月
								</dt>
								<dd>
									2001年5月
								</dd>
							</dl>
							<h3>
								法令
							</h3>
							<dl>
								<dt>
									用途地域
								</dt>
								<dd>
									第1種低層住居専用地域
								</dd>
								<dt>
									建ぺい率
								</dt>
								<dd>
									50％
								</dd>
								<dt>
									容積率
								</dt>
								<dd>
									150%
								</dd>
							</dl>
							<h3>
								賃貸借契約の概要
							</h3>
							<dl>
								<dt>
									貸主
								</dt>
								<dd>
									フジハウジング株式会社
								</dd>
								<dt>
									借主
								</dt>
								<dd>
									個人
								</dd>
								<dt>
									契約形態
								</dt>
								<dd>
									建物賃貸借契約
								</dd>
								<dt>
									現契約期間
								</dt>
								<dd>
									2020年5月31日~2022年5月30日
								</dd>
								<dt>
									賃料月額
								</dt>
								<dd>
									223,000円
								</dd>
								<dt>
									敷金
								</dt>
								<dd>
									446,000円
								</dd>
								<dt>
									契約更改の方法
								</dt>
								<dd>
									期間満了2ヶ月前までに借主から貸主に対し書面による解約申し入れがない場合 は、同条件にて2年間更新するものとし、以降同様に扱う。
								</dd>
								<dt>
									その他重要な事項
								</dt>
								<dd>
									借主は契約期間内であっても、正当事由がある場合は貸主に対し2ヶ月の予告期間 をもって文章により本契約の解約を申し入れることができる。ただし、2ヶ月分の賃料 相当額を貸主に支払うことによって直ちに解約することができる。
								</dd>
							</dl>
						</div>
						<div class="tab scheme">
							<h3>
								出資金の内訳
							</h3>
							<table>
								<tbody>
									<tr>
										<th colspan="2">建物</th>
									</tr>
									<tr>
										<td>物件価格</td>
										<td>48,000,000円</td>
									</tr>
									<tr>
										<td>物件価格</td>
										<td>48,000,000円</td>
									</tr>
									<tr>
										<td>物件価格</td>
										<td>48,000,000円</td>
									</tr>
									<tr>
										<td>物件価格</td>
										<td>48,000,000円</td>
									</tr>
								</tbody>
							</table>
							<h3>
								想定収支　（※運用期間中の想定数値）
							</h3>
							<table>
								<tbody>
									<tr>
										<th>項目</th>
										<th colspan="2">契約期間（半年間）の収支</th>
									</tr>
									<tr>
										<td rowspan="2">収入</td>
										<td>賃料収入</td>
										<td>0円</td>
									</tr>
									<tr>
										<td>合計①</td>
										<td>0円</td>
									</tr>
									<tr>
										<td rowspan="7">支出</td>
										<td>維持管理費</td>
										<td>0円</td>
									</tr>
									<tr>
										<td>修繕積立会</td>
										<td>0円</td>
									</tr>
									<tr>
										<td>公租公課</td>
										<td>0円</td>
									</tr>
									<tr>
										<td>火災保険料</td>
										<td>0円</td>
									</tr>
									<tr>
										<td>PMフィー</td>
										<td>0円</td>
									</tr>
									<tr>
										<td>税理士報酬</td>
										<td>0円</td>
									</tr>
									<tr>
										<td>その他</td>
										<td>0円</td>
									</tr>
									<tr>
										<td>合計②</td>
										<td colspan="2">0円</td>
									</tr>
									<tr>
										<td>分配原資</td>
										<td>①ー②</td>
										<td>0円</td>
									</tr>
								</tbody>
							</table>
							<h3>
								分配金の内訳
							</h3>
							<table>
								<tbody>
									<tr>
										<th colspan="3">分配金の内訳</th>
									</tr>
									<tr>
										<td colspan="2">分配原資</td>
										<td>0円</td>
									</tr>
									<tr>
										<td rowspan="2">優先支出分配金（お客様）</td>
										<td>全体336口</td>
										<td>0円</td>
									</tr>
									<tr>
										<td>1口あたり</td>
										<td>0円</td>
									</tr>
									<tr>
										<td colspan="2">劣後出資分配金（営業者）</td>
										<td>0円</td>
									</tr>
								</tbody>
							</table>
							<p>
								※実際にお客様にお支払いする分配金は、源泉徴収税20.42%（所得税＋復興特別所得税）を控除した金額となります。
							</p>
							<h3>
								スキーム図（例）
							</h3>
							<p>
								割合はかわることがあります
							</p>
							<img src="/assets/img/fund/scheme_01.png" alt="">
							<img src="/assets/img/fund/scheme_02.png" alt="">
						</div>
						<div class="tab risk">
							<h3>
								1. 出資金の元本割れリスク
							</h3>
							<p>
								本商品は、投資家の皆様の出資金について元本保証をするものではありません。本商品の収益性、利益の配当や財産の分配も保証されたものではない為、以下に記載の各リスクのほか、「契約成立前書面」に記載したリスクにより投資家の出資金について元本が損失するおそれがあります。
							</p>
							<h3>
								2. 本事業者の信用リスク
							</h3>
							<p>
								本事業者が破綻等したことにより事業継続が困難となった場合、本契約は終了します。匿名組合勘定による分別管理は信託法第34条の分別管理と異なり、本事業者が破綻等した場合には、保全されないので、出資金全額が返還されないおそれがあります。
							</p>
							<h3>
								3. 不動産のリスク
							</h3>
							<p>
								経済環境や不動産需給関係の影響あるいは、頭書物件の価値の毀損によっては、運用期間中において空室が発生する場合があるほか、頭書物件を想定する時期･条件で売却できず、収益に悪影響を与えるおそれがあります。
							</p>
							<h3>
								4. その他のリスク
							</h3>
							<p>
								以下の事象等により不動産価格が減少または当該不動産に付随する支払が増大し、元本割れするリスクがございます。<br>
								<br>
								・法令、税制及び政府による規制変更によるリスク<br>
								・自然災害、人為的災害により不動産が滅失・毀損・劣化するリスク<br>
								・経年劣化、隠れたる瑕疵の発見などによる不動産的価値の下落による環境リスク<br>
								・本不動産の工作物などが第三者に損害を与える場合には、本不動産の所有者として損害賠償義務を負担する可能性あるリスク<br>
								・本契約の解除又は譲渡に制限があることに関するリスク<br>
								・匿名組合員は営業に関する指図ができないことに関するリスク
							</p>
						</div>
						<div class="tab sales">
							<table>
								<tbody>
									<tr>
										<th>商号</th>
										<td>株式会社フジハウジング</td>
									</tr>
									<tr>
										<th>登録</th>
										<td>不動産特定共同事業許可：XXXXXXXXXX<br>
							宅地建物取引業免許：XXXXXXXXXX<br>
							特定建設業許可：XXXXXXXXXX<br>
							一級建築士事務所登録：XXXXXXXXXX<br>
							一般不動産投資顧問業登録：XXXXXXXXXX<br>
							第二種金融商品取引業登録：XXXXXXXXXX</td>
									</tr>
									<tr>
										<th>所在地</th>
										<td>〒346-0016　埼玉県久喜市久喜東 2丁目 4-1</td>
									</tr>
									<tr>
										<th>代表者</th>
										<td>藤田 田</td>
									</tr>
									<tr>
										<th>電話番号</th>
										<td>0480-26-4568</td>
									</tr>
									<tr>
										<th>主な事業</th>
										<td>不動産開発・不動産ソリューション・注文住宅請負・建売分譲・不動産流通</td>
									</tr>
									<tr>
										<th>資本金</th>
										<td>XXX百万円</td>
									</tr>
									<tr>
										<th>設立日</th>
										<td>1964年5月25日</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab faq">
							<ul>
								<li>
									<h3>
										出資金はいつ振り込めばいいでしょうか？
									</h3>
									<div class="answer">
										<p>
											募集終了日の翌日にメールにて通知される結果において「当選」が確定してからのご入金をお願いします。 （抽選結果通知前の出資金のお預かりはしておりません。もし誤って先に出資金をお振込みいただいた場合は、ご登録口座へご返金させていただきます。その際の振込手数料はお客様負担となります。また処理の都合上、ご返金までに数日お時間がかかる場合がございますので予めご了承ください。）
										</p>
									</div>
								</li>
								<li>
									<h3>
										出資金以外に費用はかかりますか？
									</h3>
									<div class="answer">
										<p>
											出資金の入金時の手数料はお客様負担になります。
										</p>
									</div>
								</li>
								<li>
									<h3>
										投資申込を解約したいのですが可能ですか。
									</h3>
									<div class="answer">
										<p>
											お客様は、「契約成立時書面」をダウンロードした日を起算日として８日間が経過するまでの間、書面により当社に通知いただくことで、契約の解除を行うことができます。 具体的な手続きについてはTOPページ下部の「<a href="">クーリングオフ（契約解除）について</a>」をご参照下さい。<br>
											<br>
											その他お手続きに関するご質問は、「<a href="">こちら</a>」をご参照ください。
										</p>
									</div>
								</li>
								<li>
									<h3>
										当選結果はいつ頃確認できますか
									</h3>
									<div class="answer">
										<p>
											当選の場合は、募集終了日の翌日正午12：00までに当選者の方へマイページ上のメッセージまたはメールにて通知いたします。また当選結果についてはマイページの「抽選申込履歴一覧」でもご確認いただけます。
										</p>
									</div>
								</li>
								<li>
									<h3>
										当選者からキャンセルが出た場合、再抽選はありますか。
									</h3>
									<div class="answer">
										<p>
											抽選の結果「落選」となった場合においても、ファンドの成立日までに当選者からのキャンセルがあればご応募いただいた中から事務局にて「再抽選」を実施いたします。再抽選は「当選」した場合のみ、その旨をメールにて通知をさせていただきます。
										</p>
									</div>
								</li>
								<li>
									<h3>
										その他、留意しておく事項はありますか。
									</h3>
									<div class="answer">
										<p>
											募集期間中にお申込みいただいたすべてのお申込みの中から募集総額を割り振りする都合上、複数口お申込みいただいても一部のみ当選となる場合があります。また、抽選方式は抽選により当選者を抽出いたしますので、お申込みが完了していても「落選」する場合がありますので予めご了承ください。
										</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</div>
			<aside class="aside">
				<div class="detail">
					<h2>
						ファンド概要
					</h2>
					<dl>
						<dt>
							予定分配率
						</dt>
						<dd>
							<span class="num">3.8</span><span class="unit">%</span>
						</dd>
						<dt>
							運用期間
						</dt>
						<dd>
							<p>
								<span class="num">6</span><span class="unit">ヶ月</span>
								<br>
								予定開始日：2021年10月31日<br>
								予定終了日：2021年10月31日
							</p>
						</dd>
						<dt>
							配当日
						</dt>
						<dd>
							2021年10月31日
						</dd>
						<dt>
							募集種別
						</dt>
						<dd>
							匿名組合型
						</dd>
						<dt>
							募集期間
						</dt>
						<dd>
							開始日：2021年10月31日　12:00<br>
							予定終了日：2021年12月31日　17:59
						</dd>
					</dl>
				</div>
				<div class="requireState">
					<h2>
						募集状況
					</h2>
					<div class="status">
						<p class="meter"><span class="scale">56</span></p>
					</div>
					<dl>
						<dt>
							募集金額
						</dt>
						<dd>
							19,600,000円
						</dd>
						<dt>
							現在申込み金額
						</dt>
						<dd>
							0円
						</dd>
						<dt>
							残り日数
						</dt>
						<dd>
							0日
						</dd>
						<dt>
							募集方式
						</dt>
						<dd>
							抽選式
						</dd>
						<dt>
							投資単位
						</dt>
						<dd>
							100,000円／1口
						</dd>
						<dt>
							一人当たり<br>
							投資可能金額
						</dt>
						<dd>
							300,000円／3口以上<br>
							1,000,000円／10口以下
						</dd>
					</dl>
				</div>
				<div class="apply">
					<h2>
						申込
					</h2>
					<div class="form">
						<form action="">
							<div class="row">
								<div class="title">
									申込口数
								</div>
								<div class="input select">
									<select name="" id="">
										<option value="">-</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
								<span class="unit">
									口
								</span>
							</div>
							<div class="row">
								<div class="title">
									出資金額
								</div>
								<div class="input">
									<input type="text">
								</div>
								<span class="unit">
									円
								</span>
							</div>
							<div class="links">
								<ul>
									<li>
										<a>契約成立前書面（PDF）</a>
									</li>
									<li>
										<a>電子取引に係る重要事項説明書（PDF）</a>
									</li>
								</ul>
								<p class="notice">
									上記書類を必ずご確認ください
								</p>
							</div>
						</form>
						<button class="submit disabled">
							抽選申込をする
						</button>
					</div>
				</div>
			</aside>
		</div>
	</main>
<div class="alert">
	<div class="box">
		<div class="close closeButton"></div>
		<h2>
			お申込み確認
		</h2>
		<p>下記の内容でお申込みしてよろしいですか？</p>
		<dl>
			<dt>
				申込口数
			</dt>
			<dd>
				10 口
			</dd>
			<dt>
				出資金額
			</dt>
			<dd>
				1,000,000 円
			</dd>
		</dl>
		<div class="buttons">
			<span class="close">キャンセル</span>
			<a href="/fund/fu31">はい</a>
		</div>
	</div>
</div>
	<footer id="footer"></footer>
</body>
</html>
