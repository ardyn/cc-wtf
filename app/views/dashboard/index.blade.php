@extends('layouts.main')

@section('page-title')
Welcome to CRM - Dashboard
@stop

@section('metas')

@stop

@section('content')
    <section id="content" class="main-content">
        <hgroup>
            <h1>DASHBOARD</h1>
        </hgroup>
        <div class="welcom-content">
            <h3 class="floatLeft">Welcome! <span> This is a CRM dashboard.</span></h3>
            <i class="fa fa-times-circle floatRight"></i> 
        </div>

        <section class="content-box">
            <header class="gradient">
                <i class="fa fa-users"></i>
                <h2 class="leads">LEADS</h2>
                <i class="fa fa-minus-circle floatRight"></i>
            </header><!-- Header Gradient End -->
            <div class="filter">
                <form method="post" class="floatLeft">
                    <label for="filter">Filter by</label>
                    {{ Form::input('text', 'lead_status', '', ['placeholder' => 'Lead Status']) }}
                    {{ Form::input('text', 'status', '', ['placeholder' => 'Select']) }}
                    <span class="btn">
                        <i class="fa fa-calendar"></i>
                    </span>
                    <input type="image" img src="/images/searchIcon.png" alt="Search">
                </form>
                <div class="floatRight creat-box">
                    <img src="/images/creatBtn.png">
                </div>
            </div><!-- Filter Section End -->
            <section class="table-section">
                <div id="lead_grid"></div>
            </section>
        </section>
    </section>
@stop

@section('js-scripts')
{{ HTML::script('/js/bootstrap.js') }}
{{ HTML::script('/js/grid-leads.js') }}
@stop