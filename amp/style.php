/* ページ全体 */

body {
  font-family: 'メイリオ','Hiragino Kaku Gothic Pro',sans-serif;
  line-height: 1.5;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 10px;
}


/* 記事 */

.kiji:after {
  content: "";
  display: block;
  clear: both;
}

.kiji h1 {
  font-size: 36px;
}

.kiji h1 amp-img {
  margin-left: 6px;
}

.kiji h2 {
  position: relative;
  padding-left: 32px;
  margin-top: 40px;
  border-bottom: solid 3px #bac6cb;
}

.kiji h2:before {
  position: absolute;
  left: 0px;
  top: 3px;
  content: '\f14a';
  color: #bac6cb;
  font-family: 'FontAwesome';
  font-size: 28px;
  line-height: 1;
}

.kiji h3 {
  margin-top: 25px;
  padding-left: 10px;
  border-left: solid 10px #bac6cb;
}


@media (max-width: 599px) {
  .kiji h1 {
    font-size: 24px;
  }

  .kiji h1 amp-img {
    max-width: 20px;
    max-height: 20px;
    margin-left: 4px;
  }

  .kiji h2 {
    font-size: 18px;
  }

  .kiji h3 {
    padding-left: 6px;
    font-size: 15px;
  }

  .kiji p{
    font-size: 14px;
  }
}


/* 記事の投稿日・更新日 */

.kiji-date {
  margin-bottom: 20px;
  color: #666666;
  font-size: 12px;
}

.kiji-date .fa {
  font-size: larger;
}


/* カテゴリーとタグ */

.kiji-cat:after {
  content: '';
  display: block;
  clear: both;
}

.kiji-cat ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.kiji-cat li {
  float: left;
}

.kiji-cat li a {
  display: inline-block;
  margin-right: 5px;
  margin-bottom: 2px;
  padding: 3px 5px;
  border-radius: 2px;
  background-color: #98c7da;
  color: #ffffff;
  font-size: 12px;
  text-decoration: none;
}

.kiji-cat li a:hover {
  opacity: 0.8;
}

.kiji-cat li a[rel='tag'] {
  background-color: #98b4da;
}


/* ヘッダー */

header {
  border-bottom: solid 10px #e5e5e5;
  margin-bottom: 20px;
}

.site {
  padding: 10px;
  font-family: 'Syncopate', sans-serif;
  font-size: 30px;
}

.site a {
  color: #666666;
  text-decoration: none;
}

.site amp-img {
  vertical-align: -11px;
}


/* フッター */

footer {
  background-color: #e5e5e5;
}

.copyright {
  padding: 15px 0;
  color: #666666;
  font-family: 'Syncopate', sans-serif;
  font-size: 14px;
}

/* 画像 */

.amp-wp-enforced-sizes {
  max-width: 100%;
}

.aligncenter {
  display: block;
  margin-top: 30px;
  margin-bottom: 30px;
  margin-left: auto;
  margin-right: auto;
}

.alignleft {
  float: left;
  margin-top: 10px;
  margin-bottom: 20px;
  margin-right: 30px;
}

.alignright {
  float: right;
  margin-top: 10px;
  margin-bottom: 20px;
  margin-left: 30px;
}

@media ( max-width: 599px ) {
  .alignleft, .alignright {
    float: none;
    display: block;
    margin-top: 30px;
    margin-bottom: 30px;
    margin-left: auto;
    margin-right: auto;
  }
}

.wp-caption-text {
  margin-top: 5px;
  color: #666666;
  font-size: 14px;
  text-align: center;
}

figure {
  margin:0;
}


/* ナビゲーションメニュー */

header .container {
  position: relative;
}

.menubtn {
  position: absolute;
  top: 15px;
  right: 10px;
  border: none;
  background-color: transparent;
  color: #888888;
  cursor: pointer;
}

.menubtn:focus {
  outline: none;
}

.menubtn span {
  font-size: 30px;
}

#mymenu {
  background-color: rgba( 0,0,0,0.8 );
  text-align: center;
}

#mymenu ul {
  margin: 0;
  padding: 0;
  list-style: none;
  border-top: dotted 1px #ffffff;
}

#mymenu li a {
  display: block;
  padding: 20px 5px;
  border-bottom: dotted 1px #ffffff;
  color: #ffffff;
  font-size: 16px;
  text-decoration: none;
}

