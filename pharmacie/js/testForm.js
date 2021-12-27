let nom = document.querySelector("#nom");
let prenom = document.querySelector("#prenom");
let email = document.querySelector("#email");
let emaildes = document.querySelector("#emaildes");
let tel = document.querySelector("#tel");
let cni = document.querySelector("#cni");
let region = document.querySelector("#select2");
let pass = document.querySelector("#password");
let con = document.querySelector("#password2");


nom.addEventListener("input", function () {
    if (nom.value.length >= 4) {
        nom.style.borderColor = 'green';
        nom.style.outline = 'green';
        document.querySelector("#erNo").style.display = "none";
    }
    else {
        nom.style.borderColor = 'red';
        nom.style.outline = 'red';
        document.querySelector("#erNo").style.display = "block";
    }
});

prenom.addEventListener("input", function () {
    if (prenom.value.length >= 3) {
        prenom.style.borderColor = 'green';
        prenom.style.outline = 'green';
        document.querySelector("#erPr").style.display = "none";
    }
    else {
        prenom.style.borderColor = 'red';
        prenom.style.outline = 'red';
        document.querySelector("#erPr").style.display = "block";
    }
});

email.addEventListener("input", function () {
    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email.value)) {
        email.style.borderColor = 'green';
        email.style.outline = 'green';
        document.querySelector("#erEm").style.display = "none";
    }
    else {
        email.style.borderColor = 'red';
        email.style.outline = 'red';
        document.querySelector("#erEm").style.display = "block";
    }
});

tel.addEventListener("input", function () {
    let numero = document.getElementById('tel').value;
    if (/^\b6[5|6|7|8|9][0-9]{7}$/.test(tel.value)) {
        tel.style.borderColor = 'green';
        tel.style.outline = 'green';
        document.querySelector("#erTe").style.display = "none";
    }
    else {
        tel.style.borderColor = 'red';
        tel.style.outline = 'red';
        document.querySelector("#erTe").style.display = "block";
    }
});

cni.addEventListener("input", function () {
    if (/^\b[0-9]{9}$/.test(cni.value)) {
        cni.style.borderColor = 'green';
        cni.style.outligne = 'green';
        document.querySelector("#erCn").style.display = "none";
    }
    else {
        cni.style.borderColor = 'red';
        cni.style.outligne = 'red';
        document.querySelector("#erCn").style.display = "block";
    }
});

pass.addEventListener("input", function () {
    if (pass.value.length >= 8 && /[a-z]+[0-9._-]/.test(pass.value)) {
        pass.style.borderColor = 'green';
        pass.style.outline = 'green';
        document.querySelector("#erPa").style.display = "none";
    }
    else {
        pass.style.borderColor = 'red';
        pass.style.outline = 'red';
        document.querySelector("#erPa").style.display = "block";
    }
});

con.addEventListener("input", function () {
    if (pass.value == con.value) {
        con.style.borderColor = 'green';
        con.style.outline = 'green';
        document.querySelector("#erCo").style.display = "none";
    }
    else {
        con.style.borderColor = 'red';
        con.style.outline = 'red';
        document.querySelector("#erCo").style.display = "block";
    }
});