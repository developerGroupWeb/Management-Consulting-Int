$(function () {

    const input = $('#form-search').find('#search');

    $(document).on('keyup', input, function () {

        let string = input.val();

            $.ajax({
                url: 'controllers/search.php',
                type: 'POST',
                dataType: 'json',
                async: true,
                cache: false,
                data: {string:string},
                success:function (response) {

                    if(response.title){
                        $('#form-search').find('ul').removeClass('d-none');
                    }else{
                        $('#form-search').find('ul').addClass('d-none');
                    }
                }
            });

    });
});