const username = document.getElementById("username");
const password = document.getElementById("password");
const masuk = document.getElementById("btnLogin");
const form = document.getElementById("loginForm");

masuk.addEventListener("click", function() {
    if (username.value === ""){
        alert("username harus di isi");
    }   else if (password.value === ""){
            alert("password harus di isi");
        }   else {
            alert("login berhasil")
            }
});

const registerForm = document.getElementById ("registerForm");
const loginForm = document.getElementById ("loginForm");
const linkDaftar = document.getElementById ("linkDaftar");
const linkLogin = document.getElementById ("linkLogin");

linkDaftar.addEventListener("click", function(event){
    event.preventDefault();

    loginPage.style.display = "none";
    registerPage.style.display = "block";
    
})

linkLogin.addEventListener("click", function(event){
    event.preventDefault();

    loginPage.style.display = "block";
    registerPage.style.display = "none";
})