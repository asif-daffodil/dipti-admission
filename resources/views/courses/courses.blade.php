<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>

           @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 shadow rounded-lg overflow-hidden" id="courses-table">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider text-2xl">SN</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider text-2xl">Title</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider text-2xl">Action</th>
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
            $('#courses-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: '{{ route('courses.index') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'title', name: 'title' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                dom: 'frtip',
            });
        });
    </script>
</x-app-layout>
