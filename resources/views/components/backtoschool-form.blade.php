<section>
    <section class="px-0 py-2 mx-auto flex flex-col items-center justify-center min-h-[15vh] bg-[#f7f7f7] ">
        <div id="/backtoschool/#register-form"></div>
        <h2 class="text-2xl font-semibold text-center text-gray-800 light:text-dark mb-6">
            Register for Back to School Tuition <br> (Summer Term 2025)
        </h2>

        <main class="max-w-xl w-full p-6 bg-white rounded-md shadow-md dark:bg-gray-800 dark:text-gray-300">


            @if (session('success'))
                <div class="bg-green-200 border-green-500 text-green-700 p-3 rounded-md mb-4" role="alert">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(() => {
                        window.location.href = '/backtoschool/packages';
                    }, 3000);
                </script>
            @endif

            <form method="POST" action="{{ route('tuition.register') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Your Full
                        Name:</label>
                    <input type="text" id="name" name="name" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <div>
                    <label for="email" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Your
                        Email
                        Address:</label>
                    <input type="email" id="email" name="email" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <div>
                    <label for="phone" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Your
                        Phone
                        Number:</label>
                    <input type="text" id="phone" name="phone" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <hr class="border-gray-400 dark:border-gray-600 my-4">

                <div>
                    <label for="child_name"
                        class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Child’s
                        Full Name:</label>
                    <input type="text" id="child_name" name="child_name" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <div>
                    <label for="stage" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Key
                        Stage or
                        Exam:</label>
                    <select id="stage" name="stage" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <option value="">-- Select Stage --</option>
                        <option value="KS2">KS1</option>
                        <option value="KS2">KS2</option>
                        <option value="KS3">KS3</option>
                        <option value="11+">11+</option>
                        <option value="GCSE">GCSE</option>
                    </select>
                </div>

                <div>
                    <label for="year_group" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Year
                        Group:</label>
                    <input type="text" id="year_group" name="year_group" placeholder="e.g. Year 4, Year 7" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <div>
                    <label for="child_age" class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2">Child’s
                        Age:</label>
                    <input type="number" id="child_age" name="child_age" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Register Now
                </button>
            </form>
        </main>
    </section>
</section>
