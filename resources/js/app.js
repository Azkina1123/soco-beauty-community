import './bootstrap';

function disabledBtn(btn) {
    btn.classList.replace("bg-cool-blue", "bg-light-slate-grey")
    btn.classList.replace("hover:bg-cool-blue-hover", "hover:bg-light-slate-grey")

    btn.disbaled = true;
}
function enabledBtn(btn) {
    btn.classList.replace("bg-light-slate-grey", "bg-cool-blue")
    btn.classList.replace("hover:bg-light-slate-grey", "hover:bg-cool-blue-hover")
    btn.disbaled = false;
}

var routePath = window.location.pathname;
var routeUrl = window.location.href;

// ketika di halaman home
if ((routePath.includes("/home") || routePath.includes("/reviews")) && !routePath.includes("/add")) {

    var menuHome = document.querySelector(".menu-home .text-btn");
    var subMenuMyReviews = document.querySelector(".sub-menu.my-reviews .text-btn");
    var subMenuAll = document.querySelector(".sub-menu.all .text-btn");

    // tekankan menu Home pada header
    menuHome.classList.add("font-bold");
    menuHome.classList.replace("text-light-slate-grey", "text-cool-blue")

    // jika dalam mode pencarian
    if (routeUrl.includes("search") || routeUrl.includes("details")) {
        // kembalikan tampilan sub menu all dan my reviews ke keadaan awal
        subMenuAll.classList.remove("font-bold");
        subMenuAll.classList.replace("text-medium-forest-green", "text-light-slate-grey");
        subMenuMyReviews.classList.remove("font-bold");
        subMenuMyReviews.classList.replace("text-medium-forest-green", "text-light-slate-grey");

    } else {
        // jika tidak dalam mode pencarian

        if (routePath.includes("/reviews/")) {
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
}

// ketika di halaman detail-reviews
if (routePath.includes("/details/")) {
    var commentTextarea = document.getElementsByClassName("textarea")[0];
    var commentBtn = document.getElementsByClassName("elevated-btn")[0];
    // var link = document.getElementsByClassName("elevated-btn")[0].getAttribute("href");

    disabledBtn(commentBtn);

    commentTextarea.addEventListener("keyup", function () {
        if (document.getElementsByClassName("textarea")[0].value == "") {
            disabledBtn(commentBtn);
        } else {
            enabledBtn(commentBtn)
        }
    })

    commentTextarea.addEventListener("click", function () {
        if (document.getElementsByClassName("textarea")[0].value == "") {
            disabledBtn(commentBtn);
        } else {
            enabledBtn(commentBtn)
        }
    })

}

// ketika di halaman select-skincare
if (routePath.includes("/select-skincare")) {
    var nextRoute = document.querySelector(".next-btn");
    nextRoute.removeAttribute("href"); // hapus route karena masih disable

    var nextBtn = document.querySelector(".next-btn .elevated-btn");
    disabledBtn(nextBtn);

    var radios = document.querySelectorAll("input[type=radio]");

    radios.forEach(radio => {
        radio.addEventListener("change", function () {
            var checkedRadio = document.querySelector("input[type=radio]:checked");
            nextRoute.setAttribute("href", "/user/reviews/add/" + checkedRadio.value + "/form");
            enabledBtn(nextBtn);
        });
    });

}

// ketika di halaman skincares
if (routePath.includes("/skincares")) {
    var menuHome = document.querySelector(".menu-skincares .text-btn");
    menuHome.classList.add("font-bold");
    menuHome.classList.replace("text-light-slate-grey", "text-cool-blue")
}

// ketika di halaman profile
if (routePath.includes("/profile")) {
    var menuHome = document.querySelector(".menu-profile");
    menuHome.classList.add("font-bold");
    menuHome.classList.replace("text-light-slate-grey", "text-cool-blue")
}






