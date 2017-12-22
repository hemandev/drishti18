@extends('layout')

@section('title', 'Dashboard')

<?php $fb_user = session()->get('fb_user'); ?>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6 col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Facebook A/c Details
                </div>
                <div class="panel-body">
                    <img src="{{ $fb_user->avatar  }}" /> <br />
                    {{ $fb_user->name }} <br />
                    {{ $fb_user->email }} <br />
                </div>
                <div class="panel-footer">
                   <a href="{{ $fb_user->profileUrl }}" target="_blank">Profile Page</a>
                    <a href="/logout" class="btn btn-primary pull-right btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
