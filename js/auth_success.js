window.onload = function () {
    // запускает анимацию блока с текстом об успешной авторизации
    const auth_success = document.getElementById("auth_success");
    if (auth_success !== null) {
        auth_success.classList.add("active");
        setTimeout(() => auth_success.classList.remove("active"), 6000);
    }
};
