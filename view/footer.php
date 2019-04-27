
<script>

    
    $(document).ready(function() {
       
        $(document).on('click', '.view', function(){
        
            var id = $(this).attr("id");
            $.ajax({
                url: "show.php",
                method: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#detalhes').html(data);
                    $('#dataModal').modal('show');
                }
            });
        });

        $(document).on('click', '.add', function(){
            $.ajax({
                url: "novo.php",                
                success: function(data) {
                    $('#detalhes').html(data);
                    $('#dataModal').modal('show');
                }
            });
        });

        $(document).on('click', '.delete', function(){
            var id = $(this).attr("id");
             $.ajax({                
                url: "delete.php",  
                method: "GET",
                data: {
                    id: id
                },              
                success: function(data) {
                    $('#detalhes').html(data);
                    $('#dataModal').modal('show');
                }
            });
        });

        $(document).on('click', '.sim', function(){
           
            var id = $(this).attr("id");
            $.ajax({
                url: "delete.php",
                method: "POST",
                data: {
                    id: id
                },                
                success: function() {
                    // $('#dataModal').modal('show');
                    // alert("DEU CERTO GLORIFICA DE PÉ");
                    $('#mensagem').html('<div class="alert alert-success" id="msg">Anamnese deletado com sucesso!</div>');
                    setTimeout(window.location = 'index.php', 5000); 
                }
            });
        });

        $(document).on('click', '.edit', function(){

            var id = $(this).attr("id");
            $.ajax({
                url: "novo.php",
                method: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $('#detalhes').html(data);
                    $('#dataModal').modal('show');
                }
            });
        });
});

</script>


</div>
</body>
</html>

