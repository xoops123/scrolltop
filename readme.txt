 * @file ScrollTop.class.php
 * @package For legacy Cube Legacy 2.2
 * @version $Id: ScrollTop.class.php ver0.01 2013/8/14  00:00:00 marine  $

2013/8/14

これは、ページをスクロールした際にトップに戻るボタンを表示させるプリロードです。
jQueryのプラグインを利用して、少しスクロールした時に右下にボタンが現れるように設定しています。
トップに戻る際は、画面右側に出現した画像（キューブ君）をクリックするとスルスルっとスムースにスクロールして戻ります。

preload フォルダにある ScrollTop.class.php ファイルをFTPにてサイトのXOOPSルートにある preload ディレクトリにコピーしてください。
common フォルダにある scrolltop フォルダをFTPにてサイトのXOOPSルートにある common ディレクトリにコピーしてください。

これで、どのテーマを利用しているときでもスムーススクロールが利用できます。
（注：テーマが同様の機能を実装している場合やjavascriptによるウィンドウの制御などを行っている場合は、本プリロードの機能が効かないこともあります。）


なお、このプリロードでは、サイトのルートにXOOPSがインストールされている場合を想定して、画像のパスを設定していますが、サブディレクトリ等にXOOPSをインストールして運用されている場合は、/common/scrolltop/scrolltopcontrol.js の１２行目の src=" 以下をご利用になるサイトに合わせて記述変更を行ってください。

１２行目
	controlHTML: '<img src="/common/scrolltop/cubekun.png" style="width:80px; height:80px" />', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"

