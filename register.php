<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./src/css/register.css">
</head>
<body dir="rtl">

    <h1 class="title">&nbsp</h1>
    <h2 class="title2">&nbsp</h2>

    <!-- Submit form in JS when user registered successfully -->
    <form action="todo.php" method="GET" id="registerFrm" class="form">
        <label for="username">نام کاربری: </label>
        <div class="validation-container">
            <input type="text" name="username" id="username">
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    نام کاربری حداقل 3 تا کاراکتر داشته باشه
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    نام کاربری هیچ جای خالی نداشته باشه
                </li>
            </ul>
        </div>

        <label for="password">رمز عبور: </label>
        <div class="validation-container">
            <div class="password-container">
                <button type="button" id="eyeBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </button>
                <input type="password" id="password">
            </div>
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    رمز عبور حداقل 8 تا کاراکتر داشته باشه
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    رمز عبور حداقل حاوی یک عدد باشه
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    رمز عبور حداقل حاوی یک حرف بزرگ باشه
                </li>
            </ul>
        </div>   

        <label for="fullname">اسم کامل: </label>
        <div class="validation-container">
            <input type="text" id="fullname">
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                    اسم کامل حداقل دارای 6 تا کاراکتر باشه
                </li>
            </ul>
        </div>

        <input type="button" value="ثبت نام" id="submitBtn">

        <div>
            <p>از قبل عضو بودی؟</p>
            <a href="index.php">
                ورود
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </a>
        </div>

        <span class="circle-2" style="top: -10px; right: -15px;"></span>
        <span class="circle-2" style="top: 70px; left: -30px;"></span>
        <span class="circle-1" style="right: -15px; bottom: -15px;"></span>
        <span class="circle-1" style="left: -25px; top: 35%;"></span>
        <span class="circle-2" style="right: -15px; top: 65%;"></span>
        <span class="circle-1" style="bottom: 25px; left: -15px;"></span>
    </form>

    <div class="modal">
    </div>


    <script src="./src/scripts/general/typeWriter.js"></script>
    <script src="./src/scripts/general/modal.js"></script>
    <script src="./src/scripts/general/eyeBtn.js"></script>
    <script src="./src/scripts/register.js"></script> 
    
</body>
</html>