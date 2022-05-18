<script>

    function fileUploaded(path) {
        const data = new FormData()
        data.append('path', path.info.file_path);
        request("{{ API('run_script') }}", data, function(response){
            $('#c_script').text(response);
            Swal.close();
        }, function(response){
            response = JSON.parse(response);
            showSwal(response.message, 'error');
        });
    }

    function runScript() {
        showSwal("{{__('Yükleniyor...')}}", 'info');
        let data = new FormData();
        request("{{ API('run_script') }}", data, function(response){
            $('#c_script').text(response);
            Swal.close();
        }, function(response){
            response = JSON.parse(response);
            showSwal(response.message, 'error');
        });
    }
</script>