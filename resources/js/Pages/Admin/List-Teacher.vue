<script setup>

defineProps(['teacher']);

</script>

<template>
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ teacher.name.toUpperCase() }}
        </th>
        <td class="px-6 py-4">
            {{ teacher.email.toLowerCase() }}
        </td>
        <td class="px-6 py-4">
            {{ teacher.position }}
        </td>
        <td class="px-6 py-4">
            {{ teacher.role === 2 ? "Teacher" : "Admin" }}
        </td>
        <td class="px-6 py-4">
            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Change Password</a>
        </td>
    </tr>
</template>  