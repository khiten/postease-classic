<?php
/*
 * SYSTEM
 * ------------------------------------------------------------------------------------------------ */
$currency_list = array
(
		'dollar' => 'ドル',
		'yen'    => '円',
);
$extra_posttype_list = array
(
		1001 => 'コンタクト',
);
$update_level_list = array
(
		1 => 'マイクロアップデート',
		2 => 'マイナーアップデート',
		3 => 'メジャーアップデート',
);
$display_errors_list = array
(
		0 => '表示しない',
		1 => '表示する',
);
$postease_license_ja = array
(
  0 => 'ベーシックライセンス',
  1 => 'アドバンスライセンス',
  2 => 'ビジネスライセンス'
);


/*
 * ERROR
 * ------------------------------------------------------------------------------------------------ */
$reset_system_errormsg = array
(
		// input
		'01' => '未入力の入力必須項目があります。',
		'02' => '設定ファイルの生成に失敗しました。',

		// activation
		'11' => 'アクティベーションキーが認識できません。',
		'12' => 'このアクティベーションキーは既に使用されています。',
		'13' => 'アクティベーションキーとメールアドレスの組み合わせが認識できません。',
		'14' => 'メールアドレスを入力してください。',
		'15' => '照合キーの取得に失敗しました。',
		'16' => '照合キーの更新に失敗しました。',

		// database initialize
		'21' => 'データベースの選択にエラーがあります。',
		'22' => 'MySQLを選択した場合は接続情報を正しく入力してください。',
		'23' => 'MySQLに接続できません。接続情報を再入力してください。<br>システムを別サーバに移行した場合は移行先のデータベース接続情報を入力して下さい。※ あらかじめ移行元からデータベースをインポートしておく必要があります。',
		'24' => 'このサーバではSQLiteを使用できません。仕様を確認してください。',
		'25' => '不明なエラーが発生しました。処理を中止しました。',
		'26' => '設定中のデータベースに接続できません。',

		// database manipulation
		'31' => 'テーブルの初期化に失敗しました。',
		'32' => 'レコードの初期化に失敗しました。指定したデータベースはすでに使用されている可能性があります。',
		'33' => '',
		'34' => '現在の設定と同じです。同じデータベースに移行する場合はテーブル接頭辞を変更してください。',
		'35' => '設定レコードの更新に失敗しました。',

		// data migration
		'41' => '設定中のデータベースに接続できません。',
		'42' => '既存レコードの読込に失敗しました',
		'43' => 'データの移行に失敗しました。',
		'44' => '現在の設定と同じです。同じデータベースに移行する場合はテーブル接頭辞を変更してください。',
		'45' => '設定レコードの更新に失敗しました。',

		// change path(domain)
		'51' => 'ドメイン名を含むレコードの取得に失敗しました。',
		'52' => 'ドメイン名を含むレコードの更新に失敗しました。',
		'53' => 'ディレクトリ名を含むレコードの取得に失敗しました。',
		'54' => 'ディレクトリ名を含むレコードの更新に失敗しました。',
);

$execute_errormsg = array
(
		11 => '新規作成に失敗しました。',
		12 => '更新に失敗しました。',
		13 => '削除に失敗しました。',
);

