@extends('layouts.main')

@section('page-title')
Add Lead
@stop

@section('content')
    <section id="content" class="main-content">
        <hgroup>
            <h1>Leads</h1>
        </hgroup>
        <section class="content-box">
            <header class="gradient">
                <i class="fa fa-users"></i>
                <h2 class="leads">General Information</h2>
            </header><!-- Header Gradient End -->
            <div class="content-form">
                <div class="leftBox">
                    <p>
                        {{ Form::label('first_name', 'First Name:') }}
                        {{ Form::input('text', 'first_name', '', ['id' => 'first_name', 'tabindex' => '1']) }}
                    </p>
                    <p>
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::input('text', 'email', '', ['id' => 'email', 'tabindex' => '3']) }}
                    </p>
                    <p>
                        {{ Form::label('cell_number', 'Cell Number:') }}
                        {{ Form::input('text', 'cell_number', '', ['id' => 'cell_number', 'tabindex' => '5']) }}
                    </p>
                    <p>
                        {{ Form::label('address', 'Address:') }}
                        {{ Form::input('text', 'address', '', ['id' => 'address', 'tabindex' => '7']) }}
                    </p>
                    <p>
                        {{ Form::label('state', 'State:') }}
                        {{ Form::input('text', 'state', '', ['id' => 'state', 'tabindex' => '10']) }}
                    </p>
                    <p>
                        {{ Form::label('campaign', 'Campaign:') }}
                        {{ Form::select('campaign', ['' => 'Please select']) }}
                    </p>
                </div>
                <div class="rightBox">
                    <p>
                        {{ Form::label('last_name', 'Last Name:') }}
                        {{ Form::input('text', 'last_name', '', ['id' => 'last_name', 'tabindex' => '2']) }}
                    </p>
                    <p>
                        {{ Form::label('work_number', 'Work Number:') }}
                        {{ Form::input('text', 'work_number', '', ['id' => 'work_number', 'tabindex' => '4']) }}
                    </p>
                    <p>
                        {{ Form::label('home_number', 'Home Number:') }}
                        {{ Form::input('text', 'home_number', '', ['id' => 'home_number', 'tabindex' => '6']) }}
                    </p>
                    <p>
                        {{ Form::label('city', 'City:') }}
                        {{ Form::input('text', 'city', '', ['id' => 'city', 'tabindex' => '8']) }}
                    </p>
                    <p>
                        {{ Form::label('zip', 'Zip:') }}
                        {{ Form::input('text', 'zip', '', ['id' => 'zip', 'tabindex' => '12']) }}
                    </p>
                    <p>
                        {{ Form::label('status', 'Status:') }}
                        {{ Form::select('status', ['new' => 'New', 'entered' => 'Entered', 'unqualified' => 'Unqualified', 'dead' => 'Dead']) }}
                    </p>
                </div>
                <div>
                    {{ Form::label('description', 'Description') }}
                    {{ Form::input('textarea', '', '', '') }}
                </div>
            </div>
        </section>
    </section>
@stop