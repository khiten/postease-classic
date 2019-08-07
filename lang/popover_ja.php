<?php

$popover = array
(
		// Reset System
		'hint10'                => 'システムをコピーもしくは移動しましたか？ [SQLite を使用している場合] > コピー（移動）先のサーバで SQLite が使用できない可能性があります。 [MySQLを使用している場合] > 設定中のMySQLサーバにコピー（移動）先のサーバからアクセスできない設定になっている可能性があります。',
		'input_activation_key'  => 'ダウンロード時にメールで通知されています。',
		'input_email'           => 'アクティベーションキーを送付したメールアドレスです。',
		'input_site_name'       => 'システムで表示するサイト名を設定します。サイト名はいつでも変更できます。',
		'input_account'         => 'システム管理者のアカウントを設定します。メールアドレスを推奨します。アカウントはあとから変更できます。',
		'input_nickname'        => 'システム管理者のニックネームを設定します。ニックネームはシステム内で表示されます。ニックネームはいつでも変更できます。',
		'input_password'        => 'システム管理者のパスワードを設定します。パスワードはいつでも変更できます。',
		'input_timezone'        => 'このシステムを使用する地域のタイムゾーンを設定します。',
		'input_database'        => 'このシステムで使用するデータベースを選択します。',
		'input_table_prefix'    => 'データベースのテーブル接頭辞を設定します。',

		// Config-Core
		'domain'                          => 'システムにアクセスするドメインです。インストール時に自動的に設定されます。 ※ SSLサイトを運用する場合はシステムにアクセスするドメインもSSL(https://)である必要があります。',
		'dir_name'                        => 'システムが設置されたディレクトリ名です。インストール時に自動的に設定されます。',
		'timezone'                        => 'サイトを運営する地域のタイムゾーンを設定します。（例）日本の場合 Asia/Tokyo',
		'session_key'                     => 'PostEase が使用するセッション変数のキーを設定します。基本的に変更する必要はありませんが、１ドメインで複数の PostEase を運用する場合はそれぞれ異なるキーになるように変更してください。',
		'upload_dir_permission'           => 'アップロードディレクトリのパーミッションを指定します。（例）777',
		'display_errors'                  => 'PostEase 内でのエラー出力を設定します。',
		'default_password'                => '新規ユーザを作成した際のデフォルトパスワードを設定します。',
		'edit_controll'                   => '編集制限を設定します。「プライベート」を選択すると、権限に関わらず全てのユーザは自分以外のユーザが投稿したポストを編集できません。「ユーザ権限」を選択すると、ライター権限のユーザは自分以外のユーザが投稿したポストを編集できません。',
		'publish_role'                    => 'ポストを公開できるユーザ権限を設定します。',
		'editable_role_category_post'     => 'ポストのカテゴリを編集できるユーザ権限を設定します。',
		'editable_role_tag_post'          => 'ポストのタグを編集できるユーザ権限を設定します。',
		'editable_role_category_contact'  => 'コンタクトのカテゴリを編集できるユーザ権限を設定します。',
		'upload_imagesize_main'           => 'WISIWYGエディタ内で使用する画像の最大サイズを設定します。',
		'media_parameter_flg'             => '投稿されたコンテンツ内の画像ファイル及びPDFファイルに「?v=yyyymmddhhiiss」形式のパラメータを付与します。',
		'update_allowed_role'             => 'アップデートを実行できるユーザ権限を設定します。',
		'allow_update_flg'                => 'システムアップデートチェックの許可／不許可を設定します。許可を推奨します。※ 許可しないを選択するとこれ以降の設定項目も無効になります。',
		'auto_update_flg'                 => 'システム自動アップデートの許可／不許可を設定します。許可した場合、アップデート権限のあるユーザでログインした際に、レベル２までのアップデートを自動で行います。許可を推奨します。',
		'update_level'                    => '許可するアップデートのレベルを設定します。レベル２以上を推奨します。 ※ レベル３のアップデートは自動アップデートを許可しても自動では行われません。',
		'remote_address_allowed'          => '接続を許可する接続元IPアドレス（もしくはホスト名）を指定します。サーバサイドからのアクセスを制限したい場合に設定します。複数指定する場合はカンマ（,）で区切ります。指定しない場合はすべてのIPアドレス（ホスト）から接続が可能になります。',
		'origin_allowed'                  => '接続を許可するドメインを指定します。Ajaxでのアクセスを制限したい場合に設定します。複数指定する場合はカンマ（,）で区切ります。指定しない場合はすべてのドメインから接続が可能になります。',
		'api_force_cache_time'            => 'AjaxからAPIを利用する際のキャッシュの有効期限を強制的に分単位で設定します。「0」の場合は強制キャッシュは無効ですが、その場合も ETag によるキャッシュを利用しますので、一般的には「0」のままで問題ありません。設定する場合、更新性を考慮すると10〜30（分）程度が目安です。',
		'change_database'                 => 'SQLite と MySQL、もしくはホストの異なる MySQL 間でデータベースを移行します。',

		// Config-General
		'site_name'                => 'システムで表示するサイト名を設定します。',
		'language'                 => 'システムで使用する基本言語を設定します。',
		'system_font'              => 'システムで使用するフォントを設定します。',
		'implement_code'           => '実装コードを表示する言語と実装方法を選択します。',
		'display_implement_code'   => '実装コードを表示するかどうかを設定します。',

		// Config-Posttype
		'menu_icon'                => 'メニューに表示するアイコンを設定します。',
		'auto_save_flg'            => '自動保存機能の使用を選択します。',
		'use_wisiwyg_flg'          => '本文でのWISIWYGエディタ（ビジュアルテキストエディタ）の使用を選択します。',
		'use_publish_end_at_flg'   => '「公開終了日時」の使用を選択します。',
		'use_addition_flg'         => '「ディスクリプション」の使用を選択します。ディスクリプションはサブタイトル・キャッチ・検索用ワードなどに利用できます。',
		'use_content_flg'          => '「本文」の使用を選択します。',
  	'use_category_flg'         => '「カテゴリ」の使用を選択します。',
		'use_tag_flg'              => '「タグ」の使用を選択します。',
		'use_slug_flg'             => '「スラッグ」の使用を選択します。スラッグを利用してURLを任意の文字列で表現できます。',
		'eyecatch_frame'             => 'アイキャッチ画像で使用するイメージフレームを指定します。',
		'preview_url'              => 'プレビュー画面のURLを設定します。',
		'parameter_key'            => 'パーマリンクで使用するパラメータキーを指定します。パーマリンクスタイルを「IDパラメータ形式」「スラッグパラメータ形式」で利用する場合は必須です。',
		'permalink_style'          => 'このコンテンツを表示するシングルページのパーマリンク（URL）形式を指定します。',
		'resource_url'             => 'アクセス可能なシングルページのURLを設定します。パラメータ付きのURLを生成します。この項目を設定するとプレビュー機能が利用可能になります。',
		'rewrite_url'              => 'パーマリンクとして利用したいシングルページのURLを設定します。設定しない場合はパラメータ形式の「もとのURL」がパーマリンクとして利用されます。' ,
		'permalink_sample'         => 'パーマリンクのサンプルです。希望の形と違う場合は「パーマリンクスタイル」と「書き換え後のURL」を調整してください。' ,
		'rewrite_operator_flg'     => 'サイト全体で拡張子なしURLでアクセスしたい場合はこの項目を「する」に設定します。',
		'rewrite_operator'         => 'サイト全体で使用しているビューページのファイル拡張子を設定します。',
		'rewrite_rule'             => 'パーマリンクおよび拡張子なしURLでのアクセスを有効にするための Apache 用の設定です。.htaccess などに貼り付けてください。※ .htaccess の設置および mod_rewrite の設定が有効であることが必要です。' ,
		'use_customitem_flg'       => '任意の入力項目を追加できます。',
		'use_multipage_flg'        => '複数ページで構成されるポストを作成できます。',
		'comment_type'             => 'コメント（レビュー・サブポスト）機能を利用できます。',
		'label_title'              => '「タイトル」の表示ラベルを指定します。',
		'label_addition'           => '「ディスクリプション」の表示ラベルを指定します。',
		'label_content'            => '「本文」の表示ラベルを指定します。',
		'customitem_position'      => 'カスアムアイテムの表示位置を設定します。',
		'posts_list_num'           => '表示件数を設定します。',
		'posts_sort_order'         => 'ソート順を設定します。',
		'use_list_eyecatch_flg'    => 'リスト表示にアイキャッチを使用するか設定します。',
		'posts_column01'           => '１列目のデフォルト表示項目を設定します。',
		'posts_column02'           => '２列目のデフォルト表示項目を設定します。',
		'posts_column03'           => '３列目のデフォルト表示項目を設定します。',
		'posts_title_length'       => 'タイトルの表示文字長を設定します。',
		'posts_category_num'       => 'カテゴリの表示件数を設定します。',
		'posts_tag_num'            => 'タグの表示件数を設定します。',
		'comments_list_num'        => '表件数を設定します。',
		'comments_title_length'    => 'タイトルの表示文字長を設定します。',
		'review_max_score'         => 'レビューで使用するスコアの最大値を設定します。 ※「５」に設定した場合は１〜５の５段階制スコアとなります。',

		// Config-Contact-Admin
		'use_auto_reply_admin'    => 'フォーム送信時に管理者に通知メールを送るかどうか設定します。',
		'admin_language'          => 'フォームの言語およびエンコードを設定します。ex). UTF-8で作成されたフォームでは「unicode」、その他SHIFT-JISなど特定の日本語専用のエンコーディングで作成されたフォームでは「japanese」とします。',
		'admin_to'                => '通知先のメールアドレスを設定します。',
		'admin_from'              => '送信元メールアドレスを設定します。',
		'admin_from_name'         => '送信元の名前を設定します。',
		'admin_subject'           => 'タイトルを設定します。',
		'admin_body_head'         => '本文の共通ヘッダーを設定します。',
		'admin_body_main'         => '本文の共通文を設定します。',
		'use_input_values_admin'  => '本文にフォームに入力した値を表示するかどうか設定します。',
		'admin_body_bottom'       => '本文の共通フッターを設定します。',
		'admin_signature'         => '署名を設定します。',
		
		// Config-Contact-Customer
		'use_auto_reply_customer'     => 'フォーム送信時にカスタマーに通知メールを送るかどうか設定します。',
		'customer_language'           => 'フォームの言語およびエンコードを設定します。ex). UTF-8で作成されたフォームでは「unicode」、その他SHIFT-JISなど特定の日本語専用のエンコーディングで作成されたフォームでは「japanese」とします。',
		'customer_from'               => '送信元メールアドレスを設定します。',
		'customer_from_name'          => '送信元の名前を設定します。',
		'customer_subject'            => 'タイトルを設定します。',
		'customer_body_head'          => '本文の共通ヘッダーを設定します。',
		'customer_body_main'          => '本文の共通文を設定します。',
		'use_input_values_customer'   => '本文にフォームに入力した値を表示するかどうか設定します。',
		'customer_body_bottom'        => '本文の共通フッターを設定します。',
		'customer_signature'          => '署名を設定します。',
	
		// Config-Contact-SMTP
		'use_smtp'    => 'メール送信に特定のSMTPサーバを使用するかどうか設定します。「使用しない」を選択した場合はローカルサーバを利用します。',
		'host'        => 'SMTPサーバのホスト名を指定します。',
		'user_name'   => 'SMTPサーバのユーザアカウントを指定します。',
		'password'    => 'SMTPサーバのパスワードを指定します。',
		'port'        => '通信ポートを指定します。',
		
		// Config-Contact-display
		'contacts_sort_order'      => 'ソート順を設定します。',
		'contacts_list_num'        => '表件数を設定します。',
		'contacts_column01'        => '１列目のデフォルト表示項目を設定します。',
		'contacts_column03'        => '３列目のデフォルト表示項目を設定します。',
		'contacts_column01_length' => '１列目の表示文字長を設定します。',
		'contacts_category_num'    => 'カテゴリの表示件数を設定します。',

		// Config-Option
		'use_multisite_flg'    => '任意のサイトを追加設定できます。ドメインの違う複数のサイトを運用する際に有効です。',
		'use_posttype_flg'     => '任意のポストタイプを追加設定できます。タイプの異なる複数のコンテンツを管理する際に有効です。',
		'use_multilingual_flg' => '任意の言語を追加設定できます。複数言語で記事の投稿・カテゴリやタグの登録が可能になります。多言語サイトを運用する際に有効です。',
		'use_contact_flg'      => 'コンタクト機能を使用できます。',
		'use_version_flg'      => 'バージョン管理機能を使用できます。',
		'use_group_flg'        => '設定したグループ（組織・団体）ごとに独立した環境を利用できます。複数のグループがシステムを同時利用する際に有効です。',
		'charged_option'       => 'この機能はビジネスライセンスでのみ使用可能です。',
);