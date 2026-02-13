<?php include 'header.php'; ?>

<div class="max-w-lg mx-auto bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Subject Details</h2>
        <a href="index.php" class="text-indigo-600 hover:text-indigo-800 text-sm">Back to List</a>
    </div>

    <div class="border-t border-gray-200">
        <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Subject Code</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo htmlspecialchars($this->subject->subject_code); ?></dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Description</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo htmlspecialchars($this->subject->description); ?></dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Student Email</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo htmlspecialchars($this->subject->student); ?></dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Grade</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?php echo $this->subject->grade <= 3.0 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'; ?>">
                        <?php echo htmlspecialchars($this->subject->grade); ?>
                    </span>
                </dd>
            </div>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Created At</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo htmlspecialchars($this->subject->created_at); ?></dd>
            </div>
        </dl>
    </div>

    <div class="mt-6 flex justify-end space-x-3">
        <a href="index.php?action=edit&id=<?php echo $this->subject->id; ?>" class="px-4 py-2 bg-amber-500 text-white rounded hover:bg-amber-600 transition">Edit</a>
        <a href="index.php?action=delete&id=<?php echo $this->subject->id; ?>" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition" onclick="return confirm('Delete this subject?');">Delete</a>
    </div>
</div>

<?php include 'footer.php'; ?>
