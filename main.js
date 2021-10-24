const pass_field = document.querySelector("#password");//Select Password Field
const show_btn = document.querySelector("#show_btn");//Select Password Show Btn

function showPass() {
    if(pass_field.type === "password") {
        pass_field.type = "text";
        show_btn.innerHTML = "<img src='visibility_off.png'>";
    } else {
        pass_field.type = "password";
        show_btn.innerHTML = "<img src='visibility.png'>";
    }
}