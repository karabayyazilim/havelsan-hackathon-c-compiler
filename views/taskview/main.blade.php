<div class="row">
    <div class="col-12">
        <button class="btn btn-primary" onclick="exampleTask()"><i class="fas fa-check-circle"></i> {{ __("Yükle") }}</button>
    </div>
    @component('modal-component',[
        "id" => "exampleTaskModal",
        "title" => "Görev İşleniyor",
    ])
    @endcomponent
</div>

@include('taskview.scripts')