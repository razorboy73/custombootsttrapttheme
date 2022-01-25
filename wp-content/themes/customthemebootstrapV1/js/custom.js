(function ($) {
  $(document).ready(function () {
    $(".default_sidebar > ul").addClass("list-group list-group-flush");
    $(".default_sidebar > ul >li ").addClass("list-group-item");
    $(".default_sidebar > ul >li >a ").addClass(
      "text-decoration-none text-dark"
    );

    $(".footer_widget > ul").addClass("list-unstyled");
    $(".footer_widget > ul >li >a ").addClass(
      "text-decoration-none text-white"
    );

    $(".main-header img").addClass("rounded");

    $("#comments #reply-title").addClass("fs-5 fw-600 text-dark");

    $("#commentform >p").addClass("m-0");
    $(
      "#commentform #comment, #commentform #author, #commentform #email, #commentform #url"
    ).addClass("form-control form-control-sm mb-2");

    $("comment-form-cookies-consent").addClass("mb-2");
  });
})(jQuery);
