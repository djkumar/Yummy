	<div class="add-review">
							
						
								
							 @if($userid)
							 	<h4>Rate and write a review.</h4>
								<span id="review_errors" style="color:red";></span> 
							<form name="review_form" action="{{ url('/reviewform/store') }}" method="post">  {{ csrf_field() }}
								<input type="hidden" name="listing_id" value="{{ $listingid }}" />
								<input type="hidden" name="created_by" value="{{  $userid }}" />
									<div class="form-group">
										<textarea rows="3" placeholder="Your reviews here ..." name="review_message" id="message"></textarea>
									</div> <!-- end .form-group -->
									
									<div class="form-group">
									 										<select name="ratings" id="rating" style="width:750px;height:45px;background-color: #fff;border:solid 1px #fff;padding:8px;border-radius: 9px;">
										<option value="">Your Rating..</option>
										                                        <option value="0.5">0.5&nbsp;Star(s)</option>
                                                                                <option value="1">1&nbsp;Star(s)</option>
                                                                                <option value="1.5">1.5&nbsp;Star(s)</option>
                                                                                <option value="2">2&nbsp;Star(s)</option>
                                                                                <option value="2.5">2.5&nbsp;Star(s)</option>
                                                                                <option value="3">3&nbsp;Star(s)</option>
                                                                                <option value="3.5">3.5&nbsp;Star(s)</option>
                                                                                <option value="4">4&nbsp;Star(s)</option>
                                                                                <option value="4.5">4.5&nbsp;Star(s)</option>
                                                                                <option value="5">5&nbsp;Star(s)</option>
                                        										</select>
                                    </div>

									<div class="clearfix">
										<button id="reviewsubmit" class="button">Submit your reviews</button>
									</div> <!-- end .clearfix -->

								 </form> 
								 @else 
								 
								 @endif
							</div> <!-- end .add-review -->