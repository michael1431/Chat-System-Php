<?php
include './functn.php';
$chats = get_all_chat();
foreach ($chats as $all_chats) {
    ?>
    <span><b style="color:green;"><?php echo $all_chats['name'] . ':'; ?></b></span>
    <span><b style="color:blue;"><?php echo $all_chats['msg']; ?></b></span>
    <span><b style="float:right;"><?php echo formatDate($all_chats['date']); ?></b></span>
    <?php
    echo '<hr>';
}
?>

