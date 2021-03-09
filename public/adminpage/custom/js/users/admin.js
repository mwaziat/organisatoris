$(document).ready(function () {
    $('.notif').hide();
    $('#fullName').autocomplete({
        minLength: 1,
        source: '/admin/checking',
        focus: function (event, ui) {
            $("#fullName").val(ui.item.label);
            return false;
        }, select: function (event, ui) {
            if (ui.item.msg == 'error') {
                toastr.error(ui.item.label);
            } else {
                $('#nickName').val(ui.item.nickname);
                $('#username').val(ui.item.username);
                $('#email').val(ui.item.email);
                $("#role option[value="+ ui.item.role_id + "]").attr('selected', 'selected').change();
                $('#creatAdmin').attr('action','/admin/update/'+ui.item.login_id)
            }
        }
    })
});