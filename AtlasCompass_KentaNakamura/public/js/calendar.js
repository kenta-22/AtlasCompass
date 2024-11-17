$(function () {
  $('.delete-modal-open').on('click', function () {
    $('.js-modal').fadeIn();
    var reserve_date = $(this).attr('reserve_date');
    var reserve_part = $(this).attr('reserve_part');
    $('.modal-inner-date span').text(reserve_date);
    $('.modal-inner-part span').text(reserve_part);
    $('.modal-inner-date input').val(reserve_date);
    $('.modal-inner-part input').val(reserve_part);
    return false;
  });
  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});
