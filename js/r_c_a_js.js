type = "text/javascript";
charset = "utf-8";
                        $(document).ready(function() {
                            var t = $('#dataTables_filter').DataTable({
                                "oLanguage": {
                                    "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                                    "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                                    "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                                    "sSearch": "ค้นหา :",
                                    "sColumnDefs": "วัน เดือน ปี,ชั่วโมง:นาที:วินาที",
                                    "oPaginate": {
                                        "sFirst": "หน้าแรก",
                                        "sPrevious": "ก่อนหน้า",
                                        "sNext": "ถัดไป",
                                        "sLast": "หน้าสุดท้าย"
                                    },
                                },
                                columnDefs: [{
                                    targets: 7,
                                    render: function(data) {
                                        return moment(data).format('DD/MM/YYYY HH:mm');
                                    }





                                }],
                                rowReorder: {
                                    selector: 'td:nth-child(2)'
                                },
                                responsive: true,

                                "order": [
                                    [0, 'desc']
                                ],
                                pageLength: 10,
                                lengthMenu:

                                    [
                                        [10, 25, 50, -1],
                                        [10, 25, 50, 'ทั้งหมด        '],

                                    ],
                            });
                        });
