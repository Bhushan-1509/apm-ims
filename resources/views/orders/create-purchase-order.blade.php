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
        <form id="order-form" method="post" action=".">
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
            <button type="button" id="submit-btn" id="add-item-btn" class="text-blue-500">Add Item</button>
            <!-- Finish Button -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mt-4 w-full">Finish</button>
            <div id="loading-indicator" class="hidden absolute inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
                <svg class="animate-spin h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A8.002 8.002 0 0112 4.472v3.077a5.001 5.001 0 00-2.966 9.308L6 17.292z"></path>
                </svg>
            </div>
        </form>
    </div>
</div>

<script>
    // JavaScript to handle adding attribute fields dynamically
    document.getElementById("add-attribute-btn").addEventListener("click", function () {
        const attributeContainer = document.getElementById("attribute-container");
        const newAttributeRow = document.createElement("div");
        newAttributeRow.className = "flex flex-wrap mb-2";

        const attributeNameInput = document.createElement("input");
        attributeNameInput.type = "text";
        attributeNameInput.name = "attribute-name[]";
        attributeNameInput.className = "form-input w-100 px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500 mb-2 mr-4";
        attributeNameInput.placeholder = "Attribute Name";

        const attributeValueInput = document.createElement("input");
        attributeValueInput.type = "text";
        attributeValueInput.name = "attribute-value[]";
        attributeValueInput.className = "form-input w-100 px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500 mb-2";
        attributeValueInput.placeholder = "Attribute Value";

        newAttributeRow.appendChild(attributeNameInput);
        newAttributeRow.appendChild(attributeValueInput);

        attributeContainer.appendChild(newAttributeRow);
    });

    // JavaScript to handle adding item fields dynamically
    document.getElementById("add-item-btn").addEventListener("click", function () {
        const itemDetails = document.getElementById("item-details");
        const newItemDetails = itemDetails.children[0].cloneNode(true);
        itemDetails.appendChild(newItemDetails);
    });

    document.getElementById('order-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission
        document.getElementById('submit-btn').classList.add('hidden'); // Hide submit button
        document.getElementById('loading-indicator').classList.remove('hidden'); // Show loading indicator
        // Simulate form submission delay (you can replace this with actual form submission logic)
        setTimeout(function () {
            // Enable submit button and hide loading indicator after a delay (you can replace this with actual response handling logic)
            document.getElementById('loading-indicator').classList.add('hidden');
            document.getElementById('submit-btn').classList.remove('hidden');
        }, 2000); // 2000 milliseconds (2 seconds) delay, replace this with actual form submission time
    });
</script>
</body>

</html>
