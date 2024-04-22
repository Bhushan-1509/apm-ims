<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form with Dynamic Fields</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gray-100">
    <x-partials.navbar/>
    <div class="container mx-auto py-8">
        <div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
            @if ($errors->any())
                <div class="bg-red-100 mb-3 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <ul class="">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2 class="text-xl font-semibold mb-6">Specify item details</h2>
            <!-- Form -->
            <form id="item-form" method="post" action="{{ route('item-type.store') }}">
                @csrf
                <!-- Item Type Input Field -->
                <div class="mb-4">
                    <label for="item-type" class="block text-gray-700 font-semibold mb-2">Item Type</label>
                    <input type="text" id="item-type" name="item_type"
                        class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                        placeholder="Enter item type">
                </div>
                <input type="hidden" name="count" value="1" id="counter">
                <!-- Attribute Fields -->
                <div id="attribute-container">
                    <div class="mb-4 flex flex-wrap">
                        <div class="w-full md:w-1/2 pr-2">
                            <label for="attribute-name" class="block text-gray-700 font-semibold mb-2">Attribute Name</label>
                            <input type="text" name="attribute_1"
                                class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                                placeholder="Enter attribute name">
                        </div>

                    </div>
                </div>
                <!-- Add Attribute Button -->
                <div>
                <button type="button" id="add-attribute-btn"
                        class="text-sm text-blue-500 mb-2 block md:inline-block">Add Another Attribute</button></div>


                <!-- Submit Button -->
               <div class="container mt-2">
                   <button type="submit"
                           class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 w-full md:w-auto">Submit</button>
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
        // JavaScript to handle adding another attribute field
        document.getElementById("add-attribute-btn").addEventListener("click", function () {
            let i = parseInt(document.getElementById('counter').value);
            i = i + 1;
            console.log(i);
            const attributeContainer = document.getElementById("attribute-container");
            const newAttributeField = document.createElement("div");
            newAttributeField.className = "mb-4 flex flex-wrap";
            newAttributeField.innerHTML = `
                <div class="w-full md:w-1/2 pr-2">
                    <label for="attribute-name" class="block text-gray-700 font-semibold mb-2">Attribute Name</label>
                    <input type="text" name="attribute_${i}"class="form-input w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter attribute name" required>
                    <button type="button" class="remove-attribute-btn text-sm text-red-500 mt-2">Remove Attribute</button>
                </div>`;
            console.log(newAttributeField.innerHTML);
            attributeContainer.appendChild(newAttributeField);
            document.getElementById('counter').value = i.toString();


            // Add event listener to new remove button
            const removeButton = newAttributeField.querySelector(".remove-attribute-btn");
            removeButton.addEventListener("click", function () {
                attributeContainer.removeChild(newAttributeField);
            });
        });
        document.getElementById("attribute-container").addEventListener("click", function (event) {
            if (event.target.classList.contains("remove-attribute-btn")) {
                const attributeField = event.target.closest(".flex");
                attributeField.remove();
            }
        });

    </script>


</body>

</html>
