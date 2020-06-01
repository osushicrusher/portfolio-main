const burger = document.getElementById("js-burger");
const headerNav = document.getElementById("js-headerNav");

const navToggle = () => {
    const isOpen = burger.getAttribute("aria-expanded");
    if (isOpen === 'false') {
        headerNav.classList.add("header-nav--open");
        burger.setAttribute("aria-expanded", "true");
    } else {
        headerNav.classList.remove("header-nav--open");
        burger.setAttribute("aria-expanded", "false");
    }
}

burger.addEventListener("click", navToggle);
headerNav.addEventListener("click", navToggle);

// アドレスが有効か、emailとemailCheckで同じものが入力されているか

const email = document.getElementById("js-email");
const emailCheck = document.getElementById("js-emailCheck");
const submitBtn = document.getElementById("js-submit");

emailCheck.addEventListener("blur", () => {
    // 正規表現の設定
    const regexp = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;

    if (regexp.test(email.value)) {
        if (email.value === emailCheck.value) {
            submitBtn.removeAttribute("disabled");
        } else {
            submitBtn.setAttribute("disabled", true);
        }
    }
})






