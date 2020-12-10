<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./scss/reset.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
  <link rel="stylesheet" href="./scss/style.css">
  <script src="./js/jquery-2.1.4.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <title>ユアコーディング</title>
</head>

<body>
  <header>
    <section class="header">
      <div class="header__left">
        <img src="./img/logo.png" alt="ロゴ">
        <a href="#">ユアコーディング</a>
      </div>
      <div class="header__center">
        <ul class="header__list">
          <li><a href="#features">特徴</a></li>
          <li class="header__list--middle"><a href="#price">価格</a></li>
          <li><a href="#contact">お問い合わせ</a></li>
        </ul>
      </div>
      <div class="header__right">
        <a href="#contact">お問い合わせ</a>
      </div>
      <div class="hamburger__menu">
        <div class="hamburger__list">
          <a class="hamburger__item" href="#features">特徴</a>
          <a class="hamburger__item" href="#price">価格</a>
          <a class="hamburger__item" href="#contact">お問い合わせ</a>
        </div>
      </div>
      <div class="menu">
        <div class="menu__btn">
          <div class="menu__btn--top bar"></div>
          <div class="menu__btn--center bar"></div>
          <div class="menu__btn--bottom bar"></div>
        </div>
        <p class="menu__text text">MENU</p>
      </div>
      <div class="menu__musk"></div>
    </section>
  </header>

  <main>
    <section class="top">
      <div class="top__container">
        <div class="top__item">
          <div class="top__text">
            <p class="top__text--top">コーディングの手間を<br>最小に、デザインに注力<br>する助けに</p>
            <p class="top__text--bottom">ユアコーディングはコーディングに<br>特化したフリーランス<br>デザインに注力されたい方の<br>助けになります</p>
          </div>
          <div class="top__btn">
            <a href="#contact">お問い合わせ</a>
          </div>
        </div>
        <img data-aos="zoom-in" data-aos-duration="1500" class="top__img" src="./img/main.png" alt="main-img">
      </div>
    </section>

    <section id="features" class="features">
      <div class="features__container">
        <p class="features__mainTitle">ユアコーディング3つの特徴</p>
        <p class="features__subTitle">FEATURES</p>
        <div class="features__list">
          <p class="features__title">高速コーディング</p>
          <div class="features__item1">
            <img data-aos="fade-up" data-aos-duration="1500" src="./img/feature01.png" alt="feature1">
            <div class="features__text">
              <p data-aos="fade-up" data-aos-duration="1500" class="features__text--top">コーディングに特化したフリーランスのため、<br>スピード感を持った開発が可能。</p>
              <p data-aos="fade-up" data-aos-duration="1500" class="features__text--bottom">
                開発は常にスピードとの勝負です。<br>ユアコーディングはコーディングに特化しているため、<br>素早く納品することで、クライアントがデザインに注力<br>する助けとなります。</p>
            </div>
          </div>
          <p class="features__title">高品質</p>
          <div class="features__item2">
            <img data-aos="fade-up" data-aos-duration="1500" src="./img/feature02.png" alt="feature2">
            <div class="features__text">
              <p data-aos="fade-up" data-aos-duration="1500" class="features__text--top">正しいマークアップで、<br>内部SEOに強いコーディングを<br>デフォルトで行います。</p>
              <p data-aos="fade-up" data-aos-duration="1500" class="features__text--bottom">
                ユアコーディングでは、「予測しやすい」「再利用しやすい」<br>「保守しやすい」「拡張しやすい」と言った設計をもとに<br>きちんとコーディングを行うため、納品後も安心です。</p>
            </div>
          </div>
          <p class="features__title">迅速なレスポンス</p>
          <div class="features__item3">
            <img data-aos="fade-up" data-aos-duration="1500" src="./img/feature03.png" alt="feature3">
            <div class="features__text">
              <p data-aos="fade-up" data-aos-duration="1500" class="features__text--top">原則いただいたメッセージは、<br>業務時間内であれば6時間以内に お返しいたします。</p>
              <p data-aos="fade-up" data-aos-duration="1500" class="features__text--bottom">
                連絡を返さないフリーランスが多い中、<br>ユアコーディングでは定期的な進捗報告など、<br>社会人としての基本を踏まえて仕事を行なって<br>おります。</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="price" class="price">
      <div class="price__container">
        <p class="price__mainTitle">価格</p>
        <p class="price__subTitle">PRICE</p>
        <table data-aos="fade-up" data-aos-duration="2500" class="price__inner">
          <tbody class="price__list">
            <tr class="price__item">
              <td class="price__td1"><p>HTMLコーディングトップページ</p></td>
              <td class="price__td2"><p>30.000円〜</p></td>
            </tr>
            <tr class="price__item">
              <td class="price__td1"><p>HTMLコーディング下層1ページ</p></td>
              <td class="price__td2"><p>10.000円〜</p></td>
            </tr>
            <tr class="price__item">
              <td class="price__td1"><p>HTML+WordPressトップページ</p></td>
              <td class="price__td2"><p>55.000円〜</p></td>
            </tr>
            <tr class="price__item">
              <td class="price__td1"><p>HTML+WordPress下層1ページ</p></td>
              <td class="price__td2"><p>15.000円〜</p></td>
            </tr>
          </tbody>
        </table>
        <p class="price__attention">＊詳細な価格はページや仕様によって異なります</p>
      </div>
    </section>

    <section class="faq">
      <div class="faq__container">
        <p class="faq__mainTitle">よくある質問</p>
        <p class="faq__subTitle">FAQ</p>
        <dl data-aos="fade-up" data-aos-duration="1500" class="faq__inner">
          <dt class="faq__heading1">デザインから一貫してお願いすることは可能でしょうか</dt>
          <dd class="faq__text1 open">ユアコーディングはコーディングに特化したサービスですので、デザインからお受けすることは基本的にありません。<br>ただデザインを行う際は提携しているデザイナーと連携して対応させていただきますので、別途ご連絡ください。</dd>
          <dt class="faq__heading2">WordPressのカスタマイズをお願いすることも可能でしょうか？</dt>
          <dd class="faq__text2">可能です。ただECサイトなどの場合は構築難易度や工数の関係で綿密にヒアリングさせていただきたく思います。</dd>
          <dt class="faq__heading3">コーディングのスピード感が知りたい</dt>
          <dd class="faq__text3">HTMLレスポンシブ込み5ページで1週間、10ページで2週間、WordPressサイト5ページで2週間、10ページで3週間が目安に なります。</dd>
        </dl>
      </div>
    </section>

    <section class="blog">
      <div class="blog__container">
        <p class="blog__mainTitle">ブログ</p>
        <p class="blog__subTitle">BLOG</p>
        <div data-aos="fade-up" data-aos-duration="1500" class="blog__list">
          <div class="blog__item">
            <img src="./img/blog-item1.jpg" alt="blog-img">
            <p class="blog__text">サイトをリニューアルオープンしました。</p>
            <p class="blog__date">2020.01.23</p>
          </div>
          <div class="blog__item">
            <img src="./img/blog-item2.jpg" alt="blog-img">
            <p class="blog__text">WebサイトでSEO内部施策に適したコー ディングでどれぐらいサイトが早くなるの か検証してみました</p>
            <p class="blog__date">2020.01.24</p>
          </div>
          <div class="blog__item">
            <img src="./img/blog-item3.jpg" alt="blog-img">
            <p class="blog__text">ユアコーディングではデザイナーの方を 広く募集しています。</p>
            <p class="blog__date">2020.01.25</p>
          </div>
        </div>
      </div>
    </section>

    <section class="works">

        <p class="works__mainTitle">制作実績</p>
        <p class="works__subTitle">WORKS</p>
        <div class="works__container swiper-container">
        <div class="swiper-wrapper">
          <div class="works__item swiper-slide">
            <img src="./img/works-item2.jpg" alt="works-img">
            <p class="works__text">株式会社サンプル様採用サイトのコーデ ィングを行いました！</p>
            <p class="works__menu">採用技術：jQuery,Bootstrap4<br>実装期間：2週間<br>担当コーダー：石井</p>
          </div>

          <div class="works__item swiper-slide">
            <img src="./img/works-item1.jpg" alt="works-img">
            <p class="works__text">コーディングカンファレンスのイベント LPの制作を行いました！</p>
            <p class="works__menu">採用技術：jQuery,WordPress<br>実装期間：4週間<br>担当コーダー：石井</p>
          </div>
          <div class="works__item swiper-slide">
            <img src="./img/works-item2.jpg" alt="works-img">
            <p class="works__text">株式会社サンプル様採用サイトのコーデ ィングを行いました！</p>
            <p class="works__menu">採用技術：jQuery,Bootstrap4<br>実装期間：2週間<br>担当コーダー：石井</p>
          </div>
          <div class="works__item swiper-slide">
            <img src="./img/works-item3.jpg" alt="works-img">
            <p class="works__text">株式会社サンプル様通販サイトのコーデ ィングを行いました！</p>
            <p class="works__menu">採用技術：jQuery,Bootstrap4<br>実装期間：6週間<br>担当コーダー：石井</p>
          </div>
          <div class="works__item swiper-slide">
            <img src="./img/works-item2.jpg" alt="works-img">
            <p class="works__text">株式会社サンプル様採用サイトのコーデ ィングを行いました！</p>
            <p class="works__menu">採用技術：jQuery,Bootstrap4<br>実装期間：2週間<br>担当コーダー：石井</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="contact__container">
        <p class="contact__mainTitle">お問い合わせ</p>
        <p class="contact__subTitle">CONTACT</p>
        <p class="contact__text">コーディングの人出が足りないとき、<br>あなたの力になります</p>
        <div data-aos="fade-up" data-aos-duration="1500" class="contact__inner">
          <div class="contact__heading">
            <p class="contact__heading--left">お名前</p>
            <p class="contact__heading--right">必須</p>
          </div>
          <p id="textSection1" class="alert1">※未入力</p>
          <input id="text1" type="text">
          <div class="contact__heading">
            <p class="contact__heading--left">メールアドレス</p>
            <p class="contact__heading--right">必須</p>
          </div>
          <p id="textSection2" class="alert2">※未入力</p>
          <input id="text2" type="text">
          <div class="contact__heading">
            <p class="contact__heading--left">お問い合わせ内容</p>
            <p class="contact__heading--right">必須</p>
          </div>
          <p id="textareaSection" class="alert3">※未入力</p>
          <textarea id="textarea"></textarea>
          <div class="contact__btn">
            <a class="submit" href="#">送信する</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <section class="footer">
      <p class="footer__text">©ユアコーディング, All Rights Reserved.</p>
    </section>
  </footer>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>

