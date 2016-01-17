
<?php
$data = [
    [
        'id'=>1,
        'title'=> 'News #1',
        'description'=> 'Short description',
        'date'=> date('Y-m-d H:i:s'),
        'preview'=> 'Some picture',
    ],
    [
        'id'=>2,
        'title'=> 'News #2',
        'description'=> 'Short description 2',
        'date'=> date('Y-m-d H:i:s'),
        'preview'=> 'Some picture 2',
    ],
    [
        'id'=>3,
        'title'=> 'News #3',
        'description'=> 'Short description 3',
        'date'=> date('Y-m-d H:i:s'),
        'preview'=> 'Some picture 3',
    ],
    [
        'id'=>4,
        'title'=> 'News #4',
        'description'=> 'Short description 4',
        'date'=> date('Y-m-d H:i:s'),
        'preview'=> 'Some picture 4',
    ],
    [
        'id'=>5,
        'title'=> 'News #5',
        'description'=> 'Short description 5',
        'date'=> date('Y-m-d H:i:s'),
        'preview'=> 'Some picture 5',
    ],
];
//Выводим блоговой лентой. перебираем массив foreach'ем

//foreach ($data as $post) {
//    echo
//        '<section>',
//            '<h2>'. $post['title'].''</h2>''
//            ''<p class=\"date\"></p>
//        '</section>'
//        ;
//    var_dump($post['title']);
//}
?>
<!--    <!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--</head>-->
<!--<body>-->
<!--    </pre>-->
<?php //foreach ($data as $post); ?>
<!--<section>-->
<!--            <h2>--><?//=$post[0]['title']?><!--</h2>-->
<!--            <p class="preview">-->
<!--                <img src="--><?//$post['preview']?><!--">-->
<!--            </p>-->
<!--    <p class="date">--><?//=$post['date'] ?><!--</p>-->
<!--    <p class="description">--><?//=$post['description'] ?><!--</p>-->
<!--    <a href="post.php?id=$post['id']">Новость №  --><?//= $post['id'] ?><!--</a>-->
<!---->
<!--</section>-->
<?php //endforeach; ?>
<!---->
<!--</body>-->
<!--</html>-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>


<?php
foreach ($data as $post): ?>
    <section>
        <h2><?= $post['title']?></h2>
        <p class = 'preview'>
            <img src="<?= $post['preview'] ?>">
        </p>
        <p class= "date"> <?= $post['date']?></p>
        <p class = "description"><?= $post['description']?></p>
        <a href="post.php?id=$post['id']">Читать новость №  <?= $post['id'] ?></a>
    </section>
<?php endforeach; ?>

</body>
</html>