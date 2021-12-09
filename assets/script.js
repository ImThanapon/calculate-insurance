//จัดการ event ตอนเลือก อำเภอและตำบล (Ajax)
//BY https://www.itoffside.com/dropdown-dynamic-3-level-with-ajax/
$(function(){

    //กำหนดตัวแปร
    var provinceObject = $('#province');
    var amphureObject = $('#amphure');
    var districtObject = $('#district');
   
    //เกิด Eventเมื่อเลือก จังหวัด
    provinceObject.on('change', function(){
        var provinceId = $(this).val();

        amphureObject.html('<option value="">เลือกอำเภอ</option>');
        districtObject.html('<option value="">เลือกตำบล</option>');

        $.get('getAmphure.php?province_id=' + provinceId, function(data){ //เอาตัวแปร name
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                amphureObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });

    //เกิด Eventเมื่อเลือก อำเภอ
    amphureObject.on('change', function(){
        var amphureId = $(this).val();

        districtObject.html('<option value="">เลือกตำบล</option>');
        
        $.get('getDistrict.php?amphure_id=' + amphureId, function(data){
            var result = JSON.parse(data);
            $.each(result, function(index, item){
                districtObject.append(
                    $('<option></option>').val(item.id).html(item.name_th)
                );
            });
        });
    });
});
  