$errormsg_list = array
(
		// common
		'01' => '表示名を入力してください。',
		'02' => '有効なスラッグを入力してください。',
		'03' => 'すでに使用されているスラッグです。',
		'04' => '新規作成に失敗しました。',
		'05' => '更新に失敗しました。',
		'06' => '削除に失敗しました。',
		'09' => '予期せぬエラーが発生しました。',
		'10' => '不正な操作です。',

		// taxonomy(category, tag + custom_value)
		'11' => 'ラベルを入力してください。',

		// custom item / custom list
		'21' => '項目名を入力してください。',
		'22' => 'このカスタムリストは他のポストタイプで使用中です。所属を変更できません。',
		'23' => 'このカスタムリストは既に使用中です。非表示にできません。',
		'24' => 'このカスタムリストは既に使用中です。削除できません。',

		// image_frame
		'31' => 'オートの場合は横最大サイズか縦最大サイズの設定が必要です。',
		'32' => 'クロップの場合は横固定サイズと縦固定サイズ両方の設定が必要です。',
		'33' => '設定できるサイズは9999pxまでです。',

		// user
		'41' => '有効なアカウントを入力してください。',
		'42' => 'すでに使用されているアカウントです。',

		// password
		'51' => 'なにも変更されませんでした。',
		'52' => '新しいパスワードの入力が一致しません。',
		'53' => 'パスワードが変更されていません。',
		'54' => '現在のパスワードが正しくありません。',
		'55' => 'パスワードの変更処理に失敗しました。',
    '56' => 'アカウントの変更処理に失敗しました。',

		// config
		'81' => 'ドメインの変更に失敗しました。',
		'82' => 'ディレクトリの変更に失敗しました。',
		'83' => 'セッションキーに不正な値が指定されました。セッションキーは半角英字で指定してください。（全ての変更がキャンセルされました）',
		'84' => 'アップロードディレクトリパーミッションに不正な値が指定されました。（全ての変更がキャンセルされました）',
		'85' => 'ユーザ初期パスワードに不正な値が指定されました。ユーザ初期パスワードは半角英数字で指定してください。（全ての変更がキャンセルされました）',
		'86' => '本文画像デフォルトサイズに不正な値が指定されました。（全ての変更がキャンセルされました）',
		'89' => '設定の変更に失敗しました。',

		// activation
		'91' => 'ライセンスが無効です。<br><a href="./reset_system.php?mode=4">&raquo; 別のライセンスを割り当てる</a>',
		'92' => 'ライセンス内容を確認できません。',
		'93' => 'ライセンス内容を確認できません。',
		'94' => 'システムがコピー（移動）されたか、新しいドメインが割り当てられました。システムは無効になっています。<br><a href="./reset_system.php?mode=3">&raquo; 以前のアクティベーションキーでこのシステムを有効にする。</a><br><a href="./reset_system.php?mode=4">&raquo; 新しいアクティベーションキーを割り当てる。</a>',
		'99' => 'アクセス可能なデータベースがありません。<br>システムをコピーまたは移動した場合は、データベースの移行が正しく行われているか確認してください。',
);


/*
 * RESET-SYSTEM
 * ------------------------------------------------------------------------------------------------ */
$reset_system_titles = array
(
		1 => '初期設定',
		2 => 'データベースの移行',
		3 => '再設定',
		4 => 'ライセンスの変更',
		5 => 'データベース使用環境の確認',
		6 => 'データベース接続設定の確認',
);

$reset_system_submit = array
(
		1 => '設定する',
		2 => '移行する',
		3 => '再設定する',
		4 => '変更する',
		5 => '',
		6 => '再設定する',
);


/*
 * TITLE
 * ------------------------------------------------------------------------------------------------ */
$view_page_type  = array
(
	'post'            => 1,
	'posts'           => 1,
	'category'        => 0,
	'tag'             => 1,
	'custom_item'     => 0,
	'config_posttype' => 1,
	'contact'         => 2,
	'contacts'        => 2,
	'config_contact'  => 2,
	'media'           => 3,
	'image_frame'     => 3,
	'user'            => 4,
	'group'           => 4,
	'change_password' => 4,
	'site'            => 5,
	'posttype'        => 5,
	'language'        => 5,
	'config_general'  => 6,
	'config_option'   => 6,
	'config_core'     => 6,
);
$view_page_title = array
(
	1 => '',
	2 => '',
	3 => 'メディア',
	4 => 'ユーザ',
	5 => 'サイトオプション',
	6 => '設定',
);


/*
 * COMMON
 * ------------------------------------------------------------------------------------------------ */
