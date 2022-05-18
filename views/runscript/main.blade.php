<div class="row">
    <div class="col-12">
        @include("file-input", [
            "title" => "C Dosyanızı Yükleyiniz",
            "id" => "c-file",
            "callback" => "fileUploaded"            
        ])
      
        <div style="margin-top: 28px;">
            <b>{{ __("Betik çıktısı") }}:</b>
            <div id="c_script">

            </div>
            <a href=""></a>
        </div>
    </div>
</div>

@include("runscript.scripts")