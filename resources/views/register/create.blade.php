<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-4 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl text-gray-700">Register!</h1>
            <form method="POST" action="/register" class="mt-10">

                <div class="mb-6">
                    @csrf


                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="text"
                    name="username"
                    id="username"
                    required
                    >
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5">
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="email"
                    name="email"
                    id="email"
                    required
                    >
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5">
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="password"
                    name="password"
                    id="password"
                    required
                    >

                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-5">
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full rounded"
                    type="text"
                    name="name"
                    id="name"
                    required
                    >




                    <div>
                        <button type="submit" class=" mt-10  bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </main>

    </section>
</x-layout>
