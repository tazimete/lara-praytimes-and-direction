			
		@include('header')		
		
		<style> 
		#rotator-img{     
			transform: rotateZ(69deg);
			left: 22px;
			position: absolute;
			top: 14px;
			animation: rotateRound 2s;
			animation-iteration-count: 1;
			animation-fill-mode: forwards;
		}    
		@keyframes rotate {
			  100% {
				transform: rotateZ(<?php echo (int)$directionOfKaba; ?>deg);
			  }
			}
			
		@keyframes rotateRound {
			from {
				transform: rotate(69deg);
			  }
			  to {
				/*transform: rotate(<?php echo (((int)$directionOfKaba) + 69); ?>deg);*/
				transform: rotate(<?php echo (int)$directionOfKaba; ?>deg);
			  }
			}      
		</style>
				<div class="widecolumn">
					<div class="widecolumn-sub">
						<div class="widecolumn-inner matchHeight">
							<div class="panel-heading">
								<h2 class="panel-title">Praying Schedule </h2>
							</div>
							<div class="panel-body">
								<div class="text-center text-unmute pb10">
									<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod!</em></p>
								</div>
								<div class="sub-panel">
									<div class="sub-panel-sub">
										<div class="sub-panel-inner">
											<div class="small-panel">
												<div class="small-panel-sub">
													<div class="small-panel-inner">
														<div class="row">
															<div class="col-sm-7 pull-left">
																<div class="sch-card">
																	<div class="sch-card-head text-center">
																		<h3 class="sch-venue">Kuala Lumpur, Malaysia </h3>
																		<div class="sch-date">{{$startOfMonth = Carbon::now()->startOfMonth()->formatLocalized('%d %B, %Y') }} — {{$endOfMonth = Carbon::now()->endOfMonth()->formatLocalized('%d %B, %Y') }}</div>
																	</div> 
																	<div class="sch-card-body"> 
																		<div class="row">          
																			<div class="sch-body-left">   
																				<span class="sch-day">{{ Carbon::now()->formatLocalized('%d') }}
																				</span> 
																				<div class="inline-block">{{ Carbon::now()->formatLocalized('%B, %Y') }} <br />
																				{{ Carbon::now()->formatLocalized('%A') }}</div> 
																			</div>
																			<div class="sch-body-right vline">
																				<div class="inline-block">Distance : &nbsp; &nbsp; <span class="text-unmute"><?php echo $distanceFromKaba; ?> km (<?php echo round($distanceFromKaba*0.621, 3); ?> mi)</span> <br />
																				Direction : &nbsp; &nbsp; <span class="text-unmute"><?php echo $directionOfKaba; ?> &deg;</span></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>   
															<div class="col-sm-5 pull-right vline vline-sm compass-container">
																<div class="sch-image text-center compass">
																	<img id="compass-img" src="{{URL::asset('images/rotator_7.png')}}" width="203" height="202" alt="compass" />
																	<img id="rotator-img" src="{{URL::asset('images/rotator_2.png')}}" alt="Rotator" style=""/>
																	<img id="degree-img" src="{{URL::asset('images/rotator_4.png')}}" alt="Rotator" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="pl5 pr5">
												<?php echo stripslashes($prayTimeTable);?>
												
												<p class="text-unmute text-xsmall mb0">Muslim World League, Syafie</p>
											</div>
										</div>
									</div>
								</div>        
								<div class="panel-download">
									<form class="form-inline" action="#" method="post"> 
										<fieldset>
											<div class="form-group">
												<select class="form-control" name="language">
													<option value="English">English</option>        
												</select>  
											</div>  
											<a href="{{URL::to('/')}}/download/pray_time_table_pdf" target="_blank" class="btn-download">Download <strong>PDF</strong></a>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.main -->
		
		
		
		@include('footer')