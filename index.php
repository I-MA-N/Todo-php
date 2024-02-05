<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./src/css/index.css">
</head>
<body dir="rtl">

    <div class="container">
        <h1 class="title">&nbsp</h1>
        <h2 class="title2">&nbsp</h2>
    
        <!-- Submit form in JS when user is validated -->
        <form action="todo.php" method="GET" id="loginFrm" class="form">
            <label for="username">نام کاربری: </label>
            <input type="text" name="username" id="username">

            <label for="password">رمز عبور: </label>
            <div class="password-container">
                <button type="button" id="eyeBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </button>
                <input type="password" id="password">
            </div>
    
            <input type="button" value="ورود" id="submitBtn">
    
            <div>
                <p>اگر هنوز به جمع ما نیومدی، از لینک زیر ثبت نام کن!</p>
                <a href="register.php">
                    ثبت نام
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                    </svg>
                </a>
            </div>

            <span class="circle-2" style="top: -40px; left: 50%;"></span>
            <span class="circle-2" style="top: 50px; left: -15px;"></span>
            <span class="circle-1" style="right: -15px; bottom: -15px;"></span>
            <span class="circle-1" style="bottom: -25px; left: -15px;"></span>
        </form>
    </div>

    <div class="modal">
    </div>


    <script src="./src/scripts/general/typeWriter.js"></script>
    <script src="./src/scripts/general/modal.js"></script>
    <script src="./src/scripts/general/eyeBtn.js"></script>
    <script src="./src/scripts/index.js"></script>
    
</body>
</html>