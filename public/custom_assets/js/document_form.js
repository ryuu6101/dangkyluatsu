let family_member_count = 0;
function add_family_member_row() {
    let count = family_member_count++;

    $(` <tr class="family-member-row">
            <td class="text-center sn-cell"></td>
            <td class="text-center">
                <input type="text" class="form-control form-control-sm" required
                placeholder="Nhập dữ liệu" name="family_members[${count}][relationship]"
                data-input-name="family_members_relationship" oninput="validate(this)">
                <span class="error-message text-danger"></span>
            </td>
            <td class="text-center">
                <input type="text" class="form-control form-control-sm" required 
                placeholder="Nhập dữ liệu" name="family_members[${count}][fullname]"
                data-input-name="family_members_fullname" oninput="validate(this)">
                <span class="error-message text-danger"></span>
            </td>
            <td class="text-center">
                <input type="number" class="form-control form-control-sm" required 
                placeholder="Nhập dữ liệu" name="family_members[${count}][birth_year]"
                data-input-name="family_members_birth_year" oninput="validate(this)">
                <span class="error-message text-danger"></span>
            </td>
            <td class="text-center">
                <input type="text" class="form-control form-control-sm" required 
                placeholder="Nhập dữ liệu" name="family_members[${count}][job]"
                data-input-name="family_members_job" oninput="validate(this)">
                <span class="error-message text-danger"></span>
            </td>
            <td class="text-center">
                <input type="text" class="form-control form-control-sm" required 
                placeholder="Nhập dữ liệu" name="family_members[${count}][workplace]"
                data-input-name="family_members_workplace" oninput="validate(this)">
                <span class="error-message text-danger"></span>
            </td>
            <td class="text-center">
                <div class="custom-control custom-control-warning custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="1"
                    id="family_members_deceased_${count}" name="family_members[${count}][deceased]">
                    <label class="custom-control-label p-0" for="family_members_deceased_${count}"></label>
                </div>
            </td>
            <td class="text-center">
                <button type="button" class="btn btn-outline-danger" onclick="remove_row(this)">
                    <i class="icon-trash"></i>
                </button>
            </td>
        </tr>
    `).insertBefore('.add-family-member-button');

    add_sequence_number($('.family-members-container'));
}

let working_record_count = 0;
function add_working_record_row() {
    let count = working_record_count++;

    $(` <tr class="working-record-row">
            <td class="text-center sn-cell"></td>
            <td class="text-center">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control form-control-sm datepicker" required  
                        placeholder="Nhập dữ liệu" name="working_records[${count}][from_date]"
                        data-input-name="working_records_from_date" data-row="${count}" oninput="validate(this)">
                        <span class="error-message text-danger"></span>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control form-control-sm datepicker" required  
                        placeholder="Nhập dữ liệu" name="working_records[${count}][to_date]"
                        data-input-name="working_records_to_date" data-row="${count}" oninput="validate(this)">
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
            </td>
            <td class="text-center">
                <input type="text" class="form-control form-control-sm" required 
                placeholder="Nhập dữ liệu" name="working_records[${count}][job]"
                data-input-name="working_records_job" oninput="validate(this)">
                <span class="error-message text-danger"></span>
            </td>
            <td class="text-center">
                <input type="text" class="form-control form-control-sm" required 
                placeholder="Nhập dữ liệu" name="working_records[${count}][workplace]"
                data-input-name="working_records_workplace" oninput="validate(this)">
                <span class="error-message text-danger"></span>
            </td>
            <td class="text-center">
                <input type="text" class="form-control form-control-sm" 
                placeholder="Nhập dữ liệu" name="working_records[${count}][position]">
                <span class="error-message text-danger"></span>
            </td>
            <td class="text-center">
                <input type="text" class="form-control form-control-sm" 
                placeholder="Nhập dữ liệu" name="working_records[${count}][note]">
                <span class="error-message text-danger"></span>
            </td>
            <td class="text-center">
                <button type="button" class="btn btn-outline-danger" onclick="remove_row(this)">
                    <i class="icon-trash"></i>
                </button>
            </td>
        </tr>
    `).insertBefore('.add-working-record-button');

    add_sequence_number($('.working-records-container'));
}

function remove_row(btn) {
    let container = $(btn.parentElement.parentElement.parentElement);
    btn.parentElement.parentElement.remove();
    add_sequence_number(container);
}

function add_sequence_number(container) {
    let sn = 1;
    container.find('.sn-cell').each(function() {
        $(this).text(sn++);
    });
}

