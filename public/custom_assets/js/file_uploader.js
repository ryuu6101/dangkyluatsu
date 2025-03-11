// Modal template
var modalTemplate = '<div class="modal-dialog modal-lg" role="document">\n' +
'  <div class="modal-content">\n' +
'    <div class="modal-header align-items-center">\n' +
'      <h6 class="modal-title">{heading} <small><span class="kv-zoom-title"></span></small></h6>\n' +
'      <div class="kv-zoom-actions btn-group">{toggleheader}{fullscreen}{borderless}{close}</div>\n' +
'    </div>\n' +
'    <div class="modal-body">\n' +
'      <div class="floating-buttons btn-group"></div>\n' +
'      <div class="kv-zoom-body file-zoom-content"></div>\n' + '{prev} {next}\n' +
'    </div>\n' +
'  </div>\n' +
'</div>\n';

// Buttons inside zoom modal
var previewZoomButtonClasses = {
    toggleheader: 'btn btn-light btn-icon btn-header-toggle btn-sm',
    fullscreen: 'btn btn-light btn-icon btn-sm',
    borderless: 'btn btn-light btn-icon btn-sm',
    close: 'btn btn-light btn-icon btn-sm'
};

// Icons inside zoom modal classes
var previewZoomButtonIcons = {
    // prev: $('html').attr('dir') == 'rtl' ? '<i class="icon-arrow-right32"></i>' : '<i class="icon-arrow-left32"></i>',
    // next: $('html').attr('dir') == 'rtl' ? '<i class="icon-arrow-left32"></i>' : '<i class="icon-arrow-right32"></i>',
    toggleheader: '<i class="icon-menu-open"></i>',
    fullscreen: '<i class="icon-screen-full"></i>',
    borderless: '<i class="icon-alignment-unalign"></i>',
    close: '<i class="icon-cross2 font-size-base"></i>'
};

// File actions
var fileActionSettings = {
    zoomClass: '',
    zoomIcon: '<i class="icon-zoomin3"></i>',
    dragClass: 'p-2',
    dragIcon: '<i class="icon-three-bars"></i>',
    removeClass: '',
    removeErrorClass: 'text-danger',
    removeIcon: '<i class="icon-bin"></i>',
    indicatorNew: '<i class="icon-file-plus text-success"></i>',
    indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
    indicatorError: '<i class="icon-cross2 text-danger"></i>',
    indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>'
};

$(document).ready(function() {
    $('.file-input-custom').fileinput({
        previewFileType: 'image',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate,
        },
        initialCaption: "Please select image",
        mainClass: 'input-group',
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings,
    }).on('change', function() {
        let file_count = this.files.length;
        let uploader_id = $(this).attr("data-uploader-id");
        $(`span[data-target="#${uploader_id}"]`).children('span').text(file_count + " file");
    }).on('fileclear', function(event) {
        let uploader_id = $(this).attr("data-uploader-id");
        $(`span[data-target="#${uploader_id}"]`).children('span').text("0 file");
    });

    $('#kvFileinputModal').on('hidden.bs.modal', function () {
        $('body').addClass('modal-open').css('padding-right', '17px');
    });
});