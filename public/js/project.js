function updateRegisterPagination(urlRoute, registerId){
    alert(urlRoute);
    alert(registerId);
    if(confirm('Do you confirm the desactivation?')){
        $.ajax({
            url:urlRoute,
            method: 'PUT',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                id: registerId
            }
            beforeSend: function (){
                $.blockUI({
                    message: 'Loading...', 
                    timeout: 2000,
                });
            },
        }).done(function (data) {
            $.unblockUI();
            if(data.success == true){
                window.location.reload();
            } else {
                alert('403 Transaction Error');
            }

            console.log(data);
        }).fail (function (data){
            $.unblockUI();
            alert('404 Transaction Error');
        });
    }
}