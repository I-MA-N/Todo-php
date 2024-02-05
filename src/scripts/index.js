const loginFrm = document.getElementById("loginFrm");
const submitBtn = document.getElementById("submitBtn");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");

const clickHandler = () => {
    const users = JSON.parse(localStorage.getItem('users'));

    if (users) {
        const usernameValue = usernameInput.value;
        const passwordValue = passwordInput.value;
        const userExists = users.find(user => user.username == usernameValue && user.password == passwordValue);
        if (userExists) {
            sessionStorage.setItem("username", usernameValue);
            loginFrm.submit();
        } else {
            showModal("مطمئنی نام کاربری یا رمز عبور رو درست زدی؟");
            setTimeout(() => {
                hideModal();
            }, 2500);
        }
    } else {
        showModal("کاربری یافت نشد. اولین نفری باش که ثبت نام میکنی! <a href='register.php' class='modal-link'>ثبت نام</a>");
        setTimeout(() => {
            hideModal();
        }, 3000);
    }
}

submitBtn.addEventListener("click", clickHandler);


// Writing animation
const titleElem = document.querySelector(".title");
const titleElem2 = document.querySelector(".title2");
const text = `
اینجا یه todolist خونست!
`;
const text2 = `
اگر قبلا حساب داشتی با پر کردن فیلد های زیر وارد شو...
`;

typeWriter(titleElem, text, 0);

setTimeout(() => {
    typeWriter(titleElem2, text2, 0);
}, 1900);