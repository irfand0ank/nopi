<script>
    $(function() {

        // Hapus
        $('#modaltest').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

            // Untuk mengambil nilai dari data-no="" yang telah kita tempatkan pada link hapus
            var no          = div.data('no')
            var url         = div.data('url')

            var modal = $(this)

            // Mengisi atribut href pada tombol ya yang kita berikan no hapus-true pada modal.
            modal.find('#hapus-true').attr("href", url +  "/delete/" + no );

        });

         $('#logout').on('show.bs.modal', function(event) {
             var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

             // Untuk mengambil nilai dari data-no="" yang telah kita tempatkan pada link hapus
             var url         = div.data('url')

             var modal = $(this)

             // Mengisi atribut href pada tombol ya yang kita berikan no hapus-true pada modal.
             modal.find('#hapus-true').attr("href", url );

         });
        
        $('#update_photo').on('show.bs.modal', function(event) {
             var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

             // Untuk mengambil nilai dari data-no="" yang telah kita tempatkan pada link hapus
             //var url            = div.data('url')
             var gambar         = div.data('gambar')
             
             if(gambar == '')
                {
                    var url  = "<?= base_url(); ?>/assets/images/blank.png";
                }
                else
                {
                    var url  = "<?= base_url(); ?>/assets/images/"+gambar;    
                }

             var modal = $(this)

             // Mengisi atribut href pada tombol ya yang kita berikan no hapus-true pada modal.
             modal.find('#priv1').attr("src", url );

         });
        
        $('#terima').on('show.bs.modal', function(event) {
             var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan

             // Untuk mengambil nilai dari data-no="" yang telah kita tempatkan pada link hapus
             //var url            = div.data('url')
             var no         = div.data('no')
             
             var modal = $(this)

             // Mengisi atribut href pada tombol ya yang kita berikan no hapus-true pada modal.
             modal.find('#no_pesanan').attr("value", no );

         });
        
        
    });

    $(document).ready(function() { 
          
        /*hitung orderan yang masuk*/
          function addmsg(type, msg)
          {
             //alert(msg);
              $('#order_count').html(msg);
              if(msg < 1){
                  //alert('ada');
                  $("#order_count").hide();
              }else if(msg >= 1){
                  $("#order_count").show();
              }
              
          }
          
        function waitForMsg(){

              $.ajax({
                  url:"<?php echo base_url('order/new_order');?>",
                  
                  async: true,
                  cache: false,
                  timeout:5000,

                  success: function(data){
                      //alert(data);
                      addmsg("new", data);
                      setTimeout(
                          waitForMsg,
                          200
                      );
                  }
              });
          };
          
          waitForMsg(); 
        
        /*batas hitung orderan yang masuk*/
        
        /*hutung orderan yang di terima pelanggan*/
        
        function ready_order(type, msg2)
          {
             //alert(msg2);
              $('#ready_count').html(msg2);
              if(msg2 < 1){
                  //alert('ada');
                  $("#ready_count").hide();
              }else if(msg2 >= 1){
                  $("#ready_count").show();
              }
              
          }
          
        
          
          function waitForReadyOrder(){

              $.ajax({
                  url:"<?php echo base_url('order/ready_order');?>",
                  
                  async: true,
                  cache: false,
                  timeout:5000,

                  success: function(data){
                      //alert(data);
                      ready_order("new", data);
                      setTimeout(
                          waitForReadyOrder,
                          200
                      );
                  }
              });
          };
          
          waitForReadyOrder(); 
        
        
        /*batas hitung orderan yang diterima pelanggan*/
        
        /*hitung orderdan yg dibatalkan*/
        
          function cancel_order(type, msg2)
          {
             //alert(msg2);
              $('#cancel_count').html(msg2);
              if(msg2 < 1){
                  //alert('ada');
                  $("#cancel_count").hide();
              }else if(msg2 >= 1){
                  $("#cancel_count").show();
              }
              
          }
          
        
          
          function waitForCancelOrder(){

              $.ajax({
                  url:"<?php echo base_url('order/cancel_order');?>",
                  
                  async: true,
                  cache: false,
                  timeout:5000,

                  success: function(data){
                      //alert(data);
                      cancel_order("new", data);
                      setTimeout(
                          waitForCancelOrder,
                          200
                      );
                  }
              });
          };
          
          waitForCancelOrder(); 
          
        /*batas hitung orderan yg dibatalkan*/
        
        /*hitung temp pesanan jahit & kain*/
        
        function total_order(type, msg3)
          {
             //alert(msg2);
              $('#total_count').html(msg3);
              if(msg3 < 1){
                  //alert('ada');
                  $("#total_count").hide();
              }else if(msg3 >= 1){
                  $("#total_count").show();
              }
              
          }
          
        
          
          function waitForTotalOrder(){

              $.ajax({
                  url:"<?php echo base_url('Temp/total_order');?>",
                  async: true,
                  cache: false,
                  timeout:5000,

                  success: function(data){
                      //alert(data);
                      total_order("new", data);
                      setTimeout(
                          waitForTotalOrder,
                          200
                      );
                  }
              });
          };
          
          waitForTotalOrder();
        
        /*batas hitung temp pesanan jahit & kain*/
        
        
    });
    
    $(document).ready(function(){
		$('.inline-member').editable({
            type: 'text',
            name: 'name',
            title: 'Enter name',
            mode: 'inline',
            validate: function(value) {
				if($.trim(value) == '') return 'This field is required';
			},
        });
		$('#inline-jasa').editable({
			mode : 'inline', 
			source: '<?= base_url() ?>kategori/kategoriJson',
			
		}); 
        
        
       /*script untuk jquery-maskmoney*/   
         $("#harga").maskMoney({prefix:'Rp ', allowNegative: true, thousands:' ', decimal:',', affixesStay: false});
         $("#harga_jahit").maskMoney({prefix:'Rp ', allowNegative: true, thousands:' ', decimal:',', affixesStay: false});
       
        
        
         $('#kain_sendiri').click(function(){
            if($(this).is(":checked"))
            {
               $.ajax({
                 type: "POST",
                 url: "<?= base_url() ?>pesankustom/harga_jahit/1", 
                 data: {id_kustom: $("#id_kustom").val()},
                 dataType: "JSON",  
                 cache:false,
                 success: 
                      function(data){
                          //alert(data.harga);
                        $("#harga").val(data.harga);
                          $.ajax({
                             type: "POST",
                             url: "<?= base_url() ?>pesankustom/jumlah_bayar", 
                             data: {harga: $("#harga").val(),xs: $("#xs").val(),s: $("#s").val(),m: $("#m").val(),l: $("#l").val(),xl: $("#xl").val()},
                             dataType: "JSON",  
                             cache:false,
                             success: 
                                  function(data){
                                    $("#bayar").val(data.bayar);
                              }   


                           }); 
                  }   


               });  
            }
            else if($(this).is(":not(:checked)"))
            {
                $.ajax({
                 type: "POST",
                 url: "<?= base_url() ?>pesankustom/harga_jahit/2", 
                 data: {id_kustom: $("#id_kustom").val()},
                 dataType: "JSON",  
                 cache:false,
                 success: 
                      function(data){
                         // alert(data.harga);
                      $("#harga").val(data.harga);
                      $.ajax({
                          type: "POST",
                          url: "<?= base_url() ?>pesankustom/jumlah_bayar", 
                          data: {harga: $("#harga").val(),xs: $("#xs").val(),s: $("#s").val(),m: $("#m").val(),l: $("#l").val(),xl: $("#xl").val()},
                          dataType: "JSON",  
                          cache:false,
                          success: 
                          function(data){
                              $("#bayar").val(data.bayar);
                          }   


                      });     
                          
                  }   

               });  
            }
          });
        
         
//        
          $(".ukuran").attr("required", "true"); 
          
            
           $('.ukuran').keyup(function(){
               //$('#bayar').maskMoney({prefix:'Rp ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
               if(($("#xs").val() == '') && ($("#s").val() == '') && ($("#m").val() == '') && ($("#l").val() == '') && ($("#xl").val() == '')) 
               {
                   $(".ukuran").attr("required", "true");   
                  // alert('aa');
               }
               else
               {
                    $(".ukuran").removeAttr("required");   
                   //alert('bb');
               }
               
                $.ajax({
                 type: "POST",
                 url: "<?= base_url() ?>pesankustom/jumlah_bayar", 
                 data: {harga: $("#harga").val(),xs: $("#xs").val(),s: $("#s").val(),m: $("#m").val(),l: $("#l").val(),xl: $("#xl").val()},
                 dataType: "JSON",  
                 cache:false,
                 success: 
                      function(data){
                        $("#bayar").val(data.bayar);
                  }   


               });  
       
           }); 
        
        
        
        $(".ukuran_model").attr("required", "true"); 
        $('.ukuran_model').keyup(function(){
               //$('#bayar').maskMoney({prefix:'Rp ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
               if(($("#xs").val() == '') && ($("#s").val() == '') && ($("#m").val() == '') && ($("#l").val() == '') && ($("#xl").val() == '')) 
               {
                   $(".ukuran_model").attr("required", "true");   
                   //alert('aa');
               }
               else
               {
                    $(".ukuran_model").removeAttr("required");   
                   //alert('bb');
               }
               
                $.ajax({
                 type: "POST",
                 url: "<?= base_url() ?>pesanmodel/jumlah_bayar", 
                 data: {harga: $("#harga_model").val(),xs: $("#xs").val(),s: $("#s").val(),m: $("#m").val(),l: $("#l").val(),xl: $("#xl").val()},
                 dataType: "JSON",  
                 cache:false,
                 success: 
                      function(data){
                        $("#bayar_model").val(data.bayar);
                  }   


               });  
       
           }); 
        
        $('#kain_model').click(function(){
            if($(this).is(":checked"))
            {
               $.ajax({
                 type: "POST",
                 url: "<?= base_url() ?>pesanmodel/harga_jahit/1", 
                 data: {id_model: $("#id_model").val()},
                 dataType: "JSON",  
                 cache:false,
                 success: 
                      function(data){
                          //alert(data.harga);
                        $("#harga_model").val(data.harga);
                          $.ajax({
                             type: "POST",
                             url: "<?= base_url() ?>pesanmodel/jumlah_bayar", 
                             data: {harga: $("#harga_model").val(),xs: $("#xs").val(),s: $("#s").val(),m: $("#m").val(),l: $("#l").val(),xl: $("#xl").val()},
                             dataType: "JSON",  
                             cache:false,
                             success: 
                                  function(data){
                                    $("#bayar_model").val(data.bayar);
                              }   
                           }); 
                  }   
               });  
            }
            else if($(this).is(":not(:checked)"))
            {
                $.ajax({
                 type: "POST",
                 url: "<?= base_url() ?>pesanmodel/harga_jahit/2", 
                 data: {id_kustom: $("#id_model").val()},
                 dataType: "JSON",  
                 cache:false,
                 success: 
                      function(data){
                         // alert(data.harga);
                      $("#harga_model").val(data.harga);
                      $.ajax({
                          type: "POST",
                          url: "<?= base_url() ?>pesanmodel/jumlah_bayar", 
                          data: {harga: $("#harga_model").val(),xs: $("#xs").val(),s: $("#s").val(),m: $("#m").val(),l: $("#l").val(),xl: $("#xl").val()},
                          dataType: "JSON",  
                          cache:false,
                          success: 
                          function(data){
                              $("#bayar_model").val(data.bayar);
                          }   
                      });     
                  }   
               });  
            }
          });
	});
        
</script>