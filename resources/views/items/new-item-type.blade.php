<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form with Dynamic Fields</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <x-partials.navbar/>
    <div class="container mx-auto py-8">
        <div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
            <h2 class="text-xl font-semibold mb-6">Item Details</h2>
            <!-- Form -->
            <form id="item-form">
                <!-- Item Type Input Field -->
                <div class="mb-4">
                    <label for="item-type" class="block text-gray-700 font-semibold mb-2">Item Type</label>
                    <input type="text" id="item-type" name="item-type"
                        class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Enter item type">
                </div>
                <!-- Attribute Fields -->
                <div id="attribute-container">
                    <div class="mb-4 flex flex-wrap">
                        <div class="w-full md:w-1/2 pr-2">
                            <label for="attribute-name" class="block text-gray-700 font-semibold mb-2">Attribute Name</label>
                            <input type="text" name="attribute-name[]"
                                class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                                placeholder="Enter attribute name">
                        </div>
                    </div>
                </div>
                <!-- Add Attribute Button -->
                <button type="button" id="add-attribute-btn"
                    class="text-sm text-blue-500 mb-4 block md:inline-block">Add Another Attribute</button>
                <!-- Submit Button -->
               <div class="container">
                   <button type="submit"
                           class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 w-full md:w-auto">Submit</button>
               </div>
            </form>
        </div>
    </div>

    <script>
        // JavaScript to handle adding another attribute field
        document.getElementById("add-attribute-btn").addEventListener("click", function () {
            const attributeContainer = document.getElementById("attribute-container");
            const newAttributeField = document.createElement("div");
            newAttributeField.className = "mb-4 flex flex-wrap";
            newAttributeField.innerHTML = `
                <div class="w-full md:w-1/2 pr-2">
                    <label for="attribute-name" class="block text-gray-700 font-semibold mb-2">Attribute Name</label>
                    <input type="text" name="attribute-name[]" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter attribute name">
                </div>
            `;
            attributeContainer.appendChild(newAttributeField);
        });
    </script>
</body>

</html>
