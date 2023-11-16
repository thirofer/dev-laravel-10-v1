function updateRegisterPagination(urlRoute, registerId){
    alert(urlRoute);
    alert(registerId);
    if(confirm('Do you confirm the desactivation?')){
        $.ajax({
            url:urlRoute,
            method: 'PUT',
            headers: {},
            data: {
                id: registerId,
                activate: 0
            }
            beforeSend: function (){
                $.blockUI({
                    message: 'Loading', 
                    timeout: 2000,
                });
            },
        }).done(function (data) {
            $.unblockUI();
                console.log(data);
        }).fail (function (data){
            $.unblockUI();
            alert('404 Desactivation Error');
        });
    }
}