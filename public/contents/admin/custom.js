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
                Toaster('success', 'data updated successfully.');
                $(this).trigger('reset');
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
}) 