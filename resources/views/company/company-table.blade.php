<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-gray-100">
    <x-partials.navbar/>
    <br>
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold mb-4">Company List</h1>
        <form id="searchForm">
            <div class="flex items-center mb-4">
                <input type="text" id="searchInput" name="search" class="form-input w-full px-4 py-2 border rounded-md mr-2 focus:outline-none focus:border-blue-500" placeholder="Search company...">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Search</button>
                <button type="reset" id="reset" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 ml-2">Reset</button>
            </div>
        </form>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sr No.</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company Type</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edit</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @if(session('edited'))
                @foreach($companies as $company)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loop->index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $company->company_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $company->company_type }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $company->address }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <input type="hidden" name="company_id_edit" value="{{ $company->id }}">
                            <a type="button" class="btn btn-danger" href="{{ route('company.edit', $company->id) }}" data-bs-toggle="modal" data-bs-target="#queryDeleteModal">
                                <i class="fa-solid fa-pen-nib"></i>
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <form action="{{ route('company.deleteCompanyInstance', $company->id) }}" method="post" id="deleteForm_{{ $company->id }}">
                                @csrf
                                <input type="hidden" name="company_id" value="{{ $company->id }}" >
                                <button type="submit"  class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#queryDeleteModal">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            @endif
            @if(!session('edited'))
                @foreach($companies as $company)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loop->index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $company->company_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $company->company_type }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $company->address }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <input type="hidden" name="company_id_edit" value="{{ $company->id }}">
                            <a type="button" class="btn btn-danger" href="{{ route('company.edit', $company->id) }}" data-bs-toggle="modal" data-bs-target="#queryDeleteModal">
                                <i class="fa-solid fa-pen-nib"></i>
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <form action="{{ route('company.deleteCompanyInstance', $company->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="company_id" value="{{ $company->id }}">
                                {{--                            @method('DELETE')--}}
                                <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#queryDeleteModal"  onclick="confirmDelete({{ $company->id }})">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    @if(session('redirect'))
       @if (session('success'))
           <script>
               Swal.fire({
                   icon: 'success',
                   title: 'Success',
                   text: '{{ session('message') }}',
               });
           </script>
       @endif
       @if (!session('success'))
           <script>
               Swal.fire({
                   icon: 'error',
                   title: 'Error',
                   text: '{{ session('message') }}',
               });
           </script>
       @endif
    @endif
    <script>
        document.getElementById('reset').addEventListener('click', function(event) {
            event.preventDefault();
            let currentUrl = window.location.href;

            if (currentUrl.indexOf('?') !== -1) {
                let baseUrl = currentUrl.split('?')[0];
                window.location.href = baseUrl;
            }

        });
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm_' + id).submit();
                }
    });
}
    </script>
</body>
</html>
