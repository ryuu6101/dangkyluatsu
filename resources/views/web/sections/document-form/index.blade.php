@extends('web.layouts.master')

@section('title', $title)

@push('styles')
<link rel="stylesheet" href="{{ asset('custom_assets/css/document_form.css') }}">
@endpush    

@section('contents')

@include('web.sections.document-form.forms.'.$form)

@include('web.components.term-and-condition')

@endsection

@push('scripts')
<script src="https://unpkg.com/js-datepicker"></script>
<script src="{{ asset('custom_assets/js/document_form.js') }}"></script>
<script>
    $(document).ready(function() {
        $('body').on('focus', '.datepicker:not(.has-datepicker)', function() {
            this.classList.add("has-datepicker");
            datepicker(this, {
                startDay: 1,
                formatter: (input, date, instance) => {
                    input.value = date.toLocaleDateString('en-GB');
                },
                onSelect: (instance, date) => {
                    validate(this);
                },
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

        $('input[type="text"],input[type="number"]').on('input', function() {validate(this)});
        $('select').on('change', function() {validate(this)});

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
    });
</script>
@endpush