import './bootstrap';



var routePath = window.location.pathname;
var routeUrl = window.location.href;

if (routePath.includes("/sign-up") || routePath.includes("/profile/my/edit")) {
    var userInput = document.querySelector("input[name=username]");

    userInput.onkeypress = function (e) {
        if (e.which === 32) {
            return false
        }
    }

}

// ketika di halaman home
if ((routePath.includes("/home") || routePath.includes("/reviews")) && !routePath.includes("/add") && !routePath.includes("/produk")) {

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
if (routePath.includes("reviews/details/")) {
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
if (routeUrl.includes("skincares")) {
    var menuHome = document.querySelector(".menu-skincares .text-btn");
    menuHome.classList.add("font-bold");
    menuHome.classList.replace("text-light-slate-grey", "text-cool-blue");

    var subMenuMyReviews = document.querySelector(".sub-menu.my-reviews .text-btn");
    var subMenuAll = document.querySelector(".sub-menu.all .text-btn");
    var subMenuFw = document.querySelector(".sub-menu.fw .text-btn");
    var subMenuToner = document.querySelector(".sub-menu.toner .text-btn");
    var subMenuSerum = document.querySelector(".sub-menu.serum .text-btn");
    var subMenuMoist = document.querySelector(".sub-menu.moist .text-btn");
    var subMenuSs = document.querySelector(".sub-menu.ss .text-btn");

    subMenuAll.classList.add("font-bold");
    subMenuAll.classList.replace("text-light-slate-grey", "text-medium-forest-green");

    // jika dalam mode pencarian
    if (routeUrl.includes("search") || routeUrl.includes("details")) {
        // kembalikan tampilan sub menu all dan my reviews ke keadaan awal
        subMenuAll.classList.remove("font-bold");
        subMenuAll.classList.replace("text-medium-forest-green", "text-light-slate-grey");
        subMenuMyReviews.classList.remove("font-bold");
        subMenuMyReviews.classList.replace("text-medium-forest-green", "text-light-slate-grey");

    } else if (routeUrl.includes("category")) {
        // jika tidak dalam mode pencarian

        // kembalikan tampilan sub menu my reviews ke keadaan awal
        document.querySelectorAll(".sidebar .text-btn").forEach(subMenu => {
            subMenu.classList.remove("font-bold");
            subMenu.classList.replace("text-medium-forest-green", "text-light-slate-grey");
        });

        if (routeUrl.includes("facial-wash")) {
            subMenuFw.classList.add("font-bold");
            subMenuFw.classList.replace("text-light-slate-grey", "text-medium-forest-green");
        } else if (routeUrl.includes("toner")) {
            subMenuToner.classList.add("font-bold");
            subMenuToner.classList.replace("text-light-slate-grey", "text-medium-forest-green");
        } else if (routeUrl.includes("serum")) {
            subMenuSerum.classList.add("font-bold");
            subMenuSerum.classList.replace("text-light-slate-grey", "text-medium-forest-green");
        } else if (routeUrl.includes("moist")) {
            subMenuMoist.classList.add("font-bold");
            subMenuMoist.classList.replace("text-light-slate-grey", "text-medium-forest-green");
        } else if (routeUrl.includes("sunscreen")) {
            subMenuSs.classList.add("font-bold");
            subMenuSs.classList.replace("text-light-slate-grey", "text-medium-forest-green");
        }

    }
}

// ketika di halaman profile
if (routePath.includes("/profile")) {
    var menuHome = document.querySelector(".menu-profile");
    var subMenuProfile = document.querySelector(".sub-menu.profile .text-btn");
    var subMenuEdit = document.querySelector(".sub-menu.edit .text-btn");
    menuHome.classList.add("font-bold");
    menuHome.classList.replace("text-light-slate-grey", "text-cool-blue")

    // di sub menu edit profile
    if (routePath.includes("edit")) {
        subMenuEdit.classList.add("font-bold");
        subMenuEdit.classList.replace("text-light-slate-grey", "text-medium-forest-green");
        subMenuProfile.classList.remove("font-bold");
        subMenuProfile.classList.replace("text-medium-forest-green", "text-light-slate-grey");
        // di sub menu profile
    } else {
        var username = document.querySelector("header .username").innerHTML;
        if (routePath == "/user/profile/" + username) {
            subMenuProfile.classList.add("font-bold");
            subMenuProfile.classList.replace("text-light-slate-grey", "text-medium-forest-green");
            subMenuEdit.classList.remove("font-bold");
            subMenuEdit.classList.replace("text-medium-forest-green", "text-light-slate-grey");

        }
    }
}

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

function numOnly(event) {
    var ascii = (event.which) ? event.which : event.keyCode
    if (ascii >= 48 && ascii <= 57) {
        return true;
    }
    return false;
}




