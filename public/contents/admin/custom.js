$(function(){
    $('.delete_btn').on('click',function(e){
        e.preventDefault();
        if(confirm('sure want to delete')){
            $.ajax({
                url:$(this).attr('href'),
                type:'delete',
                success:(res)=>{
                    $(this).parents('tr').remove();
                    Toast.fire({
                        icon: 'success',
                        title: 'data deleted'
                    })
                }
            })
        }
    }); 

    $('input').on('focus',function(e){
        $(this).siblings('span').html('');
    });

    $('select').on('focus',function(e){
        $(this).siblings('span').html('');
    });

    $('textarea').on('focus',function(e){
        $(this).siblings('span').html('');
    });

    $('.insert_form').on('submit', function(e){
        e.preventDefault();
        let formData = new FormData($(this)[0]);
        $.ajax({
            url:$(this).attr('action'),
            type:'POST',
            data:formData,  
            success:(res)=>{
                Toaster('success', 'data inserted successfully.');
                $(this).trigger('reset');
                $('.note-editable p').html('');
                $('.preloader').hide();
                console.log(formData);
            },
            error:(err)=>{
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $(`.${key}`).text(element);
                        console.log(formData);
                    }
                }
                Toaster('error','Check below for errors');
                $('.preloader').hide();
            },
            beforeSend:()=>{
                $('.preloader').show();
            }
        }) 
    })
    
    $('.update_form').on('submit', function(e){
        e.preventDefault();
        let formData = new FormData($(this)[0]);
        $.ajax({
            url:$(this).attr('action'),
            type:'POST',
            data:formData,  
            success:(res)=>{
                Toaster('success', 'data updated successfully.');
                $(this).trigger('reset');
                $('.preloader').hide();
            },
            error:(err)=>{
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $(`.${key}`).text(element);
                    }
                }
                Toaster('error','Check below for errors');
                $('.preloader').hide();
            },
            beforeSend:()=>{
                $('.preloader').show();
            }
        }) 
    })
    function Toaster(icon, message) {
            Toast.fire({
                icon: icon,
                title: message
            })
        }

    $('.component_form_submit').off().on('click', function(){
        let form = $(this).parents('.component_form');
        let target_select = $(this).parents('.component_form').data('target_select');
        let action = $(this).parents('.component_form').attr('action');
        let inputs = $(form[0]).children('.modal-body').children('.form-group').children('div').children('input');
        let textareas = $(form[0]).children('.modal-body').children('.form-group').children('div').children('textarea');
        let selects = $(form[0]).children('.modal-body').children('.form-group').children('div').children('.select_ontime').children('select');

        let temp_form = $(document.createElement('form'));
        $(temp_form).attr('method', 'POST');

        for (const key in inputs) {
            if (inputs.hasOwnProperty.call(inputs, key)) {
                const element = inputs[key];
                if( parseInt(key) >= 0 && typeof parseInt(key) === "number")
                    $(temp_form).append($(element).clone());
            }
        }
        for (const key in textareas) {
            if (textareas.hasOwnProperty.call(textareas, key)) {
                const element = textareas[key];
                if( parseInt(key) >= 0 && typeof parseInt(key) === "number")
                    $(temp_form).append($(element).clone());
            }
        }
        for (const key in selects) {
            if (selects.hasOwnProperty.call(selects, key)) {
                const element = selects[key];
                if( parseInt(key) >= 0 && typeof parseInt(key) === "number")
                    $(temp_form).append($(element).clone());
            }
        }

        let formData = new FormData(temp_form[0]);
        $.ajax({
            url : action,
            type : 'POST',
            data : formData,
            success : (res)=>{
                console.log(res);
                $('.component_preloader').hide();
                Toaster('success', 'data inserted succesfully');
                $('.modal').modal('hide');
                $('.component_form select').html('');
                $('.component_form textarea').val('');
                $('.component_form input').val('');
                console.log(target_select);
                $(target_select).prepend(res.html);
                $(target_select).val(res.value);
            },
            error:(err)=>{
                let errors = err.responseJSON.errors;
                for (const key in errors) {
                    if (Object.hasOwnProperty.call(errors, key)) {
                        const element = errors[key];
                        $(`.component_form .${key}`).text(element);
                    }
                }
                Toaster('error','Check below for errors');
                $('.component_preloader').hide();
            },
            beforeSend:()=>{
                $('.component_preloader').show();
            }
        })
    });

    $('.parent_select').off().on('change', function(){
        let value = $(this).val();
        let control_url = $(this).data('this_field_control_route');
        let control_class = $(this).data('this_field_will_control');

        $.get(control_url + '/' + value, (res)=>{
            console.log(res);
            // if (control_class) {
                $('.'+ control_class).html(res);                
            // }
        })
    });
    $('.load_options').on('click', function(e){
        e.preventDefault();
        let url = $(this).data('url');
        let control_class = $(this).siblings().data('this_field_will_control');
        $.get(url, (res)=>{
            $(this).siblings('select').html(res);
            if (control_class) {
                $('.'+ control_class).html(res);                
            }
        })
    })

}) 