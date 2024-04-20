<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<x-partials.navbar/>
<body class="bg-gray-100">
<div class="container mx-auto py-8">
    <div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
        <h2 class="text-xl font-semibold mb-6">Company Information</h2>
        <!-- Form -->
        <form id="company-form">
            <!-- Company Name Input Field -->
            <div class="mb-4">
                <label for="company-name" class="block text-gray-700 font-semibold mb-2">Company Name</label>
                <input type="text" id="company-name" name="company-name"
                       class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                       placeholder="Enter company name">
            </div>
            <!-- Item Name and Rate Input Fields -->
            <div id="item-container">
                <div class="mb-4 flex flex-wrap">
                    <div class="w-full md:w-1/2 pr-2">
                        <label for="item-name" class="block text-gray-700 font-semibold mb-2">Item Name</label>
                        <input type="text" name="item-name[]"
                               class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                               placeholder="Enter item name">
                    </div>
                    <div class="w-full md:w-1/2 pl-2">
                        <label for="item-rate" class="block text-gray-700 font-semibold mb-2">Rate</label>
                        <input type="text" name="item-rate[]"
                               class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                               placeholder="Enter item rate">
                    </div>
                </div>
            </div>
            <button type="button" id="add-item-btn"
                    class="text-sm text-blue-500 mb-4 block md:inline-block">Add Another Item</button>
            <!-- Finish Button -->
           <div class="container">
               <button type="submit"
                       class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 w-full md:w-auto">Finish</button>
           </div>
        </form>
    </div>
</div>

<script>
    document.getElementById("add-item-btn").addEventListener("click", function () {
        const itemContainer = document.getElementById("item-container");
        const newItemField = document.createElement("div");
        newItemField.className = "mb-4 flex flex-wrap";
        newItemField.innerHTML = `
                <div class="w-full md:w-1/2 pr-2">
                    <label for="item-name" class="block text-gray-700 font-semibold mb-2">Item Name</label>
                    <input type="text" name="item-name[]" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter item name">
                </div>
                <div class="w-full md:w-1/2 pl-2">
                    <label for="item-rate" class="block text-gray-700 font-semibold mb-2">Rate</label>
                    <input type="text" name="item-rate[]" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter item rate">
                </div>
            `;
        itemContainer.appendChild(newItemField);
    });
</script>
</body>

</html>
