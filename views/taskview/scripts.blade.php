<script>
    function taskView() {

    }

    function exampleTask() {
        showSwal('{{__("Yükleniyor...")}}','info',2000);
        request(API('example_task'), new FormData(), function (response) {
            let output = JSON.parse(response).message;
            $("#install").attr("disabled","true");
            $('#exampleTaskModal').modal({backdrop: 'static', keyboard: false})
            $('#exampleTaskModal').find('.modal-body').html(output);
            $('#exampleTaskModal').modal("show"); 
        }, function(response){
            let error = JSON.parse(response).message;
            showSwal(error,'error',2000);
        })
    }

    // Task functions
    function onTaskSuccess(){
        showSwal('{{__("Task başarılı.")}}', 'success', 2000);
        // $('#exampleTaskModal').modal("hide"); 
    }

    function onTaskFail(){
        showSwal('{{__("Task başarısız.")}}', 'error', 2000);
    }
</script>