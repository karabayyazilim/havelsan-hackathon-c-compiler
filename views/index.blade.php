@extends('layouts.master')

@section('content')
<h2 class="text-bold">{{ __("Liman C Compiler") }}</h2>

<ul class="nav nav-tabs" role="tablist" style="margin-bottom: 15px;">
    <li class="nav-item">
        <a class="nav-link" onclick="runScript()" href="#runScript" data-toggle="tab">
            <i class="fab fa-c"></i> {{ __("Derleyici") }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" onclick="taskView()" href="#taskView" data-toggle="tab">
            <i class="fas fa-tasks"></i> {{ __("Gcc Yükleyici") }}
        </a>
    </li>
</ul>

<div class="tab-content">
    <div id="runScript" class="tab-pane">
        @include('runscript.main')
    </div>

    <div id="taskView" class="tab-pane">
        @include('taskview.main')
    </div>
</div>
@endsection