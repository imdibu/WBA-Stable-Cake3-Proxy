jQuery(document).ready(function(){ 
    $("input[type='text']").live("keydown", function(e){
        var code = (e.keyCode ? e.keyCode : e.which);		
        if($(this).val()=="" && code==32) return false;
    });
    $("input[type='text'].numeric,input[type='number']").numeric();
    $("textarea").live("keydown", function(e){
        var code = (e.keyCode ? e.keyCode : e.which);
        if($(this).val()=="" && (code==32 || code==13)) return false;
    });
	
    $("#topnav div.sub2").width(function(){
        $(this).width($("div.row:first", $(this)).width() + $("div.row:nth(1)", $(this)).width() + $("div.row:nth(2)", $(this)).width() + ($("div.row", $(this)).length * 10) - 10);
    });
    $("#topnav div.sub2").css("left", function(){
        if($(this).offset().left < 0){
            return $(this).parent().width();
        }        
    });
     $("#topnav li .sub,#topnav li .sub2").hide();
        
    $("select.select,select[multiple]").select2({
        allowClear: true
    });
    
    $("input:visible,select:visible").eq(0).focus();  
    
    $('.date-picker').datepicker({
        // showOn: "button",
        // buttonImage: web_root+"img/calendar.gif",
        //  buttonImageOnly: true,
        dateFormat: $('.date-picker').attr('data-format')
    });
    
    $('.date-picker-from').datepicker({
        // showOn: "button",
        dateFormat: $('.date-picker-from').attr('data-format'),
        // buttonImage: web_root+"img/calendar.gif",
        // buttonImageOnly: true,
        //maxDate: $('.date-picker-to').datetimepicker('getDate'),
        onClose: function( selectedDate ) {
            $('.date-picker-to').datepicker( "option", "minDate", selectedDate );
        }
    });
    
    $('.date-picker-to').datepicker({
        //showOn: "button",
        dateFormat: $('.date-picker-to').attr('data-format'),
        //buttonImage: web_root+"img/calendar.gif",
        //buttonImageOnly: true,
        minDate: $('.date-picker-from').datetimepicker('getDate'),
        onClose: function( selectedDate ) {
            $('.date-picker-from').datepicker( "option", "maxDate", selectedDate );
        }
    });
        
    $('.date-time-picker-from-today').datetimepicker({
        //showOn: "button",
        dateFormat: $('.date-time-picker-from-today').attr('data-format'),
        //buttonImage: web_root+"img/calendar.gif",
        // buttonImageOnly: true,
        minDate: new Date()
    });
    
    $('.date-picker-from-today').datepicker({
        // showOn: "button",
        dateFormat: $('.date-picker-from-today').attr('data-format'),
        // buttonImage: web_root+"img/calendar.gif",
        // buttonImageOnly: true,
        //maxDate: $('.date-picker-to').datetimepicker('getDate'),
        minDate: new Date()
    });

    $('.date-time-picker-from').datetimepicker({ 
        //showOn: "button",
        dateFormat: $('.date-time-picker-from').attr('data-format'),
        //buttonImage: web_root+"img/calendar.gif",
        //buttonImageOnly: true,
        //maxDate: $('.date-time-picker-to').datetimepicker('getDate'),
        onClose: function( selectedDate ) {
            $('.date-time-picker-to').datepicker( "option", "minDate", selectedDate );
        }
    });

    $('.date-time-picker-to').datetimepicker({ 
        //showOn: "button",
        dateFormat: $('.date-time-picker-from').attr('data-format'),
        //buttonImage: web_root+"img/calendar.gif",
        //buttonImageOnly: true,
        minDate: $('.date-time-picker-from').datetimepicker('getDate'),
        onClose: function( selectedDate ) {
//            $('.date-time-picker-from').val(newDate);
            $('.date-time-picker-from').datepicker( "option", "maxDate", selectedDate );
        }
    });
    
    $('.date-time-picker-from-extra').datetimepicker({ 
        //showOn: "button",
        dateFormat: $('.date-time-picker-from-extra').attr('data-format'),
        //buttonImage: web_root+"img/calendar.gif",
        //buttonImageOnly: true,
        //maxDate: $('.date-time-picker-to-extra').datetimepicker('getDate'),
        onClose: function( selectedDate ) {
            $('.date-time-picker-to-extra').datepicker( "option", "minDate", selectedDate );
        }
    });
    
    $('.date-time-picker-to-extra').datetimepicker({ 
        //showOn: "button",
        dateFormat: $('.date-time-picker-from-extra').attr('data-format'),
        //buttonImage: web_root+"img/calendar.gif",
        //buttonImageOnly: true,
        minDate: $('.date-time-picker-from-extra').datetimepicker('getDate'),
        onClose: function( selectedDate ) {
            $('.date-time-picker-from-extra').datepicker( "option", "maxDate", selectedDate );
        }
    });
    
    $(".flexi-table td[rowspan-id]").each(function(i, val){
        $attr = $(this).attr('rowspan-id');
        $rowspan = $(".flexi-table td[rowspan-id='"+$attr+"']").length;
        $(this).attr('rowspan-id', $attr+'#');            
        $(".flexi-table td[rowspan-id='"+$attr+"']").remove();
        $(this).attr('rowspan', $rowspan);            
    });
	
    $('.date-time-picker-today').datepicker({
        //showOn: "button",
        dateFormat: $('.date-time-picker-from-today').attr('data-format'),
        //buttonImage: web_root+"img/calendar.gif",
        //minDate: new Date(),
        buttonImageOnly: true
    });


/*
        $("#export-menu a").bind("click", function(){
		return openPopup(this.href);
        });
        */
        
/*
        $(".error-message").prev("select").bind("change", function(){
        	if(this.value!=""){
        		$(this).next(".error-message").hide();
        	}else{
        		$(this).next(".error-message").show();
        	}
        });
        $(".error-message").prev("input[type='radio']").bind("click", function(){
		alert(this.value);
		if(this.value!=""){
			$(this).next(".error-message").hide();
		}else{
			$(this).next(".error-message").show();
		}
        });*/
});

