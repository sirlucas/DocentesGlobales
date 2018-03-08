
$(document).ready(function(){
   $('.select2').select2();

   $('.datepicker').datepicker({
     autoclose: true,
     format: "yyyy/mm/dd",
     language: "es"
   });
  $(document).on('change','#countries',function(){
    var country_id=$(this).val();
    var div=$(this).parent();
    var op=" ";

    $.ajax({
      type:'get',
      url:'/formin/getCities',
      data:{'id':country_id},
      dataType: 'json',
      success:function(data){
        console.log(data);
        $('#cities').empty();
        op+='<option value="0" selected disabled>Seleccione una ciudad</option>';
        for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].id+'">'+data[i].ciudad+'</option>';
        }
        $("#cities").append(op);

      },
      error:function(){
      }
    });
  });

  $('[data-toggle="boostrap-wizard-step"]').boostrapWizardStep({
    startStep: 0,
    onNextStep: callback,
    onBackStep: callback,
    onJumpBack: callback,
    tabIdentifier:  "#wizard-steps",
    contentIdentifier:  "#wizard-content",
    btnNextIdentifier:  "#sgte",
    btnPreviousIdentifier:  "#atras"
  });

});
