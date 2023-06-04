<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="School Settings" />

    <AdminLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">School Settings</h2>
        </template>

        <div class="py-12">
            <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="grid gap-6 mb-6 md:grid-cols-3">
                            <div>
                                <form>
                                <label for="large" class="block mb-2 text-base font-medium text-gray-900 dark:text-dark">Current School Year</label>
                                    <input type="text" id="disabled-input" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="2022-2023" disabled>
                                </form>
                            </div>
                            <div>
                                <label for="large" class="block mb-2 text-base font-medium text-gray-900 dark:text-dark">Current School Year</label>
                                <input type="text" id="disabled-input" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="2022-2023" disabled>
                            </div>
                            <div>
                                <label for="large" class="block mb-2 text-base font-medium text-gray-900 dark:text-dark">Current School Year</label>
                                <input type="text" id="disabled-input" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="2022-2023" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
