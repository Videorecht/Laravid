    <!-- Video Panel -->
            <div class='panel panel-default panel-video'>
                <div class="panel-heading"><i class="fa fa-video-camera"></i>Video
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li><a href="#"><i class="fa fa-refresh fa-fw"></i> Refresh</a></li>
                            <li><a href="#"><i class="fa fa-check-circle fa-fw"></i> Available</a></li>
                            <li><a href="#"><i class="fa fa-times fa-fw"></i> Busy</a></li>
                            <li><a href="#"><i class="fa fa-clock-o fa-fw"></i> Away</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
	                VIDEO
                	<div id="video-container">
						<div id="subscriberDiv"></div>
						<div id="publisherDiv"></div>
					</div>
                </div>
                <div class="panel-footer">
					<div id="video-controls">
						<button class="btn btn-success btn-lg start-request-btn" onClick='sessionConnect(true);'>start</button>
						<button class="btn btn-danger btn-lg stop-request-btn" onClick='session.disconnect();'>stop</button>
<!-- 						<button class="btn btn-danger btn-lg stop-request-btn" onClick='unpublish();'>stop</button> -->
<!-- 						<button class="btn btn-warning btn-lg archive-request-btn" >archive</button> -->
						<input type="hidden" name="timestamp">
					</div>	                
                </div>
            </div>
            
            
