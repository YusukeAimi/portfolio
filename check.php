<?php
session_start();

if (!isset($_SESSION['contact'])) {
	header('Location: contact.php');
	exit();
}

if (!empty($_POST)) {

	//$request_param = $_POST;
	//$request_datetime = date("Y年m月d日 H時i分s秒");
	//$_SESSION['contact']['date'] = date("Y年m月d日 H時i分s秒");

	//$mailto = $_SESSION['contact']['email'];
	//お問い合わせを受信するメールアドレス
	//$to = $_SESSION['contact']['email'];
	//送信が完了したことを自動送信するメールアドレス
	//$mailfrom = "ynwa0310@outlook.jp";
	//$subject = "お問い合わせ、ありがとうございます。";
	/*
	//相手への確認用メール
	$content = "";
	$content .= $request_param['name']. "様\r\n";
	$content .= "お問い合わせ、ありがとうございます。\r\n";
	$content .= "=================================\r\n";
	$content .= "お問い合わせ日時　 　" . $request_datetime."\r\n";
	$content .= "お名前　 　　　　　　" . htmlspecialchars($_SESSION['contact']['name'], ENT_QUOTES)."\r\n";
	$content .= "メールアドレス　 　　" . htmlspecialchars($_SESSION['contact']['email'], ENT_QUOTES)."\r\n";
	$content .= "件名　 　　　　　　　" . htmlspecialchars($_SESSION['contact']['title'], ENT_QUOTES)."\r\n";
	$content .= "お問い合わせ内容　 　" . htmlspecialchars($_SESSION['contact']['content'], ENT_QUOTES)."\r\n";
	$content .= "=================================\r\n";

	//管理者確認用メール
	$subject2 = "お問い合わせがありました。";
	$content2 = "";
	$content2 .= "お問い合わせがありました。\r\n";
	$content2 .= "=================================\r\n";
	$content2 .= "お問い合わせ日時   " . $request_datetime."\r\n";
	$content2 .= "お名前　 　　　　　" . htmlspecialchars($_SESSION['contact']['name'], ENT_QUOTES)."\r\n";
	$content2 .= "メールアドレス　 　" . htmlspecialchars($_SESSION['contact']['email'], ENT_QUOTES)."\r\n";
	$content2 .= "件名　 　　　　　　" . htmlspecialchars($_SESSION['contact']['title'], ENT_QUOTES)."\r\n";
	$content2 .= "お問い合わせ内容　 " . htmlspecialchars($_SESSION['contact']['content'], ENT_QUOTES)."\r\n";
	$content2 .= "================================="."\r\n";

	mb_language("ja");
	mb_internal_encoding("UTF-8");
	//mail 送信
	//mb_send_mail(宛先, 件名, メッセージ, ヘッダ)
	if($request_param['action'] === 'submit'){
		if(mb_send_mail($to, $title, $content)){
			echo "メールを送信しました";
			unset($_SESSION['contact']);
			//header('Location: thanks.php');
			exit();
      	} else {
      	  echo "メールの送信に失敗しました";
	 	}
	}
	//unset($_SESSION['contact']);
	//header('Location: thanks.php');
	//exit();
	*/
	/*
	$request_param = $_POST;
	mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    $to = $_SESSION['contact']['email'];
    $title = $_SESSION['contact']['title'];
	$content = $_SESSION['contact']['content'];
	if($request_param['action'] === 'submit'){
		if(mb_send_mail($to, $title, $content)){
    		echo "メールを送信しました";
    	} else {
			echo "メールの送信に失敗しました";
		}
	};
	*/
	$to = $_SESSION['contact']['email'];
	$subject = "HTML MAIL";
	$message = "<html><body><h1>This is HTML MAIL</h1></body></html>";
	$headers = "From: ynwa0310@outlook.jp";
	$headers .= "\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8";
	mb_send_mail($to, $subject, $message, $headers);

	if(mb_send_mail($to, $title, $message, $headers)) {
    	echo "メール送信成功です";
  	}
  	else {
    	echo "メール送信失敗です";
  	}
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>お問い合わせ</title>
        <!-- css -->
        <!--<link rel="stylesheet" href="style.css">-->
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
	<body>
        <header>
            <!--ヘッダーメニュー-->
            <nav>
                <ul class="header-navigation">
                    <li class="header-navigation">
                        <a href="index.html" style="text-decoration: none;"><span>Top</span></a>
                    </li>
                    <li class="header-navigation">
                        <a href="index.html #about" style="text-decoration: none;"><span>About</span></a>
                    </li>
                    <li class="header-navigation">
                        <a href="index.html #works" style="text-decoration: none;"><span>Works</span></a>
                    </li>
                    <li class="header-navigation">
                        <a href="index.html #contact" style="text-decoration: none;"><span>Contact</span></a>
                    </li>
                </ul>
            </nav>
		</header>
		<div class="contact">
			<h2 class="contact-title">お問い合わせ</h2>
			<p>記入した内容を確認して、「送信する」ボタンをクリックしてください</p>
			<form class="mailForm" method="post" action="">
				<input type="hidden" name="action" value="submit" />
				<table class="table">
					<tbody>
						<dl>
							<dt style="color: black;">お名前</dt>
							<dd style="color: black;">
								<?php print(htmlspecialchars($_SESSION['contact']['name'], ENT_QUOTES)); ?>
        					</dd>
						</dl>
						<dl>
							<dt style="color: black;">メールアドレス</dt>
							<dd style="color: black;">
								<?php print(htmlspecialchars($_SESSION['contact']['email'], ENT_QUOTES)); ?>
        					</dd>
                        </dl>
                        <dl>
							<dt style="color: black;">件名</dt>
							<dd style="color: black;">
								<?php print(htmlspecialchars($_SESSION['contact']['title'], ENT_QUOTES)); ?>
        					</dd>
						</dl>
						<dl>
							<dt style="color: black;">お問い合わせ内容</dt>
							<dd style="color: black;">
								<?php print(htmlspecialchars($_SESSION['contact']['content'], ENT_QUOTES)); ?>
        					</dd>
						</dl>
					</tbody>
				</table>
			    <div>
					<a href="contact.php?action=rewrite">&laquo;&nbsp;書き直す</a> | <input type="submit" value="送信する" />
				</div>
		    </form>
		</div>
    </body>

	<div id="page_top">
      <a href="#"><span style="color: #000000"><span style="font-size: 200%"><i class="fa fa-arrow-circle-up"></i></span></span></a>
    </div>
    <!-- 
    jQuery、Popper.js、Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    -->
    <!--js-->
   <script src="script.js"></script>
  </body>
</html>
