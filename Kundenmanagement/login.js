const togglePassword1 = document.querySelector('#togglePassword1');
const togglePassword2 = document.querySelector('#togglePassword2');
const togglePassword3 = document.querySelector('#togglePassword3');

// togglePassword1.addEventListener('click', togglefun(togglePassword1 ,document.querySelector('#password')));
// togglePassword2.addEventListener('click', togglefun(togglePassword2 ,document.querySelector('#regpassword')));
// togglePassword3.addEventListener('click', togglefun(togglePassword3 ,document.querySelector('#conpassword')));

// function togglefun(eye, password) {
//     // toggle the type attribute
//     const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
//     password.setAttribute('type', type);
//     // toggle the eye / eye slash icon
//     eye.classList.toggle('bi-eye');
// };

togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});

togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = regpassword.getAttribute('type') === 'password' ? 'text' : 'password';
    regpassword.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});

togglePassword3.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = conpassword.getAttribute('type') === 'password' ? 'text' : 'password';
    conpassword.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});