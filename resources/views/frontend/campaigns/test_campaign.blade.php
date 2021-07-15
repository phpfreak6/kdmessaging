@extends('layouts/frontend_layout')
@section('content')
<section class="content-header"> 
    <h1>Test Campaign</h1>
</section>
<section class="content"> 
    <div class="row">    
        <div class="col-sm-12">      
            <div class="box">       
                <div class="box-body">  
                    <?php echo Form::open(['id' => 'test_campaign_form', 'class' => 'form-horizontal', 'url' => url('/campaigns/test_campaign/' . $campaign_hash), 'method' => 'post']); ?>      
                    <?= Form::hidden('brand_code_name', $brandArr->brand_code_name); ?> 
                    <div class="form-group">       
                        <?php echo Form::label('campaign_name', 'Campaign Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                        <div class="col-sm-7">             
                            <?= Form::text('', $campaignArr['campaign_name'], ['disabled' => TRUE, 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?> 
                        </div>    
                    </div>       
                    <div class="form-group">   
                        <?php echo Form::label('message_type', 'Message Type', ['class' => 'col-sm-3 control-label no-padding-right']); ?>     
                        <div class="col-sm-7">     
                            <?= Form::select('message_type', ['PROMOTIONAL' => 'PROMOTIONAL', 'TRANSACTIONAL' => 'TRANSACTIONAL'], 'PROMOTIONAL', ['class' => 'form-control col-xs-12 col-sm-12']); ?>  
                        </div>       
                    </div>     
                    <div class="form-group">     
                        <?php echo Form::label('phone_number', 'Test Phone Number', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                        <div class="col-sm-3">    
                            <div class="input-group">    
                                <span class="input-group-addon">     
                                    <input value="phone_number" type="radio" name="test_type" checked>      
                                </span>                         
                                <?= Form::text('phone_number', '', ['class' => 'form-control', 'placeholder' => 'Enter Phone Number']); ?> 
                            </div>    
                        </div>    
                        <div class="col-sm-1 text-center"><strong>OR</strong></div>   
                        <div class="col-sm-3"> 
                            <div class="input-group">     
                                <span class="input-group-addon">     
                                    <input value="list" type="radio" name="test_type">    
                                </span>                      
                                <?= Form::select('list_hash', $campaignListDropdown, '', ['class' => 'form-control']); ?>    
                            </div>         
                        </div>       
                    </div>         
                    <div class="form-group">      
                        <?php echo Form::label('', '', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                        <div class="col-sm-7 text-center">        
                            <a href="<?= url('/campaigns/index') ?>" class="btn btn-danger btn-sm">Cancel</a>&nbsp;&nbsp;    
                            <?= Form::submit('Test', ['class' => 'btn btn-primary btn-sm']); ?>  
                        </div>          
                    </div>     
                    <?= Form::close(); ?>    
                </div>   
            </div> 
        </div>  
    </div>
</section>
@endsection