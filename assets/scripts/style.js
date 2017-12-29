$(document).ready(function() {
    
    /*add class active sidebar menu*/
     $('#dt').DataTable({
         
         language: {
             "emptyTable": "Data Kosong",
                      
         }
        });
    
    /* showing image priview upload file*/
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#priv1').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".up1").change(function () {
            readURL(this);
        });



        /* end showing image priview upload file*/
    
    /*end datatable*/
     $("#regis_jahit").hide();
   // alert('aa');
        $("#cek_penjahit").click(function(){
            
            var cek_nama = $("#cek_nama").val();
            
            if(cek_nama == '')
            {
                alert("Anda Belom Memasukan Nama");
            }
            else
            {
                alert(cek_nama);    
            }
            

            /*if($(".syarat").length == $(".syarat:checked").length) {
                //alert('syarat');
                //$("#selectall").attr("checked", "checked");
                $("#validasi1").show();
            } else {
                //$("#selectall").removeAttr("checked");
                $("#validasi1").hide();
            }*/

        });
   
});
    
        
    
