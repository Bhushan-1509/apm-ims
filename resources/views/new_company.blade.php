<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto px-4 py-8">
    <div class="max-w-screen-md mx-auto bg-white rounded p-8 shadow-md">
        <h2 class="text-xl font-semibold mb-6">Company Information</h2>
        <!-- Form -->
        <form id="company-form">
            <!-- Company Name Input Field -->
            <div class="mb-4">
                <label for="company-name" class="block text-gray-700 font-semibold mb-2">Company Name</label>
                <input type="text" id="company-name" name="company-name" class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter company name">
            </div>
            <!-- Address Input Field -->
            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
                <textarea id="address" name="address" rows="3" class="form-textarea w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter address"></textarea>
            </div>
            <!-- Company Type Dropdown -->
            <div class="mb-4">
                <label for="company-type" class="block text-gray-700 font-semibold mb-2">Company Type</label>
                <select id="company-type" name="company-type" class="form-select w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                    <option value="">Select company type</option>
                    <option value="Customer">Customer</option>
                    <option value="Supplier">Supplier</option>
                    <option value="Customer/Supplier">Customer/Supplier</option>
                </select>
            </div>
            <!-- Finish Button -->
            <button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded-md hover:bg-blue-600 w-full sm:w-auto">Finish</button>
        </form>
    </div>
</div>
</body>
</html>
