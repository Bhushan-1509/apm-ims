<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        #loading-indicator {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-100">
<x-partials.navbar/>
<div class="container mx-auto py-8">
    <div class="max-w-3xl mx-auto bg-white rounded p-8 shadow-md">
        <h2 class="text-xl font-semibold mb-6">Purchase Order Information</h2>
        <!-- Form -->
        <form id="order-form" method="post" action="{{ route('store-purchase-order') }}">
            @csrf
            <!-- Company Name Dropdown -->
            <div class="mb-4">
                <label for="company-name" class="block text-gray-700 font-semibold mb-2">Company Name</label>
                <select name="company-name" id="company-name" class="form-select w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    <option value="">Select company name</option>
                    <option value="Company A">Company A</option>
                    <option value="Company B">Company B</option>
                    <option value="Company C">Company C</option>
                </select>
            </div>
            <!-- Order No. Input Field -->
            <div class="mb-4">
                <label for="order-no" class="block text-gray-700 font-semibold mb-2">Order No.</label>
                <input type="text" name="order-no" id="order-no" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Order No.">
            </div>

            <!-- Item Details -->

            <div id="item-details">
                <!-- Item Name, Rate, HSN Code, Size, and Attribute Input Fields -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Item Details</label>
                    <div class="flex flex-wrap">
                        <!-- Item Name Input Field -->
                        <div class="w-full sm:w-1/2 md:w-1/3 mb-4 sm:mb-0 mr-4">
                            <input type="text" name="item-name[]" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Item Name">
                        </div>
                        <!-- Rate Input Field -->
                        <div class="w-full sm:w-1/2 md:w-1/3 mb-4 sm:mb-0">
                            <input type="text" name="rate[]" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Rate">
                        </div>

                        <!-- Attribute Input Fields -->
                        <div class="w-full">
                            <label class="block text-gray-700 font-semibold mb-2">Attributes</label>
                            <div id="attribute-container" class="mb-2"></div>
                            <button type="button" id="add-attribute-btn" class="text-blue-500">Add Attribute</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Item Button -->
            <button type="button" id="add-item-btn" class="text-blue-500">Add Item</button>
            <!-- Finish Button -->
            <button type="submit" id="finishBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mt-4 w-full">Finish</button>

        </form>
    </div>
</div>

<script>

</script>
</body>

</html>