function loadOptions(controller,load_obj_id,conditions,fields){
    var params = "";
    var check = 0;
    $.each(conditions, function(key,val){
        params += key+':'+val+'/'
    });

    $.each(fields, function(key,val){
        params += key+':'+val+'/'
    });
    
    $("#"+load_obj_id+" option[value!='']").remove();
    
    $.ajax({
        url: web_root + controller + "/ajax/" + params,
        dataType: 'json',
        success: function(response){				
            $.each(response, function(i, item){
				
                if(check == 0)$selected = 'selected=true';else $selected ="";
                check ++;				
                if(item.name != null)				
                    $("#"+load_obj_id).append("<option "+$selected+" value='"+item.id+"'>"+item.name+"</option>");
				
            });

        }
    });
}

function loadLabels(controller,load_obj_id,load_field,conditions){
	
    var params = "field:"+load_field+"/";
 
    $.each(conditions, function(key,val){
        params += key+':'+val+'/'
    });
    
    $.ajax({
        url: web_root + controller + "/ajax_label/" + params,
        dataType: 'json',
        success: function(response){				
            var label = "";
            $.each(response, function(i, item){
                label += item.name;
            });
            $("#"+load_obj_id).html(label);
        }
    });
}

function loadLabel(controller,load_obj_id,conditions,fields){

    var params = "";
	
    if(arguments.length>4){
        params += arguments[4] + '/';
    } 
	
	    
    $.each(conditions, function(key,val){
        params += key+':'+val+'/'

    });
    
    $.each(fields, function(key,val){
        params += key+':'+val+'/'
		
    });

    $("#"+load_obj_id+" option[value!='']").remove();

    $.ajax({
        url: web_root + controller + "/ajax/" + params,
        //url: web_root + controller + "/index/" + params,
        dataType: 'json',
        success: function(response){
            var label = "";
            $.each(response, function(i, item){
                label += item.name;
				
            });
            $("#"+load_obj_id).html(label);
        }
    });
}

function removeTRHelpers(){
    $("tr.helper").remove();
}

function cloneTR(tblObj){
    //alert('sssss');
    seq_no = (($(this).attr("seqno"))? $(this).attr("seqno") : $("tr[class!='helper']", tblObj).length - 2 ) + 1;
    
    //    alert(seq_no);
    
    trObj = $("tr:nth(1)", tblObj).clone();
    
    $(".error-message", trObj).remove();
	
    //seq = $("tr:last ", tblObj).
	
    $("*[id*='$$']", trObj).each(function(i, obj){
        obj.id = obj.id.replace(/[\$]{2}/, seq_no);
    });

    $("*[name*='$$']", trObj).each(function(i, obj){
        obj.name = obj.name.replace(/[\$]{2}/, seq_no);
    });
    
    $(".select2-container", trObj).each(function(i,obj){        
        //        alert("Selected value is: "+JSON.stringify($(this).select2('val')));    
        //obj_id = $(this).prev(":hidden").attr("class");
        //$("#"+obj_id, trObj).select2("destroy");
        $(this).prev(":hidden").show();
        $(this).remove();
    });

    $("tr:last", tblObj).after(
        $(trObj).removeClass("helper")
        );
	
    $(this).attr("seqno", seq_no);
	
//$("tr:last", tblObj).find("ul.token-input-list").remove().next().show().removeClass("jq-token-set");
}

