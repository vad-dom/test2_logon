document.addEventListener("DOMContentLoaded", function () {
    auth.addEventListener("submit", (e) => {
        e.preventDefault();

        const form_data = new FormData(e.target);

        let login = encodeURIComponent(form_data.get("login"));
        let pswd = encodeURIComponent(form_data.get("password"));
        let captcha = encodeURIComponent(form_data.get("captcha"));

        const request = new XMLHttpRequest();
        const url = "logon.php";
        const params = "login=" + login + "&pswd=" + pswd + "&captcha=" + captcha;

        request.open("POST", url, true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        /* один из способов защиты от брутфорса */
        /* задержка незаметна для пользователя, но сильно замедляет подбор логина и пароля */
        setTimeout(() => request.send(params), 100);

        request.addEventListener("readystatechange", () => {
            let error_text = document.getElementById("error_text");
            if (request.readyState === 4 && request.status === 200) {
                if (request.responseText == "ok") {
                    self.location = "/userdata";
                } else {
                    document.getElementById("password").value = "";
                    document.getElementById("captcha").value = "";
                    error_text.innerHTML = request.responseText;
                    error_text.classList.add("active");
                    setTimeout(() => error_text.classList.remove("active"), 5000);
                }
            }
        });
    });
});
