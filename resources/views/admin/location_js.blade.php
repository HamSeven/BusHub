<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {
        // Add location
        $(document).on('click', '.add_location', function (e) {
            e.preventDefault();

            let name = $('#name').val();
            let price = $('#price').val();

            // Clear previous error messages
            $('.errMsgContainer').html('');

            $.ajax({
                url: "{{ route('admin.add.location') }}",
                method: 'POST',
                data: {
                    name: name,
                    price: price,
                },
                success: function (res) {
                    // Display success message
                    alert(res.success);
                    $('#addModal').modal('hide'); // Close the modal
                    $('#addLocationForm')[0].reset(); // Reset the form

                    // Fetch updated locations and update the table
                    fetchLocations();
                },
                error: function (err) {
                    let error = err.responseJSON;
                    $.each(error.errors, function (index, value) {
                        $('.errMsgContainer').append(
                            '<span class="text-danger">' + value + '</span><br>'
                        );
                    });
                }
            });
        });

        // Edit product (this is the correct placement)
        $(document).on('click', '.update_location_form', function() {
            let id = $(this).data('id');
            let name = $(this).data('name');
            let price = $(this).data('price');

            $('#up_id').val(id);
            $('#up_name').val(name);
            $('#up_price').val(price);
        });

        //update product data

        $(document).on('click', '.update_location', function (e) {
    e.preventDefault();

    let up_id = $('#up_id').val();
    let up_name = $('#up_name').val();
    let up_price = $('#up_price').val();

    // Clear previous error messages
    $('.errMsgContainer').html('');

    $.ajax({
        url: "{{ route('admin.update.location') }}",  // Ensure this route is correct
        method: 'POST',
        data: {
            up_id: up_id,
            up_name: up_name,
            up_price: up_price,
        },
        success: function (res) {
            // Display success message
            alert(res.success);
            $('#updateModal').modal('hide'); // Close the modal
            $('#updateLocationForm')[0].reset(); // Reset the form

            // Fetch updated locations and update the table
            fetchLocations();
        },
        error: function (err) {
            let error = err.responseJSON;
            $.each(error.errors, function (index, value) {
                $('.errMsgContainer').append(
                    '<span class="text-danger">' + value + '</span><br>'
                );
            });
        }
    });
});

//delete data
$(document).on('click', '.delete_location', function (e) {
    e.preventDefault();

    let location_id = $(this).data('id'); // Correct variable name
    if (confirm('Are you sure you want to delete this location?')) {
        $.ajax({
            url: "{{ route('admin.delete.location') }}",
            method: 'POST',
            data: { location_id: location_id },
            success: function (res) {
                alert(res.message);
                fetchLocations(); // Refresh the table
            },
            error: function (err) {
                alert('Error deleting location: ' + (err.responseJSON?.message || 'Unknown error'));
            }
        });
    }
});


        // Function to fetch and update the locations table
        function fetchLocations() {
            $.ajax({
                url: "{{ route('admin.location') }}", // Endpoint to fetch updated locations
                method: 'GET',
                success: function (data) {
                    // Update the table body with the fetched data
                    $('tbody').html(data);
                }
            });
        }
    });
</script>
