<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <link rel="stylesheet" href="./src/css/todo.css">
</head>
<body dir="rtl">

    <?php
        $username = $_GET["username"];
        echo "<h1 class='title'>$username به todolist خونت خوش اومدی :0</h1>";
    ?>

    <!-- Div elem to contain form of each todo to send related data to todoForm.php -->
    <div id="formsContainer">
    </div>

    <!-- Send username to identify which user want to add todo -->
    <form action="todoForm.php" method="get">
        <input type="text" name="username" value="<?php echo $username ?>" hidden>

        <button type="submit" class="newTodoBtn">
            اضافه کردن کار
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
    </form>

    <table>
        <thead>
            <tr>
                <th>شناسه</th>
                <th>موضوع</th>
                <th>توضیحات</th>
                <th>وضعیت</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <button type="button" id="leaveBtn" class="leaveBtn">
        خروج
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
        </svg>
    </button>

    <div class="modal">
    </div>

    <script src="./src/scripts/general/typeWriter.js"></script>
    <script src="./src/scripts/general/404.js"></script>
    <script src="./src/scripts/general/modal.js"></script>
    <script src="./src/scripts/general/todoFuncs.js"></script>
    <script src="./src/scripts/todo.js"></script>
    
</body>
</html>