$common_status_display = array
(
		1 => '表示',
		8 => '非表示',
);
$common_status_use = array
(
		1 => '使用',
		8 => '不使用',
);

$common_flg_use = array
(
		0 => '使用しない',
		1 => '使用する',
);

$common_flg_utilize = array
(
	0 => '利用しない',
	1 => '利用する',
);

$common_flg_display = array
(
		0 => '表示しない',
		1 => '表示する',
);

$common_flg_permission = array
(
		0 => '許可しない',
		1 => '許可する',
);

$common_flg_valid = array
(
		0 => '無効',
		1 => '有効',
);

$common_flg_do = array
(
	0 => 'しない',
	1 => 'する',
);


/*
 * CONFIG (core)
 * ------------------------------------------------------------------------------------------------ */
$edit_controll_list = array
(
		1 => 'プライベート',
		2 => 'ユーザ権限',
		9 => 'なし',
);
$editable_role_list = array
(
		2 => 'サイト管理者',
		7 => 'エディター',
		8 => 'ライター',
);
$implement_code_list = array
(
	1 => 'PHP',
	2 => 'jQuery',
);


/*
 * CONFIG POSTTYPE / CONTACT
 * ------------------------------------------------------------------------------------------------ */
$posts_column01_list = array
(
		1 => 'ステータス',
		2 => 'ID',
);
$posts_column02_list = array
(
		1 => 'カテゴリ / タグ',
		2 => 'カテゴリ',
		3 => 'タグ',
);
$posts_column03_list = array
(
		1 => '投稿者',
		2 => '更新者',
);
$posts_sort_order_list = array
(
		'ASC'  => '昇順',
		'DESC' => '降順',
);
$post_customitem_position_list = array
(
		1 => '上',
		2 => '中',
		3 => '下',
);
$permalink_style_list = array
(
	1 => 'ハッシュID（67a89b013d25）',
	2 => 'カテゴリーとハッシュID（category/67a89b013d25）',
	3 => 'システムID（123）',
	4 => 'カテゴリーとシステムID（category/123）',
	5 => 'スラッグ（hello-world）',
	6 => 'カテゴリーとスラッグ（category/hello-world）',
	7 => '年月日とスラッグ（' . date('Y/m/d') . '/hello-world）',
	8 => '年月とスラッグ（' . date('Y/m') . '/hello-world）',
	
);
$permalink_sample_list = array
(
	1 => '67a89b013d25',
	2 => 'category/67a89b013d25',
	3 => '123',
	4 => 'category/123',
	5 => 'hello-world',
	6 => 'category/hello-world',
	7 => date('Y/m/d') . '/hello-world',
	8 => date('Y/m') . '/hello-world',
);
$parameter_key_list = array
(
	1 => '67a89b013d25',
	2 => '67a89b013d25',
	3 => '123',
	4 => '123',
	5 => 'hello-world',
	6 => 'category-hello-world',
	7 => date('Y-m-d') . '-hello-world',
	8 => date('Y-m') . '-hello-world',
);
$contacts_sort_order_list = array
(
		'ASC'  => '昇順',
		'DESC' => '降順',
);
$contacts_column01_list = array
(
		1 => 'タイトル',
		2 => '内容',
);
$contacts_column03_list = array
(
		1 => '名前',
		2 => 'Eメールアドレス',
		3 => '電話番号',
);


/*
 * POST
 * ------------------------------------------------------------------------------------------------ */
$post_status = array
(
		1 => '公開中',
		2 => '下書き',
		8 => '非公開',
);
$post_status_icon = array
(
  1 => '<i class="fa fa-eye" aria-hidden="true"></i>',
  2 => '<i class="fa fa-pencil" aria-hidden="true"></i>',
  8 => '<i class="fa fa-eye-slash" aria-hidden="true"></i>',
);
$contact_status_icon = array
(
  1 => '<i class="fa fa-archive" aria-hidden="true"></i>',
  7 => '<i class="fa fa-comments-o" aria-hidden="true"></i>',
  8 => '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>',
);


