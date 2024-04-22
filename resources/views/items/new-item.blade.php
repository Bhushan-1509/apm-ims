<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gray-100">
<x-partials.navbar/>
<div class="container mx-auto py-8">
    <div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
        <h2 class="text-xl font-semibold mb-6">Add Items</h2>
        <div id="item-options" style="display: none;">
            @foreach($item_types as $item)
                <option value="{{ $item->id }}">{{ $item->item_type }}</option>
            @endforeach
        </div>

        <form id="company-form" method="post" action="{{ route('items.store') }}">
            <!-- Company Name Dropdown Field -->
            @csrf
            <div class="mb-4">
                <label for="company-name" class="block text-gray-700 font-semibold mb-2">Company Name</label>
                <select id="company-name" name="company_id"
                        class="form-select w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Item Name, Type, and Rate Input Fields -->
            <div id="item-container">
                <input type="hidden" id="counter" value="1">
                <div class="mb-4 flex flex-wrap">
                    <div class="w-full md:w-1/3 pr-2">
                        <label for="item-name" class="block text-gray-700 font-semibold mb-2">Item Name</label>
                        <input type="text" name="item_name_1"
                               class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                               placeholder="Enter item name" required>
                    </div>
                    <div class="w-full md:w-1/3 pr-2">
                        <label for="item-type" class="block text-gray-700 font-semibold mb-2">Item Type</label>
                        <select name="item_type_1"
                                class="form-select w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                            @foreach($item_types as $item)
                                <option value="{{ $item->id }}">{{ $item->item_type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full md:w-1/3 pl-2">
                        <label for="item-rate" class="block text-gray-700 font-semibold mb-2">Rate</label>
                        <input type="text" name="item_rate_1"
                               class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                               placeholder="Enter item rate" required>
                    </div>
                </div>
            </div>
            <button type="button" id="add-item-btn"
                    class="text-sm text-blue-500 mb-2 mr-4 block md:inline-block">Add Another Item</button>
            <button type="button" id="remove-item-btn"
                    class="text-sm text-red-500 mb-4 block md:inline-block">Remove Item</button>
            <!-- Finish Button -->
            <div class="container">
                <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 w-full md:w-auto">Finish</button>
            </div>
        </form>
    </div>
</div>

@if($redirect)
    @if ($success)
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ $message }}', // Enclosed in single quotes
            });
        </script>
    @endif
    @if (!$success)
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ $message }}', // Enclosed in single quotes
            });
        </script>
    @endif
@endif

<script>
    document.getElementById("add-item-btn").addEventListener("click", function () {
        const itemContainer = document.getElementById("item-container");
        const newItemField = document.createElement("div");
        let i = parseInt(document.getElementById('counter').value);
        i++;
        document.getElementById('counter').value = i.toString();
        newItemField.className = "mb-4 flex flex-wrap";
        newItemField.innerHTML = `
                <div class="w-full md:w-1/3 pr-2">
                    <label for="item-name" class="block text-gray-700 font-semibold mb-2">Item Name</label>
                    <input type="text" name="item_name_${i}" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter item name" required>
                </div>
                <div class="w-full md:w-1/3 pr-2">
                    <label for="item-type" class="block text-gray-700 font-semibold mb-2">Item Type</label>
                    <select name="item_type_${i}" class="form-select w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" onmousedown="this.innerHTML=document.getElementById('item-options').innerHTML" required>
                    </select>
                </div>
                <div class="w-full md:w-1/3 pl-2">
                    <label for="item-rate" class="block text-gray-700 font-semibold mb-2">Rate</label>
                    <input type="text" name="item_rate_${i}" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter item rate" required>
                </div>
            `;
        itemContainer.appendChild(newItemField);
    });

    document.getElementById("remove-item-btn").addEventListener("click", function () {
        const itemContainer = document.getElementById("item-container");
        const items = itemContainer.getElementsByClassName("flex-wrap");
        if (items.length > 1) {
            itemContainer.removeChild(items[items.length - 1]);
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You cannot remove all items.',
            });

        }
    });
</script>
</body>

</html>
