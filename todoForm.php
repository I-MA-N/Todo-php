<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Form</title>
    <link rel="stylesheet" href="./src/css/todoForm.css">
</head>
<body dir="rtl">

    <h1 class="title">کارت تغییر کرده یا تموم شده؟ :)</h1>

    <div class="form">
        <label for="subject">موضوع: </label>
        <input type="text" name="subject" value="<?php if ( isset($_GET["subject"]) ) {echo $_GET["subject"];} ?>" id="subject">
    
        <label for="description">توضیحات: </label>
        <input type="text" name="description" value="<?php if ( isset($_GET["description"]) ) {echo $_GET["description"];} ?>" id="description">
    
        <div class="checkbox-container">
            <label for="completed">کامل شده: </label>
            <input type="checkbox" name="completed" <?php 
                if ( isset($_GET["completed"]) && $_GET["completed"] === "true") {
                    echo "checked";
                } 
            ?> id="completed">
        </div>
    
        <input type="button" value="ذخیره" id="saveBtn">
        
        <span class="circle-2" style="top: -30px; right: -5px;"></span>
        <span class="circle-2" style="top: 90px; left: -15px;"></span>
        <span class="circle-1" style="right: -10px; bottom: 5px;"></span>
        <span class="circle-1" style="bottom: 20%; left: -15px;"></span>
    </div>

    <button type="button" onclick="history.back()" class="cancel-btn">
        انصراف
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>

    <div class="modal"></div>

    <script src="./src/scripts/general/modal.js"></script>
    <script src="./src/scripts/general/404.js"></script>
    <script src="./src/scripts/todoForm.js"></script>
    
</body>
</html>