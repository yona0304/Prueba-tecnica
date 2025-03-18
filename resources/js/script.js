document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("login-form");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const loginBtn = document.getElementById("login-btn");
    const bodylogin = document.getElementById("app");
    const logoutBtn = document.getElementById("logout-btn");
    const welcome = document.getElementById("welcome");

    // Verificar si el usuario ya está autenticado
    const user = localStorage.getItem("user");
    if (user) {

        showWelcome(user);
    }

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        if (!validateEmail(email)) {
            Swal.fire({
                text: "Correo electrónico inválido.",
                icon: "warning"
            });
            return;
        }

        if (password.length < 6) {
            Swal.fire({
                text: "La contraseña debe tener al menos 6 caracteres.",
                icon: "warning"
            });
            return;
        }

        // Simulacion de tiempo de carga del boton subtmit
        loginBtn.textContent = "Cargando...";
        setTimeout(() => {
            localStorage.setItem("user", email);
            showWelcome(email);
        }, 1500);
    });

    document.getElementById('ver').addEventListener('change', function (e) {
        const passwordFields = document.querySelectorAll('input[type="password"], input[type="text"]');
        passwordFields.forEach(field => {
            field.type = e.target.checked ? 'text' : 'password';
        });
    });

    logoutBtn.addEventListener("click", () => {
        localStorage.removeItem("user");
        location.reload();
    });

    function showWelcome(user) {
        bodylogin.style.display = "none";
        document.querySelector("#message").innerHTML = `<h2>Bienvenido, ${user} </h2>`;
        welcome.classList.remove("hidden");
    }

    function validateEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
});
