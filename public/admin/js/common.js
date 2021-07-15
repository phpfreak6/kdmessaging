function flashMessage(message, type) {
    swal({
        toast: true,
        timer: 3000,
        showConfirmButton: false,
        type: '' + type + '',
        position: 'top',
        title: '' + message + ''
    });
}

function flashToastError(message) {
    toastr.options = {"closeButton": true, "timeOut": "0", "extendedTimeOut": "0"};
    toastr.error(message);
}

function flashToastSuccess(message) {
    toastr.options = {"closeButton": true, "timeOut": "0", "extendedTimeOut": "0"};
    toastr.success(message);
}



function resetFilters() {
    location.reload();
}

function blockScreen() {
    $.fn.center = function () {
        this.css("position", "absolute");
        this.css("top", ($(window).height() - this.height()) / 2 + $(window).scrollTop() + "px");
        this.css("left", ($(window).width() - this.width()) / 2 + $(window).scrollLeft() + "px");
        return this;
    }
    $.blockUI({
        css: {
            backgroundColor: 'transparent',
            border: 'none'
        },
        message: '<i style="font-size:80px;color:#000080;" class="ace-icon fa fa-spinner fa-spin"></i>',
        baseZ: 1500,
        overlayCSS: {
            backgroundColor: '#FFFFFF',
            opacity: 0.5,
            cursor: 'wait'
        }
    });
    $('.blockUI.blockMsg').center();
}

function unblockScreen() {
    $.unblockUI();
}

$(document).ready(function () {

});