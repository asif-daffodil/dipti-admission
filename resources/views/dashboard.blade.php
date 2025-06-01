<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table id="leads-table" class="display min-w-full">
                            <thead>
                                <tr>
                                    <th>Select</th>
                                    <th>Fullname</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            $('#leads-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                dom: 'Blfrtip',
                buttons: [{
                        extend: 'copy',
                        title: 'Leads Export',
                        filename: 'dipti_leads'
                    },
                    {
                        extend: 'csv',
                        title: 'Leads Export',
                        filename: 'dipti_leads'
                    },
                    {
                        extend: 'excel',
                        title: 'Leads Export',
                        filename: 'dipti_leads'
                    },
                    {
                        extend: 'pdf',
                        title: 'Leads Export',
                        filename: 'dipti_leads'
                    },
                    {
                        extend: 'print',
                        title: 'Leads Export'
                    },
                    {
                        text: 'Select All',
                        action: function(e, dt, node, config) {
                            dt.rows().select();
                        }
                    },
                    {
                        text: 'Deselect All',
                        action: function(e, dt, node, config) {
                            dt.rows().deselect();
                        }
                    },
                    {
                        text: 'Delete Selected',
                        action: function(e, dt, node, config) {
                            var selectedRows = dt.rows({
                                selected: true
                            }).data();
                            if (selectedRows.length > 0) {
                                if (confirm(
                                    'Are you sure you want to delete the selected leads?')) {
                                    var ids = [];
                                    for (var i = 0; i < selectedRows.length; i++) {
                                        ids.push(selectedRows[i].id);
                                    }

                                    $.ajax({
                                        url: '{{ route('leads.destroySelected') }}',
                                        type: 'POST',
                                        data: {
                                            _token: '{{ csrf_token() }}',
                                            ids: ids
                                        },
                                        success: function(response) {
                                            dt.rows({
                                                selected: true
                                            }).remove().draw();
                                            alert(
                                                'Selected leads deleted successfully.');
                                        },
                                        error: function(xhr, status, error) {
                                            alert('Error deleting selected leads: ' +
                                                error);
                                        }
                                    });
                                }
                            } else {
                                alert('No leads selected for deletion.');
                            }
                        }
                    }
                ],
                // custom buttons
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"]
                ],
                select: {
                    style: 'multi',
                },
                order: [
                    [0, 'desc']
                ],
                ajax: '{{ route('leads.index') }}',
                columns: [{
                        data: 'select',
                        name: 'select',
                        orderable: false,
                        searchable: false,
                        className: 'select-checkbox',
                        defaultContent: ''
                    },
                    {
                        data: 'fullname',
                        name: 'fullname'
                    },
                    {
                        data: 'mobile',
                        name: 'mobile'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'course_name',
                        name: 'course_name'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                ]
            });
        });
    </script>
</x-app-layout>
