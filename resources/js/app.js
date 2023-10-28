import './bootstrap';

function disabledBtn(btn) {
    btn.removeAttribute("href");
    btn.classList.replace("bg-cool-blue", "bg-light-slate-grey")
    btn.classList.replace("hover:bg-cool-blue-hover", "hover:bg-light-slate-grey")
}
function enabledBtn(btn, route) {
    btn.classList.replace("bg-light-slate-grey", "bg-cool-blue")
    btn.classList.replace("hover:bg-light-slate-grey", "hover:bg-cool-blue-hover")
    btn.setAttribute("href", route);
}

// ketika di halaman detail-reviews
if (window.location.pathname.includes("/reviews/")) {
    var commentTextarea = document.getElementsByClassName("textarea")[0];
    var commentBtn = document.getElementsByClassName("elevated-btn")[0];
    var link = document.getElementsByClassName("elevated-btn")[0].getAttribute("href");

    disabledBtn(commentBtn);

    commentTextarea.addEventListener("keyup", function () {
        if (document.getElementsByClassName("textarea")[0].value == "") {
            disabledBtn(commentBtn);
        } else {
            enabledBtn(commentBtn, link)
        }
    })
    commentTextarea.addEventListener("click", function () {
        if (document.getElementsByClassName("textarea")[0].value == "") {
            disabledBtn(commentBtn);
        } else {
            enabledBtn(commentBtn, link)
        }
    })

}



