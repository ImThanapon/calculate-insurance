$(function(){

    //กำหนดตัวแปร
    var brandObject = $('#brand');
    var modelObject = $('#model');
   
   

    brandObject.on('change', function(){
        var ModelId = $(this).val();

        modelObject.html('<option value="">เลือกรุ่นรถ</option>');
        
        $.get('getModel.php?brand=' + ModelId, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                modelObject.append(
                    $('<option></option>').val(item.Name).html(item.Name)
                );
            });
        });
    });
  
});