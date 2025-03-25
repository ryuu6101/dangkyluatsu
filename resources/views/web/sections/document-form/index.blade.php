@extends('web.layouts.master')

@section('title', $title)

@push('styles')
<link rel="stylesheet" href="{{ asset('custom_assets/css/document_form.css') }}">
@endpush    

@section('contents')

@include('web.sections.document-form.forms.'.$form)

@isset($secondary_form)
@include('web.sections.document-form.forms.'.$secondary_form)
@endisset

@include('web.components.term-and-condition', ['modal_size' => 'xl'])

@endsection

@push('scripts')
<script src="{{ asset('custom_assets/js/document_form.js') }}"></script>
<script>
    let family_member_count = 0;
    let working_record_count = 0;

    function submit(formId) {
        if (validateAll(formId)) $('form#'+formId).trigger('submit');
    }

    $(document).ready(function() {
        $('body').on('focus', '.datepicker:not(.has-datepicker)', function() {
            this.classList.add("has-datepicker");
            $(this).daterangepicker({
                parentEl: '.document-form .card-body, .document-form.modal-body',
                singleDatePicker: true,
                showDropdowns: true,
                autoUpdateInput: false,
                autoApply: true,
                buttonClasses: 'd-none',
                maxDate: moment().format('MM/DD/YYYY'),
            }).on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY')).trigger('input');
            }).on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('').trigger('input');
            });
        }).on('focus', '.daterange-picker:not(.has-datepicker)', function() {
            this.classList.add("has-datepicker");
            $(this).daterangepicker({
                parentEl: '.document-form .card-body, .document-form.modal-body',
                showDropdowns: true,
                autoUpdateInput: false,
                autoApply: true,
                buttonClasses: 'd-none',
                maxDate: moment().format('MM/DD/YYYY'),
            }).on('apply.daterangepicker', function(ev, picker) {
                let start_date = picker.startDate.format('DD/MM/YYYY');
                let end_date = picker.endDate.format('DD/MM/YYYY');
                $(this).val(start_date + ' - ' + end_date).trigger('input');
            }).on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('').trigger('input');
            });
        });

        $('input[name="portrait_pic"]').change(function (e) {
            let file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    $('label[for="portraitPicture"]').html(`
                        <img src="${event.target.result}" class="w-100 h-100">
                    `);
                };
                reader.readAsDataURL(file);
            }
        });

        $('input.attachment-files').change(function(e) {
            let file_count = this.files.length;
            let input_id = $(this).attr('id');
            $(`label[for="${input_id}"]`).children('span').text(file_count + ' file');
        });

        $('input[type="text"],input[type="number"]').on('input', function() {
            if (validate(this) && $(`input[name="secondary_form[${this.getAttribute('name')}]"]`).length) {
                $(`input[name="secondary_form[${this.getAttribute('name')}]"]`).val(this.value);
            }
        });
        $('select').on('change', function() {
            if (validate(this) && $(`input[name="secondary_form[${this.getAttribute('name')}]"]`).length) {
                $(`input[name="secondary_form[${this.getAttribute('name')}]"]`).val(this.value);
            }
        });

        $('input#agreeTermAndCondition').on('change', function() {
            $('input#termAndConditionCheckbox').prop('checked', $('input#agreeTermAndCondition').is(":checked"));
        })

        $('.check-agreement-btn').on('click', function() {
            if ($('input#agreeTermAndCondition').is(":checked")) {
                $('#termAndCondition').modal('hide');
            } else {
                new Noty({
                    text: 'Bạn phải đồng ý với điều khoản và cam kết',
                    type: 'warning',
                }).show();
            }
        });

        $('input.agreement-checkbox').on('change', function() {
            if ($('input.agreement-checkbox').not(':checked').length) {
                $('button.submit-btn').prop("disabled", true);
            } else {
                $('button.submit-btn').prop("disabled", false);
            }
        });

        $('input.agreement-checkbox-secondary').on('change', function() {
            if ($('input.agreement-checkbox-secondary').not(':checked').length) {
                $('button.submit-btn-secondary').prop("disabled", true);
            } else {
                $('button.submit-btn-secondary').prop("disabled", false);
            }
        });

        $('select[name="secondary_form[organization_id]"]').on('change', function() {
            $.ajax({
                url: "{{ route('get-organization') }}",
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: $(this).val(),
                },
                success: function(data) {
                    $('.organ-address').text(data.address ?? '');
                    $('.organ-phone').text(data.phone ?? '');
                    $('.organ-mobile').text(data.mobile ?? '');
                    $('.organ-fax').text(data.fax ?? '');
                    $('.organ-email').text(data.email ?? '');
                },
            });
        });
    });
</script>
@endpush