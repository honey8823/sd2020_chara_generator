# sd2020_chara_generator
セブンスドラゴン2020のキャラシートジェネレータ

うちのこタイムラインを「セブンスドラゴン2020系」「キャラシート」の機能に特化したやつ

## ざっくり環境

* Linux
* Apache
* MySQL5.6系
* PHP7系
	* codeigniter
* jquery
* AdminLTE

## ソースの構造

うちのこTLのサーバーに同居するための構造になっています
主なディレクトリやファイルを抜粋

* sd2020cg
	* application `codeigniterのapplication`
		* config `設定全般`
		* controllers `コントローラ`
		* helpers `ヘルパー`
		* libraries `ライブラリ`
		* views `テンプレート`
	* system `codeigniterのsystem。特に中身はいじってない`
* www `ルートディレクトリ、うちのこTLのwwwと同一`
	* sd2020
		* css `CSS`
		* js `JS`
		* img `画像`
		* index.php `本体`
		* .htaccess `URL調整用`
* doc `このreadme以外のドキュメント`
* README.md `これ`

## 各種仕様

気が向き次第wikiページにまとめます


