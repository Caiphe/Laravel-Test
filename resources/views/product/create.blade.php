<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create Product</title>
</head>


    <body class="antialiased" >
        <div style="padding-top: 50px;"
            class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center px-10 sm:pt-0">
            <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                <h2 class="text-large text-white py-7">Add new product</h2>
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf

                    <!-- Email input -->

                    <div class="mb-6">
                        <input type="text" name="name"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput2" placeholder="Product Name" />
                    </div>

                    <div class="mb-6">
                        <input type="number" name="price"
                            class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput2" placeholder="Price" />
                    </div>
                    <!-- Password input -->

                    <div class="text-center lg:text-left">
                        <button type="submit"
                            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                            create
                        </button>
                      
                    </div>
                </form>
            </div>
        </div>

    </body>

</html>
