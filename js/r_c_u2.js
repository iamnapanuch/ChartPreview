 $(document).ready(function() {

                            $('.editbtn2').on('click', function() {

                                $('#editmodal').modal('show');

                                $tr = $(this).closest('tr');

                                var data = $tr.children("td").map(function() {
                                    return $(this).text();
                                }).get();

                                console.log(data);
                                $('#reques_id').val(data[0]);
                            });
                        });