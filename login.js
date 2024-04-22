function login() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;


        if (username == "benkosko" && password == "beniscool123") {
            localStorage.setItem("sessionID",true)
            window.location.href = 'homepage.html';
        } else {
            localStorage.setItem("sessionID",false)
            loginError.style.display = 'block';
            loginMSG.style.display = 'none';
        }
}