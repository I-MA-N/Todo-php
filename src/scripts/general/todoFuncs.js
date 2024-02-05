const tableHeader = document.querySelector("thead");
const tableBody = document.querySelector("tbody");
const formsContainer = document.getElementById("formsContainer");

// For each todo not only we need a row, but also a form to send todo datas for editing
// Submit form when clicked on edit button
const showTodos = todos => {
    // Clearing string of elements & content of tbody|forms container
    let rowsStr = "";
    let formsStr = "";
    tableBody.innerHTML = "";
    formsContainer.innerHTML = "";
    
    todos.map(todo => {
        rowsStr += `
        <tr>
            <td>
                ${todo.id}
            </td>
            <td>
                ${todo.subject}
            </td>
            <td>
                ${todo.description} 
            </td>
            <td>
                ${todo.completed ? 
                    `
                        تکمیل شده
                    `
                    : 
                    `
                        تکمیل نشده
                    `
                }
            </td>
            <td>
                <button type="button" onclick="document.editFrm${todo.id}.submit()">
                    تغییر
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>
                </button>
                
                <button type="button" id="deleteBtn" onclick="deleteTodo(${todo.id})">
                    حذف
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </td>
        </tr>`
    
        formsStr += `
        <form action="todoForm.php" method="get" name="editFrm${todo.id}">
            <input type="text" name="username" value="${username}" hidden>
            <input type="text" name="id" value="${todo.id}" hidden>
            <input type="text" name="subject" value="${todo.subject}" hidden>
            <input type="text" name="description" value="${todo.description}" hidden>
            <input type="text" name="completed" value="${todo.completed}" hidden>
        </form>`
    })

    // If there is no todo add a text 
    if (!rowsStr) {
        const noTodosStr = `
        <tr>
            <td colspan="5" style="border: 0px">
                <h2>
                    &nbsp
                </h2>
            </td>
        </tr>
        `;
        setTimeout(() => {
            typeWriter(document.querySelector("h2"), "مثل اینکه سرت خلوته! با دکمه بالایی برا خودت کار جور کن =)", 0);
        }, 100);
        // typeWriter(titleElem, text, 0);
        tableHeader.innerHTML = "";
        tableBody.insertAdjacentHTML("beforeend", noTodosStr);
    }

    tableBody.insertAdjacentHTML("beforeend", rowsStr);
    formsContainer.insertAdjacentHTML("beforeend", formsStr);
}

const deleteFromDB = (todoId) => {
    const todoIndex = userData.todos.findIndex(todo => todo.id == todoId);
    userData.todos.splice(todoIndex, 1);
    
    showTodos(userData.todos);

    localStorage.setItem('users', JSON.stringify(users));
    hideModal();
}

const deleteTodo = (todoId) => {
    const modalStr = `
    مطمئنی میخوای حذف کنی؟
    <div>
        <button class='modal-btn' onclick='deleteFromDB(${todoId});'>آره</button>
        <button class='modal-btn' onclick='hideModal();'>نه</button>
    </div>
    `
    showModal(modalStr);
}