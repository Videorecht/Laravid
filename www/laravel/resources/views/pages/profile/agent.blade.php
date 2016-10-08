@extends('layouts.default')
@section('title')
Profile
@endsection

@section('content')
<div class="container profile panel-group ">
	<!-- <example></example> -->
    <div class="row video-chat">
	    <div class="col-md-8">
			@include('includes.panels.video')
	    </div>
	    <div class="col-md-4">
            <div class="panel panel-default panel-chat">
                <div class="panel-heading">chat</div>
                <div class="panel-body">
					CHAT
                </div> 
                <div class="panel-footer">
					<div id="chat-controls">
						<button class="btn btn-success btn-lg start-request-btn" onClick='sessionConnect(true);'>send</button>
					</div>
                </div>
            </div>
	    </div>
    </div>
    <div class="row info">
	    <div class="col-md-12 col-sm-12 col-xs-6 col">
            <div class="panel panel-default">
                <div class="panel-heading">
					<ul  class="nav nav-pills">
						<li class="active"><a  href="#1a" data-toggle="tab">About</a></li>
						<li><a href="#2a" data-toggle="tab">this</a></li>
						<li><a href="#3a" data-toggle="tab">that</a></li>
						<li><a href="#4a" data-toggle="tab">blabla</a></li>
					</ul>
	            </div>
                <div class="panel-body">
					<div class="tab-content clearfix">
						<div class="tab-pane active" id="1a">
							<h3>gfdgdhdfhdd</h3>
						</div>
						<div class="tab-pane" id="2a">
							<h3>dfhdfhdfd</h3>
						</div>
						<div class="tab-pane" id="3a">
							<h3>gsdgsh hsfhdfhdf</h3>
						</div>
						<div class="tab-pane" id="4a">
							<h3>dgsgs hsdh s</h3>
						</div>
					</div>
                </div>
            </div>
	    </div>
    </div>
</div>
@endsection