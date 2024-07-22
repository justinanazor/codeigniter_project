<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.1.0/js/dataTables.min.js"></script>

<script>
    // _____1st method To call the search table function_____
    // $(document).ready(function() {
    //     $('#datatable1').DataTable();
    // });
    // _____2nd Method To call the search table function_____
    let table = new DataTable('#datatable1');
</script>
<script>
    $(document).ready(function() {
        $('.confirmdelete').click(function(e) {
            e.preventDefault();
            var full_name = $(this).data('full_name');
            confirmDialog = confirm("Are you sure you want to delete the dtata for '" + full_name + "'?");
            if (confirmDialog) {

            }
        });
    });
    $(document).ready(function() {
        $('.confirm-delete').click(function(e) {
            e.preventDefault();
            var full_name = $(this).data('fullname');
            confirmDialog = confirm('Are you sure you want to delete the data for "' + full_name + '" ?');
            if (confirmDialog) {
                var id = $(this).val();
                $.ajax({
                    type: "DELETE",
                    url: "employees/confirmdelete/" + id,
                    success: function(response) {
                        alert('User "' + full_name + '" deleted successfully');
                        window.location.reload();
                    }
                });
            }
        });
    });
</script>
</body>



</html>