#mymenu li a:hover {
  background-color: rgba( 0, 0, 0, 0.5 );
}

#mymenu .container {
  padding-top: 50px;
}

#mymenu h2 {
  margin-top: 0;
  color: #ffffff;
}

#mymenu .menubtn {
  color: #ffffff;
}

/* シェアボタン */
.share {
  display: flex;
  width: 100%;
  height: 44px;
  margin: 40px 0;
}

.share amp-social-share {
  background-size: 30px 30px;
}


/* 関連記事 */

.related {
  margin: 40px 0;
  padding: 10px;
  border: solid 1px #dddddd;
  background-color: #f6f6f6;
}

.related h2 {
  padding-left: 7px;
  border-left: solid 8px #bac6cb;
  font-size: 20px;
  font-weight: normal;
}

.related-post {
  width: 150px;
  vertical-align: top;
}

.related-post a {
  display: block;
  color: #000000;
  text-decoration: none;
}

.related-post h3 {
  margin: 0;
  font-size: 14px;
  font-weight: normal;
  white-space: normal;
}

/* アレンジ：ヘッダー画像 */

.kiji-header {
  height: 500px;
  margin-bottom: 40px;
  border: none;
  background-image:
  linear-gradient( rgba( 0, 0, 0, 0.5 ), rgba( 0, 0, 0, 0.5 ) ),
  url( <?php the_post_thumbnail_url( 'fullsize' ); ?>);
  background-position: center;
  background-size: cover;
}

.kiji-header .container {
  padding-top: 300px;
}

.kiji-header h1 {
  margin: 20px 0 10px;
  color: #ffffff;
}

.kiji-header .kiji-date {
  color: #ffffff;
}

.page-header {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100%;
  border:none;
}

.page-header .site a {
  color: #ffffff;
}

.page-header .menubtn {
  color: #ffffff;
}


/* アレンジ：記事のタイトル */

@media ( max-width: 450px ) {
  .kiji-header amp-fit-text {
    height: 80px;
  }
}

/* アレンジ：ナビゲーション */

amp-sidebar#mymenu {
  width: 250px;
}

amp-sidebar#mymenu li a {
  text-align: left;
}


/* アレンジ：２段組 */

@media ( max-width: 1299px ) {
  .side-wrapper {
    display: none;
  }
}

@media ( min-width: 1300px ) {

  .page-header .menubtn {
    display: none;
  }

  .wrapper {
    display: flex;
  }

  .main-wrapper {
    flex: 1;
    position: relative;
  }

  .side-wrapper {
    width: 340px;
    padding: 20px;
    box-sizing: border-box;
    background-color: #eeeeee;
  }

  .side-wrapper h2 {
    margin: 0 0 10px;
    border-bottom: solid 2px #888888;
    color: #666666;
    font-size: 18px;
  }

  .side-nav ul {
    margin: 0 0 30px;
    padding: 0;
    list-style: none;
  }

  .side-nav li a {
    display: block;
    margin-bottom: 5px;
    padding: 10px;
    background-color: #222222;
    color: #ffffff;
    font-size: 14px;
    text-decoration: none;
  }

  .side-nav li a:hover {
    opacity: 0.8;
  }

  .side-recent ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .side-recent li a {
    display: flex;
    padding: 5px 0;
    border-bottom: dotted 1px #888888;
    text-decoration: none;
  }

  .side-recent li a:hover {
    background-color: #ffffff;
  }

  .side-recent amp-img {
    max-width: 60px;
    max-height: 60px;
    margin-right: 10px;
  }

  .side-recent h3 {
    margin: 0;
    color: #000000;
    font-size: 14px;
    font-weight: normal;
  }

}

.kiji-header .container {
  padding-top: ;
}

.related-post {
  border: solid 1px #aaaaaa;
  flex: 0 0 150px;
}

.related-post h3 {
  padding: 5px 5px 10px;
}

amp-carousel > div {
  display: flex;
}

.amp-carousel-button {
  background-image: none;
  text-align: center;
}

.amp-carousel-button-prev:before {
  content: '\f053';
  color: #dddddd;
  font-family: 'FontAwesome';
  font-size: 23px;
}

.amp-carousel-button-next:before {
  content: '\f054';
  color: #dddddd;
  font-family: 'FontAwesome';
  font-size: 23px;
}
