<?php include 'header.php'; ?>

<div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden md:max-w-lg mb-8">
    <div class="md:flex">
        <div class="w-full px-6 py-6 font-sans">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-800">Add New Subject</h2>
                <a href="index.php" class="text-gray-600 hover:text-gray-800 text-sm">Cancel</a>
            </div>
            
            <form action="index.php?action=store" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="subject_code">
                        Subject Code
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subject_code" name="subject_code" type="text" placeholder="e.g. IT101" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="e.g. Intro to Programming" required>
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="student">
                        Student Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="student" name="student" type="email" placeholder="e.g. student@apc.edu.ph" required>
                </div>
                
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="grade">
                        Grade
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="grade" name="grade" type="number" step="0.01" min="1.00" max="5.00" placeholder="e.g. 1.25" required>
                </div>
                
                <div class="flex items-center justify-end">
                    <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Save Subject
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
