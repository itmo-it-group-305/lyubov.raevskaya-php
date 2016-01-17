
<?php
/**
 * Created by PhpStorm.
 * User: l.raevskaya
 * Date: 15.01.2016
 * Time: 13:50
 */

$url = 'https://api.vk.com/method/friends.get?';
$data = array(
    'user_id' => 689643,
    'fields' => 'bdate,city,photo_50,online',
    'count' => 20,
    'v' => 5.44,
    );
//user_id=689643&fields=nickname,city,photo_50,online';
$content = $url.http_build_query($data);
$get = file_get_contents($content);
echo $get;
$friends = json_decode($get, true);
$friends['response'][0]['uid'];
//$post = true;
//echo $friends;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>


<?php
foreach ($friends as $post): ?>

    <section>
        <h2>My friends:</h2>
        <img src="<?= $post['photo_50'] ?>">
        <p> <?= $post['first_name']?></p>
        <p> <?= $post['last_name']?></p>
        <p> <?= $post['bdate']?></p>
        <p><?= $post['city']?></p>
    </section>

<?php endforeach; ?>

</body>
</html>