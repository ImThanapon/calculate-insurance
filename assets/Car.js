$(function(){

    //กำหนดตัวแปร
    var yearObject = $('#year');
    var brandObject = $('#brand');
    var modelObject = $('#model');
   
    yearObject.on('change', function(){
        var yearId = $(this).val();

        brandObject.html('<option value="">เลือกยี่ห้อรถ(Brand)</option>');
        modelObject.html('<option value="">เลือกรุ่นรถ(Model)</option>');

        $.get('Car_getBrand.php?year_car=' + yearId, function(data){ //เอาตัวแปร name
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                brandObject.append(
                    $('<option></option>').val(item.Brand_ID).html(item.Brand)
                );
            });
        });
    });


    brandObject.on('change', function(){
        var ModelId = $(this).val();

        modelObject.html('<option value="">เลือกรุ่นรถ(Model)</option>');
        
        $.get('Car_getModel.php?brand_car=' + ModelId, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                modelObject.append(
                    $('<option></option>').val(item.Model_ID).html(item.Model)
                );
            });
        });
    });
});