//Callback delay 
function delay_callback(){	
	
    setTimeout(function(){
        //Used for getting mumtype for the required article brand ticket    - function used places(add ,edit,enrich)
        // check_article_brand_ticket(get_selected_id())
        },4000);//4sec
}
//When shade_code/providing shade_code changes the below function is called   - function used places(add ,edit,enrich)
function code_change(tab_id,value){
    
    if(value!=0){
        $("#SampleOrderLine"+tab_id+"SosId30").attr('disabled',true);
        $("#SampleOrderLine"+tab_id+"SosId50").attr('disabled',true);
        $("#SampleOrderLine"+tab_id+"SosId40").attr('disabled',true);
    }else{
        if($("#SampleOrderLine"+tab_id+"ShadeId").val()==""){
            $("#SampleOrderLine"+tab_id+"SosId30").attr('disabled',true);
            $("#SampleOrderLine"+tab_id+"SosId50").attr('disabled',false);
            $("#SampleOrderLine"+tab_id+"SosId50").attr('checked',true);
            $("#SampleOrderLine"+tab_id+"SosId40").attr('disabled',true);
			
        }else{
            $("#SampleOrderLine"+tab_id+"SosId30").attr('disabled',false);
            $("#SampleOrderLine"+tab_id+"SosId50").attr('disabled',false);
            $("#SampleOrderLine"+tab_id+"SosId40").attr('disabled',false);
        }
    }
}
//When shade_code/providing shade_code, on change the below function is called   - function used places(add ,edit,enrich)
function shadecodecolor(id) {
    $id = $("#"+id).attr('tab_id');     	
    if($("#"+id).val()!=""){		
        $("#SampleOrderLine"+$id+"EnrichTable-1").hide();		
        $("#SampleOrderLine"+$id+"SosId30").attr('disabled',false);
        $("#SampleOrderLine"+$id+"SosId50").attr('checked',false);
        $("#SampleOrderLine"+$id+"SosId40").attr('disabled',false);                
        //$("#SampleOrderLine"+id$+"Measurement").attr('disabled',true);
        if($("#SampleOrderLine"+$id+"IsOrderCompleted1").is(':checked')){						                        
            $("#SampleOrderLine"+$id+"SosId30").attr('disabled',true);
            $("#SampleOrderLine"+$id+"SosId50").attr('disabled',true);
            $("#SampleOrderLine"+$id+"SosId40").attr('disabled',true);
        }
        if($("#SampleOrderLine"+$id+"IsDirectEnrich1").is(':checked'))
            $("#SampleOrderLine"+$id+"EnrichTable-2").show();
        $('#SampleOrderLine'+$id+"StartingShadeId").select2('disable');
        $("#fce_comments_mandatory_"+$id).hide();
    }
    else{
          
        if( $("#SampleOrderLine"+$id+"IsDirectEnrich1").is(':checked')){
            $("#SampleOrderLine"+$id+"EnrichTable-1").show();
            $("#SampleOrderLine"+$id+"SosId30").attr('disabled',true);
            $("#SampleOrderLine"+$id+"SosId50").attr('checked',true);
            $("#SampleOrderLine"+$id+"SosId40").attr('disabled',true);
            $("#SampleOrderLine"+$id+"StartingShadeId").select2("enable");
            //$("#SampleOrderLine"+$id+"Measurement").attr('disabled',false);
            $("#SampleOrderLine"+$id+"EnrichTable-2").show();
            $("#fce_comments_mandatory_"+$id).show();
        }else if($("#"+id).val() =="" && $("#SampleOrderLine"+$id+"IsDirectEnrich1").is(':checked')){
            $("#SampleOrderLine"+$id+"EnrichTable-1").show();
            $("#SampleOrderLine"+$id+"SosId30").attr('disabled',true);
            $("#SampleOrderLine"+$id+"SosId50").attr('checked',true);
            $("#SampleOrderLine"+$id+"SosId40").attr('disabled',true);
            $("#SampleOrderLine"+$id+"StartingShadeId").select2("enable");
            //$("#SampleOrderLine"+id[1]+"Measurement").attr('disabled',false);
            $("#fce_comments_mandatory_"+$id).show();
        }else if($("#SampleOrderLine"+$id+"IsDirectEnrich1").length ==0){
            $("#SampleOrderLine"+$id+"EnrichTable-1").show();
            $("#SampleOrderLine"+$id+"SosId30").attr('disabled',true);
            $("#SampleOrderLine"+$id+"SosId50").attr('checked',true);
            $("#SampleOrderLine"+$id+"SosId40").attr('disabled',true);
            $("#SampleOrderLine"+$id+"StartingShadeId").select2("enable");            
            $("#fce_comments_mandatory_"+$id).show();
        }else if($("#"+id).val() =="" && $("#SampleOrderLine"+$id+"IsDirectEnrich0").is(':checked')){            
            $("#SampleOrderLine"+$id+"SosId30").attr('disabled',true);
            $("#SampleOrderLine"+$id+"SosId50").attr('checked',true);
            $("#SampleOrderLine"+$id+"SosId40").attr('disabled',true);
        }
    }
}
//Show hide XML measurement and Provinding Shade Code   - function used places(add ,edit,enrich)
function is_measureable(id){
	
    $idcount = $("#"+id).attr('tab_id');
    $selected = $("#"+id).val();
	
    if($selected == 0){
		
        $("#SampleOrderLine"+$idcount+"StartingShadeId").select2("enable");
        //$("#SampleOrderLine"+$idcount+"Measurement").attr('disabled',true);
        $("#SampleOrderLine"+$idcount+"StartingShadeInput").show();
        $("#SampleOrderLine"+$idcount+"XmlMeasurementLabel").hide();		
        $("#SampleOrderLine"+$idcount+"XmlMeasurementInput").hide();
        $("#SampleOrderLine"+$idcount+"StartingShadeLabel").show();
		
    }else{		
				
        $("#SampleOrderLine"+$idcount+"XmlMeasurementLabel").show();
        $("#SampleOrderLine"+$idcount+"XmlMeasurementInput").show();
        $("#SampleOrderLine"+$idcount+"StartingShadeId").select2("disable");
        //$("#SampleOrderLine"+$idcount+"Measurement").attr('disabled',false);
        $("#SampleOrderLine"+$idcount+"StartingShadeInput").hide();
        $("#SampleOrderLine"+$idcount+"StartingShadeLabel").hide();
		
    }
}

