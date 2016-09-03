<div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title inline">
            	{$studentName} - Academic Report 
            <div><button class="btn btn-danger pull-right" style="margin:-21px -4px 0px;padding:2px" onclick="clearSubDiv('xajaxSubContentCopy')"><span class="glyphicon glyphicon-remove" style="padding:0px" ></span></button></div>
          </div>
        </div>
		<div class="panel-body">
     			<div class="row">
					<div class="container-fluid">
						{foreach from=$finalArray key=fileName item=i name=foo}
							<div class="col-lg-6">
								 <div id="chart-container{$smarty.foreach.foo.index}">Loading....</div>
								 </br>
								 <div class="row">
								 	<div class="col-lg-11">
								 		<span><button type="button" class="btn btn-success" style="margin-left:20px" onclick="abc()"><i class="fa fa-print"></i> Print</button></span>
								 	<span class="pull-right"> <button type="button" class="btn btn-success" onclick="abc({$registration_no})"><i class="fa fa-floppy-o"></i> Save</button></span>
								 	</div>
								 </div>
								</br>
							</div>
						{/foreach}
					</div>
				</div>
       </div>
</div>
</br>
				              