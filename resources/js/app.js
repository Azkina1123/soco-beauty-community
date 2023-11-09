import './bootstrap';

function disabledBtn(btn) {
    btn.removeAttribute("href");
    btn.classList.replace("bg-cool-blue", "bg-light-slate-grey")
    btn.classList.replace("hover:bg-cool-blue-hover", "hover:bg-light-slate-grey")

    btn.disbaled = true;
}
function enabledBtn(btn, route) {
    btn.classList.replace("bg-light-slate-grey", "bg-cool-blue")
    btn.classList.replace("hover:bg-light-slate-grey", "hover:bg-cool-blue-hover")
    btn.setAttribute("href", route);
}

var route = window.location.pathname;

// ketika di halaman home
if (route.includes("/home") || route.includes("/reviews")) {

    var menuHome = document.querySelector(".menu-home .text-btn");
    var subMenuMyReviews = document.querySelector(".sub-menu.my-reviews .text-btn");
    var subMenuAll = document.querySelector(".sub-menu.all .text-btn");

    // tekankan menu Home pada header
    menuHome.classList.add("font-bold");
    menuHome.classList.replace("text-light-slate-grey", "text-cool-blue")

    if (route.includes("my-reviews")) {
        // tekankan sub menu My Reviews pada sidebar
        subMenuMyReviews.classList.add("font-bold");
        subMenuMyReviews.classList.replace("text-light-slate-grey", "text-medium-forest-green");

        // kembalikan tampilan sub menu my reviews ke keadaan awal
        subMenuAll.classList.remove("font-bold");
        subMenuAll.classList.replace("text-medium-forest-green", "text-light-slate-grey");

    } else {
        // tekankan sub menu All pada sidebar
        subMenuAll.classList.add("font-bold");
        subMenuAll.classList.replace("text-light-slate-grey", "text-medium-forest-green")

        // kembalikan tampilan sub menu my reviews ke keadaan awal
        subMenuMyReviews.classList.remove("font-bold");
        subMenuMyReviews.classList.replace("text-medium-forest-green", "text-light-slate-grey");
    }
}

// ketika di halaman skincares
if (route == "/skincares") {
    var menuHome = document.querySelector(".menu-skincares .text-btn");
    menuHome.classList.add("font-bold");
    menuHome.classList.replace("text-light-slate-grey", "text-cool-blue")
}

// ketika di halaman profile
if (route == "/profile") {
    var menuHome = document.querySelector(".menu-profile");
    menuHome.classList.add("font-bold");
    menuHome.classList.replace("text-light-slate-grey", "text-cool-blue")
}


// ketika di halaman detail-reviews
if (route.includes("/reviews/")) {
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




