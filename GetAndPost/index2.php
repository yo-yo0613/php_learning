<?php
// 定義個人資料變數，方便日後修改
$name = "李承祐";
$title = "網頁開發者 / 學生";
$email = "chengyouli37@gmail.com";
$bio = "你好！我是一名對技術充滿熱情的開發者。喜歡探索新事物，並用程式碼解決問題。";
$skills = ["PHP", "HTML/CSS", "JavaScript", "MySQL", "Git"];
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> 的個人主頁</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; background-color: #f4f4f9; color: #333; margin: 0; padding: 0; }
        .container { width: 80%; max-width: 800px; margin: 50px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        header { text-align: center; border-bottom: 2px solid #eee; padding-bottom: 20px; }
        h1 { margin: 0; color: #2c3e50; }
        .subtitle { color: #7f8c8d; font-size: 1.2em; }
        section { margin: 20px 0; }
        .skills-tags { list-style: none; padding: 0; display: flex; flex-wrap: wrap; gap: 10px; }
        .skills-tags li { background: #3498db; color: #fff; padding: 5px 15px; border-radius: 20px; font-size: 0.9em; }
        footer { text-align: center; font-size: 0.8em; color: #95a5a6; margin-top: 30px; }
        img {
            display: block;
            margin: 20px auto;
            max-width: 150px;
            border-radius: 10%;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1><?php echo $name; ?></h1>
        <p class="subtitle"><?php echo $title; ?></p>
        <img src="dog.jpg" alt="">
    </header>

    <section>
        <h3>關於我</h3>
        <p><?php echo $bio; ?></p>
    </section>

    <section>
        <h3>技能專長</h3>
        <ul class="skills-tags">
            <?php foreach ($skills as $skill): ?>
                <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section>
        <h3>聯繫方式</h3>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. Built with PHP.</p>
    </footer>
</div>

</body>
</html>