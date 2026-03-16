<?php
$name = "李承祐";
$title = "student / web developer";
$email = "chengyouli37@gmail.com";
$bio = "Hello ! I am a passionate developer who loves technology. I enjoy exploring new things and solving problems with code.";
$skills = ["PHP", "HTML/CSS", "JavaScript", "MySQL", "Git", "Python", "React", "Node.js", "Docker", "AWS", "Java", "C++", "Unity"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> 的個人主頁</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0; 
        }
        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1><?php echo $name; ?></h1>
            <p class="subtitle"><?php echo $title; ?></p>
        </header>

        <section>
            <h3>About Me</h3>
            <p><?php echo $bio; ?></p>
        </section>

        <section>
            <h3>Skills</h3>
            <ul class="skills-tags">
                
            </ul>
        </section>
    </div>

</body>
</html>