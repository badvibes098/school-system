<script setup>

defineProps(['teacher']);

</script>
<template>
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{ teacher.name }}
        </th>
        <td class="px-6 py-4">
            {{ teacher.email }}
        </td>
        <td class="px-6 py-4">
            {{ teacher.id }}
        </td>
        <td class="flex items-center px-6 py-4">
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
        </td>
    </tr>
</template>  