$(document).ready(function () {
    $('.nav-link').click(function (event) {
        if (this.hash !== "" && this.hash !== "#") {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $(this.hash).offset().top
            }, 50);
        }
    });

    $('#link1').click(function () {
        $('.nav-item').removeClass('active');
        $('#home').addClass('active');
    });
    $('#link2').click(function () {
        $('.nav-item').removeClass('active');
        $('#home').addClass('active');
    });
});

$('.owl-carousel').owlCarousel({
    stagePadding: 50,
    loop: true,
    margin: 30,
    nav: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1100,
    navText: [
        "<i class='fa fa-caret-left'></i>",
        "<i class='fa fa-caret-right'></i>"
    ],
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 3
        },
        1000: {
            items: 6
        }
    }
})


function openModal() {
    $('#applyService').modal('show');
}

function closeModal() {
    $('#applyService').modal('hide');
}

function applyService() {
    closeModal();
}