function validate(input) {
    let next_sibling = input.nextElementSibling;
    if (next_sibling && !next_sibling.classList.contains("error-message")) return true;
    
    let input_name = input.getAttribute("name");
    let value = input.value;
    let is_datepicker = input.classList.contains("datepicker");
    let date = is_datepicker ? moment(value, "DD/MM/YYYY") : '';
    let pattern;
    let error_message = input.nextElementSibling;
    error_message.style.maxHeight = 0;

    if (input.hasAttribute("required") && input.value == '') {
        error_message.innerText = "Vui lòng điền trường này";
        error_message.style.maxHeight = "200px";
        return false;
    }

    pattern = /^([A-Za-zaAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ]+[\s]*)+$/g;
    if (["fullname", "ethnic", "religious"].includes(input_name) && !pattern.test(input.value)) {
        error_message.innerText = input_name == "fullname" ? "Vui lòng chỉ nhập chữ in hoa" : "Vui lòng nhập đúng";
        error_message.style.maxHeight = "200px";
        return false;
    }

    pattern = /^(0|\+84)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/;
    if (input_name == "phone_number" && !pattern.test(input.value)) {
        error_message.innerText = "Vui lòng nhập đúng số điện thoại";
        error_message.style.maxHeight = "200px";
        return false;
    }

    pattern = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;
    if (input_name == "email" && !pattern.test(input.value)) {
        error_message.innerText = "Vui lòng nhập email đúng định dạng";
        error_message.style.maxHeight = "200px";
        return false;
    }

    pattern = /^[0-9]{9}$|^[0-9]{12}$/g;
    if (input_name == "id_card_number" && !pattern.test(input.value)) {
        error_message.innerText = "Vui lòng nhập đúng định dạng căn cước công dân";
        error_message.style.maxHeight = "200px";
        return false;
    }

    // pattern = /^(1[0-2]|0?[1-9])([\/-])(3[01]|[12][0-9]|0?[1-9])(?:\2)(?:[0-9]{2})?[0-9]{2}$/;
    pattern = /^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/;
    if (is_datepicker && !pattern.test(input.value)) {
        error_message.innerText = "Vui lòng nhập đúng định dạng ngày tháng";
        error_message.style.maxHeight = "200px";
        return false;
    }

    if (input_name == "birthday" && date.diff(moment(), 'year') > -22) {
        error_message.innerText = "Ngày sinh không hợp lệ";
        error_message.style.maxHeight = "200px";
        return false;
    }

    pattern = /(?:(?:15|16|17|18|19|20|21)[0-9]{2})/g;
    if (input.getAttribute("data-input-name") == "family_members_birth_year" && !pattern.test(input.value)) {
        error_message.innerText = "Vui lòng nhập đúng";
        error_message.style.maxHeight = "200px";
        return false;
    }

    if (input.getAttribute("data-input-name") == "working_records_from_date") {
        if (date.diff(moment()) >= 0) {
            error_message.innerText = "Thời gian không hợp lệ";
            error_message.style.maxHeight = "200px";

            new Noty({
                text: 'Ngày bắt đầu phải trước ngày hiện tại.',
                type: 'error',
            }).show();

            return false;
        }

        let row = input.getAttribute("data-row");
        let to_date = $(`input[data-input-name="working_records_to_date"][data-row="${row}"]`).val();
        if (date.diff(moment(to_date, "DD/MM/YYYY")) >= 0) {
            error_message.innerText = "Thời gian không hợp lệ";
            error_message.style.maxHeight = "200px";

            new Noty({
                text: 'Ngày bắt đầu phải trước ngày kết thúc.',
                type: 'error',
            }).show();

            return false;
        }
    }

    if (input.getAttribute("data-input-name") == "working_records_to_date") {
        if (date.diff(moment()) >= 0) {
            error_message.innerText = "Thời gian không hợp lệ";
            error_message.style.maxHeight = "200px";

            new Noty({
                text: 'Ngày kết thúc phải trước ngày hiện tại.',
                type: 'error',
            }).show();

            return false;
        }

        let row = input.getAttribute("data-row");
        let from_date = $(`input[data-input-name="working_records_from_date"][data-row="${row}"]`).val();
        if (date.diff(moment(from_date, "DD/MM/YYYY")) <= 0) {
            error_message.innerText = "Thời gian không hợp lệ";
            error_message.style.maxHeight = "200px";

            new Noty({
                text: 'Ngày bắt đầu phải trước ngày kết thúc.',
                type: 'error',
            }).show();

            return false;
        }
    }

    return true;
}

function validateAll(formId) {
    let has_error = false;
    let form = document.getElementById(formId);

    if ($('input[name="portrait_pic"]').val() == '') {
        new Noty({
            text: 'Vui lòng chọn ảnh 3x4.',
            type: 'warning',
        }).show();
        has_error = true;
    }

    form.querySelectorAll('input[type="text"],select').forEach(e => {
        if (!validate(e) && !has_error) {
            has_error = true;
            window.scrollTo({
                top: e.getBoundingClientRect().top + window.pageYOffset - 100,
                behavior: "smooth",
            });
        };
    });

    if (has_error) return;

    if ($('tbody.family-members-container').length && !$('tr.family-member-row').length) {
        new Noty({
            text: 'Vui lòng nhập hoàn cảnh gia đình.',
            type: 'warning',
        }).show();

        window.scrollTo({
            top: $('tbody.family-members-container').position().top + window.pageYOffset - 100,
            behavior: "smooth",
        });

        return;
    }

    if ($('tbody.working-records-container').length && !$('tr.working-record-row').length) {
        new Noty({
            text: 'Vui lòng nhập quá trình hoạt động.',
            type: 'warning',
        }).show();

        window.scrollTo({
            top: $('tbody.working-records-container').position().top + window.pageYOffset - 100,
            behavior: "smooth",
        });

        return;
    }

    if ($('#cardIssuedModal').length) {
        $('#cardIssuedModal').modal('show');
        return;
    }

    form.submit();
}