/*
 * COMMENT
 * ------------------------------------------------------------------------------------------------ */
$comment_status = array
(
		1 => '公開',
		2 => '保留',
		8 => '非公開',
);
$comment_items_label = array
(
		'score'    => 'スコア',
		'nickname' => 'ニックネーム',
		'email'    => 'メールアドレス',
		'eyecatch' => 'アイキャッチ',
		'title'    => '表題',
		'content'  => '内容',
);


/*
 * CONTACT
 * ------------------------------------------------------------------------------------------------ */
$contact_status = array
(
		1 => '対応済',
		7 => '対応中',
		8 => '未確認',
);
$contact_items_label = array
(
		'category_id' => '問合わせカテゴリー',
		'title'       => '表題',
		'content'     => '内容',
		'name'        => '名前',
		'email'       => 'メールアドレス',
		'tel'         => '電話番号',
);


/*
 * POSTTYPE
 * ------------------------------------------------------------------------------------------------ */
$posttype_comment_type = array
(
		1 => 'コメント',
		2 => 'レビュー',
		3 => 'サブポスト',
);
$posttype_mata_text = array
(
		'label_title'     => 'タイトル',
		'label_addition'  => 'ディスクリプション',
		'label_content'   => '本文',
);


/*
 * USER
 * ------------------------------------------------------------------------------------------------ */
$user_role = array
(
		1 => 'システム管理者',
		2 => 'サイト管理者',
		7 => 'エディター',
		8 => 'ライター',
);


/*
 * CUSTOM-ITEM
 * ------------------------------------------------------------------------------------------------ */
$custom_item_type_post = array
(
		'text'       => 'テキスト',
		'datetime'   => '日付時刻',
		'date'       => '日付',
		'time'       => '時刻',
		'textarea-s' => 'テキストエリア(S)',
		'textarea-m' => 'テキストエリア(M)',
		'textarea-l' => 'テキストエリア(L)',
		'list'       => 'リスト',
		'table'      => 'テーブル',
		'select'     => 'プルダウン',
		'radio'      => 'ラジオボタン',
		'checkbox'   => 'チェックボックス',
		'image'      => '画像',
		'gallery'    => 'ギャラリー',
		'relation'   => 'リレーション',
		'syntax'     => 'シンタックス',
);
$custom_item_type_contact = array
(
	'text'       => 'テキスト',
	'date'       => '日付',
	'textarea-s' => 'テキストエリア(S)',
	'textarea-m' => 'テキストエリア(M)',
	'textarea-l' => 'テキストエリア(L)',
	'select'     => 'プルダウン',
	'radio'      => 'ラジオボタン',
	'checkbox'   => 'チェックボックス',
);
$column_delimiter_list = array
(
		'comma'     => 'カンマ ( , )',
		'semicolon' => 'セミコロン ( ; )',
		'colon'     => 'コロン ( : )',
		'slash'     => 'スラッシュ ( / )',
		'dot'       => 'ドット ( . )',
);


/*
 * IMAGE-FRAME
 * ------------------------------------------------------------------------------------------------ */
$image_frame_type = array
(
		'auto' => '自動リサイズ',
		'crop' => '固定サイズ切抜き',
);


/*
 * UPDATE
 * ------------------------------------------------------------------------------------------------ */
$update_type = array
(
		1  => 'メジャー',
		2  => 'マイナー',
		3  => 'マイクロ',
		9  => 'ダウングレード',
);

$update_level = array
(
		1  => 'レベル１（マイクロアップデート）',
		2  => 'レベル２（マイナーアップデート）',
		3  => 'レベル３（メジャーアップデート）',
);


/*
 * INDEX
 * ------------------------------------------------------------------------------------------------ */
function smart_cache_icon ($lisence)
{
  $icon = '';
  if ($lisence > 0)
  {
    $icon = '';
  }
}
