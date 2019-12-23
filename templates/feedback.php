<?php require "header.php" ?>
<div class="container">
    <h1 class="mb-5">Feedback</h1>
    <h3>Контактная форма</h3>
    <form action="form.php" method="post">
        <input type="email" class="form-control" placeholder="Введите email" name="email" required><br>
        <textarea name="user_text" id="user_text" class="form-control" placeholder="Введите ваше сообщение" required></textarea><br>
        <button type="submit"  class="btn btn-success" name="send">Отправить</button>
    </form>
</div>
<?php require "footer.php" ?>