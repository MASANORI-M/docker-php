<?php
require('./common/function.php');

if(!empty($post)) {
    $email = $post['email'];
    $lastName = $post['last_name'];
    $firstName = $post['first_name'];

    try {
        $dbh = connectDb();

    } catch (Exception $e) {
        echo 'エラー発生';
    }
}

?>

<?php
    $siteTitle = 'TOP';
    require './common/head.php';
?>

<?php
    require './common/header.php';
?>
<main>
    <h1>楽しいよ</h1>
    <br>
    <div>
        <a href="./mysql/list.php">mysql実行用リンク</a>
    </div>
    <div>
        <a href="./practise/index.php">PHP練習用リンク</a>
    </div>
    <br>
    <div>
        <form action="" method="post" class="form">
            <h2 class="title">ユーザー登録</h2>
            <label>
                Email
                <input type="text" name="email" value="<?php if(!empty($post['email'])) echo $post['email']; ?>">
            </label>
            <label>
                名前（性）
                <input type="text" name="last_name" value="<?php if(!empty($post['last_name'])) echo $post['last_name']; ?>">
            </label>
            <label>
                名前（名）
                <input type="text" name="first_name" value="<?php if(!empty($post['first_name'])) echo $post['first_name']; ?>">
            </label>
            <div class="btn-container">
                <input type="submit" class="btn btn-mid" value="登録する">
            </div>
        </form>
    </div>
</main>

<?php
    require './common/footer.php';
?>