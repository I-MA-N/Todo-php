const saveBtn = document.getElementById("saveBtn");
const subjectInput = document.getElementById("subject");
const descriptionInput = document.getElementById("description");
const completedInput = document.getElementById("completed");

const url = new URL(window.location);
const username = url.searchParams.get("username");
const todoId = url.searchParams.get("id");

let users = JSON.parse(localStorage.getItem("users"));
const userData = users.find(user => user.username == username);

const sessionUsername = sessionStorage.getItem("username");

if (!sessionUsername) {
    show404();
}

const clickHandler = () => {

    if (subjectInput.value && descriptionInput.value) {

        // If there is an id query in url-> edit mode else-> add mode 
        if (todoId) {
            const todoIndex = userData.todos.findIndex(todo => todo.id == todoId);

            const newTodo = {
                ...userData.todos[todoIndex],
                subject: subjectInput.value,
                description: descriptionInput.value,
                completed: completedInput.checked
            }

            userData.todos[todoIndex] = newTodo;
            console.log(userData.todos);
        } else {
            const newTodo = {
                id: userData.todos.length ? userData.todos[userData.todos.length - 1].id + 1 : 1,
                subject: subjectInput.value,
                description: descriptionInput.value,
                completed: completedInput.checked
            }
    
            userData.todos.push(newTodo);
        }

        localStorage.setItem('users', JSON.stringify(users));
        history.back();
    } else {
        showModal("موضوع یا توضیحات رو خالی گذاشتی!");
        setTimeout(() => {
            hideModal();
        }, 2500);
    }

}

saveBtn.addEventListener("click", clickHandler);