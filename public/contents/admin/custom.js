// const { error } = require("jquery");

$(function(){
    // $('.delete_btn').on('click',function(e){
    //     e.preventDefault();
    //     if(confirm('sure want to delete')){
    //         $.ajax({
    //             url:$(this).attr('href'),
    //             type:'delete',
    //             success:(res)=>{
    //                 $(this).parents('tr').remove();
    //                 Toast.fire({
    //                     icon: 'success',
    //                     title: 'data deleted'
    //                 })
    //             }
    //         })
    //     }
    // }); 
    $('input').on('focus', function(e){
        $(this).siblings('span').html('');
    });
    $('.insert_form').on('submit', function(e){
        e.preventDefault();
        let formData = new FormData($(this)[0]);

        let data = {
            'name':$('.insert_form input[name=name]').val(),
            'icon':$('.insert_form input[name=icon]').val(),
        };
        // console.log($(this).attr('action'),$(this)[0]);
 
        $.ajax({
            url:$(this).attr('action'),
            type:'POST',
            data:formData,  
            success:(res)=>{
                console.log(res); 
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
                $('.preloader').hide();
            },
            beforeSend:()=>{
                $('.preloader').show();
            }
        })
    })

}) 