//Used In add and edit ,the function is triggered when direct_enrich radio button is clicked  - function used places(add ,edit,enrich)      
function is_direct_enrich(id){
	$id = $("#"+id).attr('tab_id'); 
    $value = $("#"+id).val();			
    shade_id = $("#SampleOrderLine"+$id+"ShadeId").val();
	if($value == 0 && shade_id ==""){                
        $('#SampleOrderLine'+$id+"StartingShadeId").select2('disable');		
        //$("#SampleOrderLine"+$id+"Measurement").attr('disabled',true);		
        $("#SampleOrderLine"+$id+"EnrichTable-1").hide();
        $("#SampleOrderLine"+$id+"EnrichTable-2").hide();
        $("#customer_reference_mandatory"+$id).hide();   
    }else if($value != 0 && shade_id !=""){	
		$("#fce_comments_mandatory_"+$id).hide()
        $("#SampleOrderLine"+$id+"EnrichTable-2").show();
        $("#customer_reference_mandatory"+$id).show();   
    }else if($value == 0 && shade_id !=""){	               
        $('#SampleOrderLine'+$id+"StartingShadeId").select2('disable');
        //$("#SampleOrderLine"+$id+"Measurement").attr('disabled',true);	
        $("#SampleOrderLine"+$id+"EnrichTable-1").hide();
        $("#SampleOrderLine"+$id+"EnrichTable-2").hide();
        $("#customer_reference_mandatory"+$id).hide();
    }else{
		$("#fce_comments_mandatory_"+$id).show()
        $('#SampleOrderLine'+$id+"StartingShadeId").select2('enable');    
        //$("#SampleOrderLine"+$id+"Measurement").attr('disabled',false);	
        $("#SampleOrderLine"+$id+"EnrichTable-1").show()
        $("#SampleOrderLine"+$id+"EnrichTable-2").show();
        $("#customer_reference_mandatory"+$id).show();
    }            
}
//Copy function used in - add,edit ,enrich
function order_line_item_copy(id , enrich){
    tab_id = {};
    //var total_tab_count = 0;
    $(".ui-state-default > a").each(function(i){
        tab_id[i] =[$(this).attr('href')];        
     //total_tab_count++;
    });
    var tab_selected_id,tab_checked_id;
    //$first_tab_id = (new String(tab_id[1])).split('-');
    
    // for(i=0;i<=total_tab_count;i++)
    //   alert(tab_id[i]);
    //return false;           
    $id= id.split('_');
    tab_checked_id = $id[3];
    //to copy from first line item
    //var tab_selected_id = $first_tab_id[1];
    //get_selected_id();    
    
    if(enrich==true){
        $enrich_selected = (new String(tab_id[0])).split('-');
        tab_selected_id = $enrich_selected[1];        
    }        
    else{
        tab_selected_id = tab_checked_id-1;
    }
    
    if($("#"+id).is(":checked")){
			
        //Selected Tab			
		
        //  var brand_selected = jQuery("#SampleOrderLine"+tab_selected_id+"BrandId").val();
			
        //var brand_selected_value = jQuery("#SampleOrderLine"+tab_selected_id+"BrandId").val();
			
        //  var ticket_selected = jQuery("#SampleOrderLine"+tab_selected_id+"TicketId").val();			
			
        var shade_selected = jQuery("#SampleOrderLine"+tab_selected_id+"ShadeId").val();						
		
        //shade = $("#color"+tab_selected_id).select2().text
		
        var requirement_selected = jQuery("#SampleOrderLine"+tab_selected_id+"Requirements").val();			
			
        var shiping_information_selected = jQuery("#SampleOrderLine"+tab_selected_id+"CustomerReference").val();	
		
		var fabric_reference_colour_name_selected = jQuery("#SampleOrderLine"+tab_selected_id+"FabricReferenceColourName").val();	
			
        //var quantity_selected = jQuery("#SampleOrderLine"+tab_selected_id+"OrderedQuantity").val();						
			
        var provide_shade_selected = jQuery("#SampleOrderLine"+tab_selected_id+"StartingShadeId").val();		
		
        var bar_code_selected = jQuery("#SampleOrderLine"+tab_selected_id+"FabricId").val();			
			
        var comments_selected = jQuery("#SampleOrderLine"+tab_selected_id+"FceComments").val();			
			
        var purpose_type_selected = jQuery("#SampleOrderLine"+tab_selected_id+"PurposeTypeId").val();		
			
        var attach_data_selected = jQuery("#SampleOrderLine"+tab_selected_id+"Measurement").val();	
        
        var file_copy_selected = parseInt($("#SampleOrderLine"+tab_selected_id+"FileCopy").val());
        
        $mum_type_selected = "";
        $request_type_selected = "";
        $sos_selected  = "";
//        $order_completed_selected = "";
        $mum_type_checked = "";
        $sos_checked = "";
        $request_type_checked = "";
//        $order_completed_checked = "";
        $('.mum_type_'+tab_selected_id).each(function(){
            if($(this).is(':checked'))
                $mum_type_selected = this.value;
            
              
        });
		
        $('.request_type_'+tab_selected_id).each(function(){
            if($(this).is(':checked'))
                $request_type_selected = this.value;			  
          
               
        });
        
        $('.sos_'+tab_selected_id).each(function(){
            if($(this).is(':checked'))
                $sos_selected = this.value;
        });
        
//        $('.order_completed_'+tab_selected_id).each(function(){
//            if($(this).is(':checked'))
//                $order_completed_selected = this.value;
//        });
		
        $('.mum_type_'+tab_checked_id).each(function(){
            if($(this).is(':checked'))
                $mum_type_checked = this.value;
            
               
        });
		
        $('.request_type_'+tab_checked_id).each(function(){
            if($(this).is(':checked'))
                $request_type_checked = this.value;
        // alert(this.value);
        //alert(tab_checked_id+"request_type_checked"+$request_type_checked);
        });
        
        //$('input[name=data[SampleOrderLine][3][is_measureable]]:radio:not(:checked)').val();
        //if(jQuery("#"+tab_selected_id+"0").is(":checked"))
        //var is_measureable = $("#"+tab_selected_id+"0").val();
        //if(jQuery("#1"+tab_selected_id+"1").is(":checked"))
        //var swatch_measurement_1 = $("#"+tab_selected_id+"1").val();
			
        //alert(swatch_measurement_1);
			
        //Checked Tab		
		
        //var brand_checked = jQuery("#SampleOrderLine"+tab_checked_id+"BrandId").val();	
			
        //  var ticket_checked = jQuery("#SampleOrderLine"+tab_checked_id+"TicketId").val();			
			
        var shade_checked = jQuery("#SampleOrderLine"+tab_checked_id+"ShadeId").val();			
			
        var requirement_checked = jQuery("#SampleOrderLine"+tab_checked_id+"Requirements").val();	
			
        var shiping_information_checked = jQuery("#SampleOrderLine"+tab_checked_id+"CustomerReference").val();		
		
		var fabric_reference_colour_name_checked = jQuery("#SampleOrderLine"+tab_checked_id+"FabricReferenceColourName").val();	
			
        var quantity_checked = jQuery("#SampleOrderLine"+tab_checked_id+"OrderedQuantity").val();			
			
        var provide_shade_checked = jQuery("#SampleOrderLine"+tab_checked_id+"StartingShadeId").val();			
			
        var bar_code_checked = jQuery("#SampleOrderLine"+tab_checked_id+"FabricId").val();			
			
        var comments_checked = jQuery("#SampleOrderLine"+tab_checked_id+"FceComments").val();			
			
        var purpose_type_checked = jQuery("#SampleOrderLine"+tab_checked_id+"PurposeTypeId").val();			
			
        var attach_data_checked = jQuery("#SampleOrderLine"+tab_checked_id+"Measurement").val();	
        
        var file_copy_checked = parseInt($("#SampleOrderLine"+tab_checked_id+"FileCopy").val());
        
        if($("#SampleOrderLine"+tab_selected_id+"IsDirectEnrich1").is(':checked')){            
            $("#SampleOrderLine"+tab_checked_id+"IsDirectEnrich1").attr('checked',true);
            if(shade_selected == '' && shade_checked == ''){
                $("#SampleOrderLine"+tab_checked_id+"EnrichTable-1").show();
            }
            
            $("#SampleOrderLine"+tab_checked_id+"EnrichTable-2").show();
        }
        
        if(shade_selected != '' && shade_checked == ''){	
            $("#SampleOrderLine"+tab_checked_id+"EnrichTable-1").hide();
            jQuery("#SampleOrderLine"+tab_checked_id+"ShadeId").select2("data", {
                id: shade_selected, 
                text: $("#temp"+tab_selected_id+"ShadeCode").val(),
                attr: $("#temp"+tab_selected_id+"ShadeCodeColor").val()
            });            
            $('#temp'+tab_checked_id+"ShadeCode").val($("#temp"+tab_selected_id+"ShadeCode").val());
            provide_shade_selected = "";     
            $("#SampleOrderLine"+tab_checked_id+"SosId50").attr('checked',false);
            shadecodecolor($("#SampleOrderLine"+tab_checked_id+"ShadeCode").val());
//            $("#SampleOrderLine"+tab_checked_id+"SosId30").attr('disabled',false);
//            $("#SampleOrderLine"+tab_checked_id+"SosId50").attr('checked',false);
//            $("#SampleOrderLine"+tab_checked_id+"SosId40").attr('disabled',false);
//            $("#fce_comments_mandatory_"+tab_checked_id).hide();
//            if($(".order_completed_"+tab_checked_id+"[value = 1]").is(':checked')){
//                $("#SampleOrderLine"+tab_checked_id+"SosId30").attr('disabled',true);
//                $("#SampleOrderLine"+tab_checked_id+"SosId50").attr('disabled',true);
//                $("#SampleOrderLine"+tab_checked_id+"SosId40").attr('disabled',true);
//            }
        }

        if(requirement_selected != '' && requirement_checked == ''){
            jQuery("#SampleOrderLine"+tab_checked_id+"Requirements").val(requirement_selected);
        }

        if(shiping_information_selected != '' && shiping_information_checked == ''){
            jQuery("#SampleOrderLine"+tab_checked_id+"CustomerReference").val(shiping_information_selected);
        }
		
		if(fabric_reference_colour_name_selected != '' && fabric_reference_colour_name_checked == ''){
            jQuery("#SampleOrderLine"+tab_checked_id+"FabricReferenceColourName").val(fabric_reference_colour_name_selected);
        }

        //if(quantity_selected != '' && quantity_checked == ''){
          //  jQuery("#SampleOrderLine"+tab_checked_id+"OrderedQuantity").val(quantity_selected);
        //}
        if(provide_shade_selected != '' && provide_shade_checked == '' && shade_checked == ''){							
            jQuery("#SampleOrderLine"+tab_checked_id+"StartingShadeId").select2("data", {
                id: provide_shade_selected, 
                text: $("#temp"+tab_selected_id+"StartingShadeCode").val(),
                attr: $("#temp"+tab_selected_id+"StartingShadeCodeColor").val()
            });            
            $('#temp'+tab_checked_id+"StartingShadeCode").val($("#temp"+tab_selected_id+"StartingShadeCode").val());
            $("#SampleOrderLine"+tab_checked_id+"IsDirectEnrich1").trigger('change');
        }
	
        if(bar_code_selected != '' && bar_code_checked == ''){
            jQuery("#SampleOrderLine"+tab_checked_id+"FabricId").val(bar_code_selected);
        }

        if(comments_selected != '' && comments_checked == ''){
            jQuery("#SampleOrderLine"+tab_checked_id+"FceComments").val(comments_selected);
        }
        if(purpose_type_selected != '' && purpose_type_checked == ''){
            jQuery("#SampleOrderLine"+tab_checked_id+"PurposeTypeId").val(purpose_type_selected);
        }
			
        if(attach_data_selected != '' && attach_data_checked == '' && shade_checked == ''){
            //jQuery("#purpose_type_"+tab_checked_id).val(purpose_type);
            $("#SampleOrderLine"+tab_checked_id+"IsMeasureable1").attr('checked',true);
            jQuery("#SampleOrderLine"+tab_checked_id+"XmlMeasurementInput").show();            
            jQuery("#SampleOrderLine"+tab_checked_id+"XmlMeasurementLabel").show();
            jQuery("#SampleOrderLine"+tab_checked_id+"StartingShadeInput").hide();
            jQuery("#SampleOrderLine"+tab_checked_id+"StartingShadeLabel").hide();
            if(file_copy_selected == 1){
                attach_data_selected = jQuery("#SampleOrderLine"+tab_selected_id+"XmlMeasurementInput").text();
            }
            jQuery("#SampleOrderLine"+tab_checked_id+"XmlMeasurementInput").html(attach_data_selected);
            jQuery("#SampleOrderLine"+tab_checked_id+"XmlMeasurementInput").append("<input type='hidden' value='1' id='SampleOrderLine"+tab_checked_id+"FileCopy' name='data[SampleOrderLine]["+tab_checked_id+"][file_copy]'>");
            
            
        }
         
        
        if($mum_type_selected != '' && $mum_type_checked == ''){			
            jQuery("#SampleOrderLine"+tab_checked_id+"MumTypeId"+$mum_type_selected).attr('checked',true);
            
        }
		
        if($request_type_selected != '' && $request_type_checked == ''){
            jQuery("#SampleOrderLine"+tab_checked_id+"RequestTypeId"+$request_type_selected).attr('checked',true);
        }
        $('.sos_'+tab_checked_id).each(function(){
            if($(this).is(':checked'))
                $sos_checked = this.value;                         
        });
        
//        $('.order_completed_'+tab_checked_id).each(function(){
//            if($(this).is(':checked'))
//                $order_completed_checked = this.value;
//        });
        
        if(jQuery("#SampleOrderLine"+tab_checked_id+"IsOrderCompleted0").is(':checked'))
            jQuery("#SampleOrderLine"+tab_checked_id+"IsOrderCompleted0").trigger('click');
       
        
        if($sos_selected != '' && $sos_checked == ''){
            jQuery("#SampleOrderLine"+tab_checked_id+"SosId"+$sos_selected).attr('checked',true);
        }
        
        
		
    //var is_customer = $('input[name=\'is_customer['+(tab_id)+']\']:checked').val();
			
    //if(is_customer == 1)
    //{
    //	$("#is_customer_"+tab_checked_id).attr('checked', true);
    //	customer_swatch_enrich(is_customer, tab_checked_id);
    //}
    }
	
			
			
			
}
/*/Used for getting mumtype for the required article brand ticket - function used places(add ,edit,enrich) -may be used in future
function check_article_brand_ticket(id){
    //$article_id = $("#SampleOrderLine"+id+"ArticleId").val();
    $sales_org_id = get_value('sales_org_id');
    $brand_id = $("#SampleOrderLine"+id+"BrandId").val();		
    $ticket_id = $("#SampleOrderLine"+id+"TicketId").val();		
    $abort = 0;		
    if($brand_id && $ticket_id){				                        
        var mumtype_request = $.ajax({
            url: web_root + "SalesOrgMaterials/get_mum_type",
            type:'post',
            data: {
                "sales_org_id" : $sales_org_id ,
                "brand_id":$brand_id,
                "ticket_id":$ticket_id
            },
            success: function(response){
                $abort++;
                $content = response.split(',');
                $count = $content.length-1;
                $("#SampleOrderLine"+id+"MumTypeId10").attr("title","Not available");
                $("#SampleOrderLine"+id+"MumTypeId20").attr("title","Not available");
                $("#SampleOrderLine"+id+"MumTypeId30").attr("title","Not available");
                if($count==3){
                    $("#SampleOrderLine"+id+"MumTypeId10").attr('disabled',false);
                    $("#SampleOrderLine"+id+"MumTypeId20").attr('disabled',false);
                    $("#SampleOrderLine"+id+"MumTypeId30").attr('disabled',false);
                    $("#SampleOrderLine"+id+"MumTypeId10").removeAttr("title");
                    $("#SampleOrderLine"+id+"MumTypeId20").removeAttr("title");
                    $("#SampleOrderLine"+id+"MumTypeId30").removeAttr("title");
                }else if($count){                   
                    $("#SampleOrderLine"+id+"MumTypeId10").attr('disabled',true);
                    $("#SampleOrderLine"+id+"MumTypeId20").attr('disabled',true);
                    $("#SampleOrderLine"+id+"MumTypeId30").attr('disabled',true);
                    for($i=0;$i<=$count;$i++){								
                        $("#SampleOrderLine"+id+"MumTypeId"+$content[$i]).attr('disabled',false);											
                        $("#SampleOrderLine"+id+"MumTypeId"+$content[$i]).removeAttr("title");				
                    }				
                }else if($count==0){
                    $("#SampleOrderLine"+id+"MumTypeId10").attr('disabled',true);
                    $("#SampleOrderLine"+id+"MumTypeId20").attr('disabled',true);
                    $("#SampleOrderLine"+id+"MumTypeId30").attr('disabled',true);	
                    
                }
            //return false;//to stop the loop in ajax calling				
            }
        });		
       
		
    }else{
			
        $("#SampleOrderLine"+id+"MumTypeId10").attr('disabled',false);
        $("#SampleOrderLine"+id+"MumTypeId20").attr('disabled',false);
        $("#SampleOrderLine"+id+"MumTypeId30").attr('disabled',false);
			
    }
		
//$brand_id = $("#SampleOrderLine"+id+"ArticleId").val();
//SampleOrderLine1MumTypeId10
		
		
}
*/
//to get the user selected current tab - function used places(add ,edit,enrich)
function get_selected_id(){
    $id = $('#tabs .ui-tabs-panel:not(.ui-tabs-hide)').attr('id').split('-');				
    return $id[1];
}
//To avoid duplictions while creating - function used places(add ,edit,enrich)
function check_combination(){    
    var linedata = new Array;
    
    tab_id = {};
    var tab_count = 0;
    $(".ui-state-default > a").each(function(i){        
        tab_id[i] =[$(this).attr('href')];
        tab_count++;
    });

    if(tab_count>1){
        
        for($i=0;$i<tab_count;$i++){
           
            var brand_id = $("#SampleOrderLine"+$i+"BrandId").val();
            var ticket_id = $("#SampleOrderLine"+$i+"TicketId").val();                     
            var mum_type_id = $('.mum_type_'+$i+':checked').val();            		
            var shade_id = $("#SampleOrderLine"+$i+"ShadeId").val();
            var customerRef = $("#SampleOrderLine"+$i+"CustomerReference").val();

            // check If shade known
            if(shade_id){                
                str = brand_id+'|'+ticket_id+'|'+mum_type_id+'|'+shade_id+'|'+customerRef;                
                if(jQuery.inArray(str, linedata) != -1){                
                   alert(alert_messages('dulpicate_validation'));
                   return true;
                }
                linedata.push(str);
            }
        }
    }	
    return false;
}

