<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['file_management']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="oss_configure.php" method="post" name="theForm" enctype="multipart/form-data" id="oss_configure_form">
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['bucket']; ?>：</div>
                                    <div class="label_value">
										<input type='text' name='bucket' value='<?php echo htmlspecialchars($this->_var['bucket']['bucket']); ?>' size='55' class="text" />
                                   		<div class="form_prompt"></div>
                                        <div class="notic"><?php echo $this->_var['lang']['bucket_oss_notic']; ?></div>	
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['keyid']; ?>：</div>
                                    <div class="label_value">
										<input type='text' name='keyid' value='<?php echo htmlspecialchars($this->_var['bucket']['keyid']); ?>' size='55' class="text" />
                                        <div class="form_prompt"></div>
                                        <div class="notic"><?php echo $this->_var['lang']['bucket_keyid_notic']; ?></div>	
                                    </div>
                                </div>								
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['keysecret']; ?>：</div>
                                    <div class="label_value">
										<input type='text' name='keysecret' value='<?php echo htmlspecialchars($this->_var['bucket']['keysecret']); ?>' size='55' class="text" />
                                        <div class="form_prompt"></div>
                                        <div class="notic"><?php echo $this->_var['lang']['bucket_secret_notic']; ?></div>	
                                    </div>
                                </div>
                                <div class="item" style="margin-bottom:0px;">
                                    <div class="label"><?php echo $this->_var['lang']['is_cname']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_cname" id="is_cname_0" value="0" <?php if ($this->_var['bucket']['is_cname'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_cname_0" class="ui-radio-label"><?php echo $this->_var['lang']['off']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_cname" id="is_cname_1" value="1" <?php if ($this->_var['bucket']['is_cname'] == 1): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_cname_1" class="ui-radio-label"><?php echo $this->_var['lang']['on']; ?></label>
                                            </div>
                                        </div>	
                                    </div>
                                </div>		
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value">
                                        <div class="notic"><?php echo $this->_var['lang']['bucket_url_notic']; ?></div>	
                                    </div>
                                </div>						
                                <div class="item" id="iscname" <?php if ($this->_var['bucket']['is_cname'] == 0): ?> style="display:none"<?php endif; ?>>
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['endpoint']; ?>：</div>
                                    <div class="label_value">
										<input type='text' name='endpoint' value='<?php echo htmlspecialchars($this->_var['bucket']['endpoint']); ?>' size='55' class="text" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['regional']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items" style="width:800px;">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_shanghai" value="shanghai" <?php if ($this->_var['bucket']['regional'] == 'shanghai'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_shanghai" class="ui-radio-label"><?php echo $this->_var['lang']['shanghai']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_hangzhou" value="hangzhou" <?php if ($this->_var['bucket']['regional'] == 'hangzhou'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_hangzhou" class="ui-radio-label"><?php echo $this->_var['lang']['hangzhou']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_shenzhen" value="shenzhen" <?php if ($this->_var['bucket']['regional'] == 'shenzhen'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_shenzhen" class="ui-radio-label"><?php echo $this->_var['lang']['shenzhen']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_beijing" value="beijing" <?php if ($this->_var['bucket']['regional'] == 'beijing'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_beijing" class="ui-radio-label"><?php echo $this->_var['lang']['beijing']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_qingdao" value="qingdao" <?php if ($this->_var['bucket']['regional'] == 'qingdao'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_qingdao" class="ui-radio-label"><?php echo $this->_var['lang']['qingdao']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_hongkong" value="hongkong" <?php if ($this->_var['bucket']['regional'] == 'hongkong'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_hongkong" class="ui-radio-label"><?php echo $this->_var['lang']['hongkong']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_us_west_1" value="us-west-1" <?php if ($this->_var['bucket']['regional'] == 'us-west-1'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_us_west_1" class="ui-radio-label"><?php echo $this->_var['lang']['us_west_1']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_us_east_1" value="us-east-1" <?php if ($this->_var['bucket']['regional'] == 'us-east-1'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_us_east_1" class="ui-radio-label"><?php echo $this->_var['lang']['us_east_1']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_ap_southeast_1" value="ap-southeast-1" <?php if ($this->_var['bucket']['regional'] == 'ap-southeast-1'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_ap_southeast_1" class="ui-radio-label"><?php echo $this->_var['lang']['ap_southeast_1']; ?></label>
                                            </div>	
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="regional" id="regional_ap_northeast_1" value="ap-northeast-1" <?php if ($this->_var['bucket']['regional'] == 'ap-northeast-1'): ?> checked="true" <?php endif; ?>  />
                                                <label for="regional_ap_northeast_1" class="ui-radio-label"><?php echo $this->_var['lang']['ap_northeast_1']; ?></label>
                                            </div>											
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['is_use']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_use" id="is_use_0" value="0" <?php if ($this->_var['bucket']['is_use'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_use_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_use" id="is_use_1" value="1" <?php if ($this->_var['bucket']['is_use'] == 1): ?> checked="true" <?php endif; ?>  />
                                                <label for="is_use_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                            </div>
                                        </div>	
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['delimg']; ?>：</div>
                                    <div class="label_value">
                                        <div class="checkbox_items">
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_delimg" id="delimg_0" value="0" <?php if ($this->_var['bucket']['is_delimg'] == 0): ?> checked="true" <?php endif; ?>  />
                                                <label for="delimg_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                            </div>
                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="is_delimg" id="delimg_1" value="1" <?php if ($this->_var['bucket']['is_delimg'] == 1): ?> checked="true" <?php endif; ?>  />
                                                <label for="delimg_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                            </div>
                                        </div>	
                                    </div>
                                </div>									
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
										<input type="hidden" name="id" value="<?php echo $this->_var['bucket']['id']; ?>" />
										<input class="button" type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" id="submitBtn" />
										<input class="button button_reset" type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
										<input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                    </div>
                                </div>								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
		</div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	$(function(){
		$("input[name='is_cname']").change(function(){
			var isval = $(this).val();
			if(isval == 1){
				$("#iscname").show();
			}else{
				$("#iscname").hide();
			}
		});
		
		//表单验证
		$("#submitBtn").click(function(){
			if($("#oss_configure_form").valid()){
				$("#oss_configure_form").submit();
			}
		});
	
		$('#oss_configure_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.label_value').find('div.form_prompt');
				element.parents('div.label_value').find(".notic").hide();
				error_div.append(error);
			},
			rules:{
				bucket:{
					required:true
				},
				keyid:{
					required:true
				},
				keysecret:{
					required:true
				}
			},
			messages:{
				bucket:{
					required:'<i class="icon icon-exclamation-sign"></i>' + oss_bucket_null
				},
				keyid:{
					required:'<i class="icon icon-exclamation-sign"></i>' + oss_keyid_null
				},
				keysecret:{
					required:'<i class="icon icon-exclamation-sign"></i>' + oss_keysecret_null
				}
			}
		});
	});
	</script>
</body>
</html>
