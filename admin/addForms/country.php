<form action="./funcs/addData.php" method="get" class="flex column g10 ai-c">
    <h2>
        Новая страна-производитель:
    </h2>
    <input type="text" class="hide" name="data" value="countries">
    <div>
        <div class="toolInfo">
            <span class="ctrl-r">Название:</span>
            <input type="text" name="name" placeholder="Введите название" class="inner-shadow brad10 p10">
        </div>
    </div>
    <div class="btns">
        <button class="accent-to-black">Добавить</button>
        <a href="../admin.php?tool=categories" class="accent-to-black">Отмена</a>
    </div>
</form>