function check_combination_11Nov13(){
    tab_id = {};
    var tab_count = 0;
    $(".ui-state-default > a").each(function(i){        
        tab_id[i] =[$(this).attr('href')];
        tab_count++;
    });    
    $flag=0;    
    if(tab_count>1){
        for($i=0;$i < tab_count;$i++){
            for($j = tab_count;$j >= 0;$j--){
              
                if($i!=$j){
                    $flag = check_tab_combination($i,$j);
                }
                if($flag==1){						
                    $j = -1;
                    continue;
						
                }
            }
            if($flag==1){				
                $i = tab_count+2;
                continue;		
            }
        }
    }			
    return $flag;                        
}
//Block Pend Order if direct enrich is selected - function used places(add ,edit)
function get_if_direct_enrich(){
    $flag = 0;
    
    $(".is_direct_enrich").each(function (){         
        id = $(this).attr('tab_id');			
        if($("#SampleOrderLine"+id+"IsDirectEnrich1").is(":checked")){
            $flag++;
           
            if($flag){
                alert(alert_messages('is_direct_enrich'));						
                return false;
            }
        }
    });		
    return $flag;
}
//To avoid duplictions while creating - function used places(add ,edit,enrich) #Support function for check_combination()
function check_tab_combination($tabone,$tabtwo){
    //alert($tabone+','+$tabtwo);
    
    $tabone_id_value = new String(tab_id[$tabone]);
    
    $tabtwo_id_value = new String(tab_id[$tabtwo]);		
  
    $tabone_active_id = $tabone_id_value.split("-");
   
    $tabtwo_active_id = $tabtwo_id_value.split("-");
 
    
    $flag = 0;
    
    
    if("#tab-"+$tabone+" a:visible" && "#tab-"+$tabtwo+" a:visible"){		
        $tabOneCount = 0;
        $tabOneBrand = parseFloat($("#SampleOrderLine"+$tabone+"BrandId").val());
        $tabOneTicket = parseFloat($("#SampleOrderLine"+$tabone+"TicketId").val());
        $tabOneCustomerRef = $("#SampleOrderLine"+$tabone+"CustomerReference").val();		
        $tabOneShadeCode = $("#SampleOrderLine"+$tabone+"ShadeId").val();
        $value =0;
        $('.mum_type_'+$tabone).each(function(){
            if($(this).is(':checked'))
                $value = this.value;
        });
        $tabOneMumType = $value;
		
        if($tabOneBrand!="")
            $tabOneCount++;
        if($tabOneTicket!="")
            $tabOneCount++;
        if($tabOneCustomerRef!="")
            $tabOneCount++;
        if($tabOneMumType!="")
            $tabOneCount++;
        if($tabOneShadeCode!="")
            $tabOneCount++;
        $tabTwoCount = 0;
        $tabTwoBrand = parseFloat($("#SampleOrderLine"+$tabtwo+"BrandId").val());
        $tabTwoTicket = parseFloat($("#SampleOrderLine"+$tabtwo+"TicketId").val());
        $tabTwoCustomerRef = $("#SampleOrderLine"+$tabtwo+"CustomerReference").val();
        $tabTwoShadeCode = $("#SampleOrderLine"+$tabtwo+"ShadeId").val();
        $('.mum_type_'+$tabtwo).each(function(){
            if($(this).is(':checked'))
                $value = this.value;
        });
        $tabTwoMumType = $value;		
        if($tabTwoBrand!="")
            $tabTwoCount++;
        if($tabTwoTicket!="")
            $tabTwoCount++;
        if($tabTwoCustomerRef!="")
            $tabTwoCount++;
        if($tabTwoMumType!="")
            $tabTwoCount++;
        if($tabTwoShadeCode!="")
            $tabTwoCount++;
        
        if($tabOneShadeCode!=""){       
            // Shade known 
            if($tabOneCount == 5 && $tabTwoCount == 5){	 		
                if($tabOneBrand == $tabTwoBrand && $tabOneTicket == $tabTwoTicket && $tabOneShadeCode == $tabTwoShadeCode && $tabOneCustomerRef == $tabTwoCustomerRef && $tabOneMumType == $tabTwoMumType){				
                    alert(alert_messages('dulpicate_validation'));
                    $flag=1;
                    return $flag;                          			
                }
                else{
                    $flag = 0;
                }
            }
            if($tabOneCount == 4 && $tabTwoCount == 4){	 		
                if($tabOneBrand == $tabTwoBrand && $tabOneTicket == $tabTwoTicket && $tabOneShadeCode == $tabTwoShadeCode && $tabOneCustomerRef == $tabTwoCustomerRef && $tabOneMumType == $tabTwoMumType){				
                    alert(alert_messages('dulpicate_validation'));
                    $flag=1;
                    return $flag;                          			
                }
                else{
                    $flag = 0;
                }
            }		
        }
        else{                            // Shade unknown
            $flag = 0;
            /*if($tabOneCount == 4 && $tabTwoCount == 4){	 		
                if($tabOneBrand == $tabTwoBrand && $tabOneTicket == $tabTwoTicket && $tabOneCustomerRef == $tabTwoCustomerRef && $tabOneMumType == $tabTwoMumType){				
                    alert(alert_messages('dulpicate_validation_shade_unknown'));
                    $flag=1;
                    return $flag;                          			
                }
                else{
                    $flag = 0;
                }
            }	
            if($tabOneCount == 3 && $tabTwoCount == 3){	 		
                if($tabOneBrand == $tabTwoBrand && $tabOneTicket == $tabTwoTicket && $tabOneCustomerRef == $tabTwoCustomerRef && $tabOneMumType == $tabTwoMumType){				
                    alert(alert_messages('dulpicate_validation_shade_unknown'));
                    $flag=1;
                    return $flag;                          			
                }
                else{
                    $flag = 0;
                }
            }	*/
        }

    }	                
    return $flag;	
}
function check_quantity(){	
	var total_tab_id=12;
	var i=0;
	while(i<total_tab_id){
            var brand_id = $("#SampleOrderLine"+i+"BrandId").val();
            var ticket_id = $("#SampleOrderLine"+i+"TicketId").val();
            var mum_type_id = $('.mum_type_'+i+':checked').val();
            var quantity = $('#SampleOrderLine'+i+'OrderedQuantity').val();
			if(quantity!= null && quantity!=""){
			load_quantity_test(brand_id,ticket_id,mum_type_id,quantity,i);			
			}
			i++;
	}	 
}
 