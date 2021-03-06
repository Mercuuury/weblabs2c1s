<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Технологии</title>
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
            <nav class="main-menu">
                    <a href="<?php 
                                $ref = 'index.php'; 
                                $text = 'Главная';
                                $current = false;
                                echo $ref;
                            ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
                    <a href="<?php 
                                $ref = 'skills.php'; 
                                $text = 'Навыки';
                                $current = false;
                                echo $ref;
                            ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
                    <a href="<?php 
                                $ref = '#'; 
                                $text = 'Технологии';
                                $current = true;
                                echo $ref;
                            ?>" <?php if($current) echo 'id="underline"';?> class="navigation"><?= $text; ?></a>
                </nav>    
            <div class="text-center py-5">
                <h1 class="name">Ковшик Александр Сергеевич</h1>
                <h2>Веб-разработчик</h2>
                <a class="btn contact-me-btn" href="mailto:kovshiksa@gmail.com">Написать мне</a>
            </div>
            </div>
        </header>
        
        <main>
            <div class="container" style="min-height: 556px;">
            <section id="technologies">
                <h1 style="text-align: center;">Технологии</h1>
                <p>
                    Технологии, которыми я владею:
                </p>

                <dl class="skills-list">
                    <dt>Java</dt>
                    <dd class="level"><div style="width: 80%;">80%</div></dd>
                    <dt>HTML</dt>
                    <dd class="level"><div style="width: 60%;">60%</div></dd>
                    <dt>CSS</dt>
                    <dd class="level"><div style="width: 40%;">40%</div></dd>
                    <dt>JavaScript</dt>
                    <dd class="level"><div style="width: 40%;">40%</div></dd>
                    <dt>PHP</dt>
                    <dd class="level"><div style="width: 40%;">40%</div></dd>
                  </dl>
            </section>
            </div>
        </main>
        
        <footer class="footer">
            <div class="container">
                &copy; Ковшик А.С.
            </div>
        </footer>

    </body>
</html>