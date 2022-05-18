<link href="{{ publicPath("js/task.js") }}" rel=preload as=script>
<noscript>
    <strong>We're sorry but this extension doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
</noscript>
<div data-api-url="{{ API("") }}" id="task" tasks='{{ json_encode($tasks) }}' @isset($onSuccess) onSuccess='{{ $onSuccess }}' @endisset @isset($onFail) onFail='{{ $onFail }}' @endisset></div>
<script src="{{ publicPath("js/task.js") }}"></script>