function toggleForms() {
        const loginForm = document.querySelector("#login-form");
        const signupForm = document.querySelector("#signup-form");

        loginForm.classList.toggle("d-none");
        signupForm.classList.toggle("d-none");
}

document.querySelector("#signup-btn").addEventListener("click", toggleForms);
