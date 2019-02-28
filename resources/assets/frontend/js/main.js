$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        dots: false,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1.5
            },
            992: {
                items: 2.5,
                nav: true
            },
            1366: {
                items: 2.5,
                nav: true
            }
        }
    });
    $(document).on('click', '.on-story-preview', function () {
        var $this = $(this),
            story_url = $this.closest('.story').data('url');
        $.ajax({
            url: story_url,
            method: 'GET',
            cache: false,
            dataType: 'html'
        }).done(function (res) {
            $('#storyPreviewModal .modal-body').html(res);
            $('#storyPreviewModal').modal('show');
        })
        return false;
    }).on('click', '#new-tab', function () {
        var $this = $(this),
            $target = $($this.attr('href')),
            story_url = $this.data('url');
        if (!!$target.text().trim()) {
            return;
        }
        $.ajax({
            url: story_url,
            method: 'GET',
            cache: false,
            dataType: 'html'
        }).done(function (res) {
            $target.html(res);
        })
    });
    $('#logout').on('click', function (e) {
        e.preventDefault();
        $('#logoutForm').submit();
    });
    // TODO: dev
    $.ajaxSetup({
        complete: function () {
            Holder.run();
        }
    })
});
