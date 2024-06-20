$(document).on('click', '.btn-remove-preview-filemedias', function () {
    $(this).closest('.file-input').find('.btn-open-medias').show();
});

$(document).on('click', '.btn-open-medias', function () {
    $('#modal-medias').modal('show');
});