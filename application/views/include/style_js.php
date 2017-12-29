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
        
        
        
         

	});

</script>