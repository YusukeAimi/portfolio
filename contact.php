<?php
session_start();

if (!empty($_POST)) {
	if ($_POST['name'] === '') {
		$error['name'] = 'blank';
	}
	if ($_POST['email'] === '') {
		$error['email'] = 'blank';
	}
	if ($_POST['content'] === '') {
		$error['content'] = 'blank';
	}

    // エラーがなければcheck.phpへ移動
    if (empty($error)) {
        $_SESSION['contact'] = $_POST;
        header('Location: check.php');
        exit();
    }
}

if ($_REQUEST['action'] == 'rewrite' && isset($_SESSION['contact'])) {
    $_POST = $_SESSION['contact'];
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
        <link rel="stylesheet" href="style.css">
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
			<form class="mailForm" method="post" action="">
				<table class="table">
					<tbody>
						<tr>
						    <th><label>お名前<span class="required">※必須</span></label></th>
							<td>
                                <input type="text" name="name" value="<?php print(htmlspecialchars($_POST['name'], ENT_QUOTES)); ?>" />
			                    <?php if ($error['name'] === 'blank'): ?>
			                        <p class="error">※ニックネームを入力してください</p>
                                <?php endif; ?>
                            </td>
                        </tr>
						<tr>
							<th><label>メールアドレス<span class="required">※必須</span></label></th>
							<td>
                                <input type="email" name="email" value="<?php print(htmlspecialchars($_POST['email'], ENT_QUOTES)); ?>">
                                <?php if ($error['email'] === 'blank'): ?>
	                                <p class="error">※メールアドレスを入力してください</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
							<th><label>件名</label></th>
							<td>
                                <input type="text" name="title" value="<?php print(htmlspecialchars($_POST['title'], ENT_QUOTES)); ?>">
                            </td>
                        </tr>
						<tr>
							<th><label>お問い合わせ内容<span class="required">※必須</span></label></th>
							<td>
                                <textarea name="content" cols="50" rows="5" value="<?php print(htmlspecialchars($_POST['content'], ENT_QUOTES)); ?>"></textarea></td>
                                <?php if ($error['content'] === 'blank'): ?>
	                                <p class="error">※お問い合わせ内容を入力してください</p>
                                <?php endif; ?>
                            </td>
                        </tr>
					</tbody>
                </table>
                <div class="button">
                    <input type="submit" value="入力内容を確認する" id="check"/>
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
