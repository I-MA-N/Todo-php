const registerFrm = document.getElementById("registerFrm");
const submitBtn = document.getElementById("submitBtn");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");
const fullnameInput = document.getElementById("fullname");

const clickHandler = () => {
    let users = JSON.parse(localStorage.getItem('users'));

    // Regex -> doesn't have any whitespaces
    const usernameValue = usernameInput.value;
    const usernameRst = !/\s/.test(usernameValue) && usernameValue.length > 2;

    // Regex -> has at least one uppercase letter & one digit
    const passwordValue = passwordInput.value;
    const passwordRst = /[A-Z]/.test(passwordValue) && /\d/.test(passwordValue) && passwordValue.length > 7;
    
    const fullnameValue = fullnameInput.value;
    const fullnameRst = fullnameValue.length > 5;
    
    if (usernameRst && passwordRst && fullnameRst) {
        const userExists = users?.find(user => user.username == usernameValue);
        if (!userExists) {
            const newUser = {
                id: users ? users[users.length - 1].id + 1 : 1,
                username: usernameValue,
                password: passwordValue,
                fullname: fullnameValue,
                todos: []
            };
    
            // If we had user in LS-> add newUser to other user objects. else-> add just newUser object to LS
            if (users) {
                users = [
                    ...users,
                    newUser
                ];
            } else {
                users = [ newUser ];
            }
    
            localStorage.setItem('users', JSON.stringify(users));
            sessionStorage.setItem("username", usernameValue);
    
            showModal("تبریک میگم! به جمع ما خوش اومدی :)");
            setTimeout(() => {
                registerFrm.submit();
            }, 2500);
        } else {
            showModal("نام کاربری قبلا استفاده شده! یه نام کاربری دیگه انتخاب کن.");
            setTimeout(() => {
                hideModal();
            }, 2500);
        }
    } else {
        showModal("اعتبار سنجی درست نبود! با دقت فیلد ها رو پر کن.");
        setTimeout(() => {
            hideModal();
        }, 2500);
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
فقط پر کردن چنتا فیلد تا اضافه شدنت به جمع ما مونده!
`;

typeWriter(titleElem, text, 0);

setTimeout(() => {
    typeWriter(titleElem2, text2, 0);
}, 1900);