<form class="example" method="post">
    <input type="text" placeholder="Search.." name="search" id="search" style="width:100%;">
    <div class="col-md-5" style="position:relative;">
        <div class="list-group" id="show-list">
        </div>
    </div>
</form>

<script>
    $(document).ready(function()
    {
        $('#search').keyup(function(){
            var searchText = $(this).val();
            if(searchText!='')
            {
                $.ajax({
                    url:"fetch.php",
                    method:"post",
                    data:{search:searchText},
                    dataType:"text",
                    success:function(response)
                    {
                        $('#show-list').html(response);
                    }
                });
            }
            else
            {
                $('#show-list').html('');
            }
        });
        $(document).on('click','a', function(){
            $("#search").val($(this).text());
            $("#show-list").html('');
        });
    });
</script>