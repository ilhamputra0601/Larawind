$(document).ready(function () {
    // scroll event
    const header = $('header');
    const top = $('#toTop');
    $(window).scroll(function () {
        let scroll = $(window).scrollTop();
        // navbar fixed
        if (scroll >= 1) {
            $(header).addClass('navbar-fixed');
        } else {
            $(header).removeClass('navbar-fixed');
        }
        // scroll ToTop
        if (scroll >= 1000) {
            $(top).removeClass('hidding');
        } else {
            $(top).addClass('hidding');
        }
    });

    // Hamburger
    const hamburger = $('#hamburger');
    const navMenu = $('#nav-menu');
    $(hamburger).click(function (e) {
        $(hamburger).toggleClass('hamburger-active');
        $(navMenu).slideToggle('slow');
        e.preventDefault();
    });
    // Hamburger close offside
    $(document).click(function (e) {
        if ($(hamburger).hasClass('hamburger-active') && $("#nav-menu").is(':visible') && !$(e.target).closest('#hamburger, #nav-menu').length) {
            $(hamburger).removeClass('hamburger-active');
            $(navMenu).slideUp('slow');
        }
    });

    // darkmode
    const dark = $('#dark');
    $(dark).click(function (e) {
        $('#terang').toggleClass('hidden');
        $('#gelap').toggleClass('hidden');
        let malam = $('#gelap').hasClass('hidden');
        if (malam) {
            $('html').addClass('dark');
            localStorage.theme = 'dark';
        } else {
            $('html').removeClass('dark');
            localStorage.theme = 'light'
        }
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            $(gelap).hasClass('hidden') = true;
        } else {
            $(gelap).hasClass() = false;
        }
        e.preventDefault();
    });

    // carousel
    var cont = 0;
    function loopSlider() {
        var xx = setInterval(function () {
            switch (cont) {
                case 0: {
                    $("#slider-1").fadeOut(400);
                    $("#slider-2").delay(400).fadeIn(400);
                    $("#sButton1").removeClass("bg-sky-800");
                    $("#sButton2").addClass("bg-sky-800");
                    cont = 1;
                    break;
                }
                case 1: {
                    $("#slider-2").fadeOut(400);
                    $("#slider-1").delay(400).fadeIn(400);
                    $("#sButton2").removeClass("bg-sky-800");
                    $("#sButton1").addClass("bg-sky-800");
                    cont = 0;
                    break;
                }
            }
        }, 8000);
    }
    function reinitLoop(time) {
        clearInterval(xx);
        setTimeout(loopSlider(), time);
    }
    //slider
    function sliderButton1() {

        $("#slider-2").fadeOut(400);
        $("#slider-1").delay(400).fadeIn(400);
        $("#sButton2").removeClass("bg-sky-800");
        $("#sButton1").addClass("bg-sky-800");
        reinitLoop(4000);
        cont = 0
    }
    function sliderButton2() {
        $("#slider-1").fadeOut(400);
        $("#slider-2").delay(400).fadeIn(400);
        $("#sButton1").removeClass("bg-sky-800");
        $("#sButton2").addClass("bg-sky-800");
        reinitLoop(4000);
        cont = 1
    }
    $(window).ready(function () {
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-sky-800");
        loopSlider();
    });

    //pembungkus
});


    // slugable
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
    //remove fitur upload file trix-editor
    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    })

    //  img preview
function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';
    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
