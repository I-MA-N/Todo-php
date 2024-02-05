const leaveBtn = document.getElementById("leaveBtn");

const url = new URL(window.location);
const username = url.searchParams.get("username");

const users = JSON.parse(localStorage.getItem("users"));
const userData = users?.find(user => user.username == username);

const sessionUsername = sessionStorage.getItem("username");

// Check if user logged in & has an account
if (sessionUsername) {
    // Calling function to show todos for the first time
    showTodos(userData.todos);

    // Handle click for leaving user from profile
    leaveBtn.addEventListener("click", () => {
        sessionStorage.removeItem("username");
        location.replace("index.php");
    });
} else {
   show404();
}