function _autocomplete(controller,controller_function,load_obj_id,fields,field){
    // 1st parameter the name of the controller 
    // 2nd parameter is the name of the function in controller   
    // 3rd parameter is used for populating the particular ids dropdown
    // 4th parameter number of fields to be returned 
    // 5th parameter field used for condition


	
    $(load_obj_id).select2({
   
        allowClear: true,
        minimumInputLength: 1,	
        placeholder: "Search...",
        ajax: {
            url: web_root + ''+controller+'/'+controller_function,
            dataType: 'json',
            data: function (term, page) {
                return {
                    conditions: field+' Like "%'+term+'%"',
                    fields: fields
                };
            },
            results: function (data, page) {               
                return {
                    results: data
                };
            }
        },
	
	
        initSelection : function (element, callback) {
				
            var data = {
                id: element.val(), 
                text:  $(element).attr('init-text')
            };
            return data;
        }
    });
}
/*
function openPopup(url){

	$("#popup-ui").remove();
	
	$("body").append('<div id="popup-ui"><iframe id="popup-ifrm" name="popupifrm" src="about:blank" frameborder="0"></iframe></div>');

	$("#popup-ui > iframe").attr("src", "about:blank");
	
	if(arguments.length>1 && arguments[1]=="silent"){
		$("#popup-ui > iframe").attr("src", url);
		$("#popup-ui").hide();
	}else{

		sheight = $(window).height();
		swidth = $(window).width();

		if(arguments.length>1 && arguments[1]!=""){
			if(arguments[1]=="assoc" || arguments[1]=="innerpopup"){
				pwidth = 800;
				pheight = sheight * 80 / 100;
			}else{
				pwidth = parseInt(arguments[1], 10);
				pheight = (arguments.length>2) ? parseInt(arguments[2], 10) : (sheight * 80 / 100);
			}			
		}else{
			pwidth = swidth * 70 / 100;
			pheight = sheight * 70 / 100;
		}
		
		ptop = (sheight - pheight) / 2;
		pleft = (swidth - pwidth) / 2;
		
		$("#popup-ui").css({height:pheight, width:pwidth-12});

		$.blockUI({ 
			message: $('#popup-ui'), 
			css: {  top: ptop+'px', 
				left: pleft+'px',
				width: pwidth+'px'
			}
		});

		$("#popup-ui > iframe").attr("src", url);
	}
	
	return false;
}
*/

function loadOptionsLineNo(controller,load_obj_id,conditions,fields){

    var params = "";
    var check = 0;
    $.each(conditions, function(key,val){
        params += key+':'+val+'/'
    });

    $.each(fields, function(key,val){
        params += key+':'+val+'/'
    });
    
    $("#"+load_obj_id+" option[value!='']").remove();
    
    $.ajax({
        url: web_root + controller + "/ajax_bulkorder_lineno/" + params,
        dataType: 'json',
        success: function(response){				
            //alert(response);
            $.each(response, function(i, item){
                if(check == 0)
                    $selected = '';else $selected ="";
                check ++;				
                if(item.name != null)				
                    $("#"+load_obj_id).append("<option "+$selected+" value='"+item.id+"'>"+item.name+"</option>");
				
            });

        }
    });
}

function autocomplete(controller,load_obj_id,fields){
	
    if(fields.search(/,/i)){
        field = fields.split(',');	
        field =field[0];	
       
    }
    else	
        field = fields;
	
    $(load_obj_id).select2({
   
        allowClear: true,
        minimumInputLength: 1,	
        placeholder: "Search...",
        ajax: {
            url: web_root + ''+controller+'/autocomplete',
            dataType: 'json',
            data: function (term, page) {
                return {
                    condition: field+' Like "%'+term+'%"',
                    fields: fields
                };
            },
            results: function (data, page) {
                //alert();
                return {
                    results: data
                };
            }
        },
	
	
        initSelection : function (element, callback) {
				
            var data = {
                id: element.val(), 
                text:  $(element).attr('init-text')
            };
            //alert(data);
            return data;
        }
    });
}

