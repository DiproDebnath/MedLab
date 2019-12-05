/**
 * Theme: Scoxe - Admin & Dashboard Template
 * Author: Myra Studio
 * File: Main Js
 */


!function (t) {
    "use strict";
    t("#side-menu").metisMenu(),
        t("#vertical-menu-btn").on("click", function () {
        t("body").toggleClass("enable-vertical-menu")
    }),
        t(".menu-overlay").on("click", function () {
        t("body").removeClass("enable-vertical-menu")
    }),
        t("#sidebar-menu a").each(function () {
        var a = window.location.href.split(/[?#]/)[0];
        this.href == a && (t(this).addClass("active"), t(this).parent().addClass("mm-active"), t(this).parent().parent().addClass("mm-show"), t(this).parent().parent().prev().addClass("mm-active"), t(this).parent().parent().parent().addClass("mm-active"), t(this).parent().parent().parent().parent().addClass("mm-show"), t(this).parent().parent().parent().parent().parent().addClass("mm-active"))
    }),
        t(function () {
        t('[data-toggle="tooltip"]').tooltip()
    }),
        t(function () {
        t('[data-toggle="popover"]').popover()
    }),
        Waves.init();
        var btn_sidbar = document.querySelector('#btn-sidebar');

        var varticalMenu = document.querySelector('.vertical-menu');
        var mainContent = document.querySelector('.main-content');
        mainContent.style.transition = "0.5s";
        varticalMenu.style.transition = "0.5s";
        btn_sidbar.addEventListener('click', function(){

            if(varticalMenu.style.width === "0px"){
                varticalMenu.style.width = "250px";
                mainContent.style.marginLeft = "250px";
            }else{
                varticalMenu.style.width = "0px";
                mainContent.style.marginLeft = "0px";
            }
        });


}(jQuery);