function bulk_fillOptions(controller,load_obj_id,conditions,fields){
	
    alert(controller);
    alert(load_obj_id);
    alert(conditions);
    alert(fields);

    var params = "";
    var check = 0;
    $brand = (load_obj_id).search(/BrandId/i);	
    var matches = load_obj_id.match(/[0-9]+/g);		
    $.each(conditions, function(key,val){
        params += key+':'+val+'/'
    });

    $.each(fields, function(key,val){
        params += key+':'+val+'/'
    });
    
    $("#"+load_obj_id+" option[value!='']").remove();
    
    $.ajax({
        url: web_root + controller + "/ajax/" + params,
        dataType: 'json',
        success: function(response){				
            $.each(response, function(i, item){
				
                if(check == 0){
                    $selected = 'selected=true';				
                    if($brand != -1){
                        $("#token_brand_id").val(item.name);
                        $("#brand_id").val(item.id);
                    }				
                }
                else $selected ="";				
                $("#"+load_obj_id).append("<option "+$selected+" value='"+item.id+"'>"+item.name+"</option>");
                check ++;
				
            });

        }
    });
}

function bulk_fill_Options(controller,load_obj_id,conditions,fields){
    
    var params = "";
    var check = 0;	
    $ticket = (load_obj_id).search(/TicketId/i);	
    var matches = load_obj_id.match(/[0-9]+/g);		
    $.each(conditions, function(key,val){
        params += key+':'+val+'/'
    });

    $.each(fields, function(key,val){
        params += key+':'+val+'/'
    });
    
    $("#"+load_obj_id+" option[value!='']").remove();
    
    $.ajax({
        url: web_root + controller + "/ajax/" + params,
        dataType: 'json',
        success: function(response){				
            $.each(response, function(i, item){
				
                if(check == 0){
                    $selected = 'selected=true';
                    if($ticket != -1){  
                        $("#token_ticket_id").val(item.name);
                        $("#ticket_id").val(item.id);
                    }				
                }
                else $selected ="";				
                $("#"+load_obj_id).append("<option "+$selected+" value='"+item.id+"'>"+item.name+"</option>");
                check ++;
				
            });

        }
    });
}

function bulk_fill_Option(controller,load_obj_id,conditions,fields){

    var params = "";
    var check = 0;	
    $length = (load_obj_id).search(/LengthId/i);	
    var matches = load_obj_id.match(/[0-9]+/g);		
    $.each(conditions, function(key,val){
        params += key+':'+val+'/'
    });

    $.each(fields, function(key,val){
        params += key+':'+val+'/'
    });
    
    $("#"+load_obj_id+" option[value!='']").remove();
    
    $.ajax({
        url: web_root + controller + "/ajax/" + params,
        dataType: 'json',
        success: function(response){				
            $.each(response, function(i, item){
				
                if(check == 0){
                    $selected = 'selected=true';
                    if($length != -1){  
                        $("#token_length_id").val(item.name);
                        $("#length_id").val(item.id);
                    }				
                }
                else $selected ="";				
                $("#"+load_obj_id).append("<option "+$selected+" value='"+item.id+"'>"+item.name+"</option>");
                check ++;
				
            });

        }
    });
}

function loadOptions(controller,load_obj_id,conditions,fields){
    var params = "";
    var check = 0;
    $selected = '';
    $.each(conditions, function(key,val){
        params += key+':'+val+'/'
    });

    $.each(fields, function(key,val){
        params += key+':'+val+'/'
    });
    $("#"+load_obj_id+" option[value!='']").remove();
    $.ajax({
        url: web_root + controller + "/ajax/" + params,
        dataType: 'json',
        success: function(response){				
            $.each(response, function(i, item){
								
                if(check == 0)$selected = 'selected=true';else $selected ="";
								
                if(item.name != null)				
                    $("#"+load_obj_id).append("<option "+$selected+" value='"+item.id+"'>"+item.name+"</option>");
                check++ ;
            });
        //$("#"+load_obj_id).val('');
        }
    });
}

function autocomplete_article(controller,load_obj_id,field,condition,condityion){
    
    if(field.search(/,/i)){
        field = field.split(',');	
        field_name =field[0];	
    }
    else	
        field_name = field;
	
    $(load_obj_id).select2({
   
        allowClear: true,
        minimumInputLength: 4,	
        placeholder: "Search...",
        ajax: {
            url: web_root + ''+controller+'/autocomplete_article',
            dataType: 'json',
            data: function (term, page) {
                return {
                    condition: 'SalesOrgMaterial.'+field_name+' Like "%'+term+'%" AND '+condition,
                    fields: 'SalesOrgMaterial.'+field
                };
            },
            results: function (data, page) {
                //alert();
                return {
                    results: data
                };
            }
        },
	
	
        initSelection : function (element, callback) {
				
            var data = {
                id: element.val(), 
                text:  $(element).attr('init-text')
            };
            return data;
        }
    });
}