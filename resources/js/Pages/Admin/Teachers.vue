<script setup>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import GreenButton from '@/Components/GreenButton.vue';
import { Head } from '@inertiajs/vue3';

import ListTeacher from './List-Teacher.vue';
import Pagination from '@/Components/Pagination.vue';

defineProps({
    teachers: Object,
});
</script>



<template>
    <Head title="Teachers" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Teachers</h2>
        </template>

        <div class="py-12" >
            <div class="max-w-9xl mx-auto sm:px-6 lg:px-8" >
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                      <div class="p-6 text-gray-900">
                        <GreenButton 
                          id="show-modal" 
                          @click="showModal = true"
                          class=""
                          >Create a Teacher Account
                        </GreenButton>
                       

                        <Teleport to="body">
                            <!-- use the modal component, pass in the prop -->
                            <modal :show="showModal" @close="showModal = false">
                            <template #header>
                                <h3>Create a Teacher Account</h3>
                            </template>
                            </modal>
                        </Teleport>
                        <!-- table -->
                          <div  class="relative overflow-x-auto">
                            
                              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                      <tr>
                                          <th scope="col" class="px-6 py-3">
                                              Name of Teacher
                                          </th>
                                          <th scope="col" class="px-6 py-3">
                                              Email
                                          </th>
                                          <th scope="col" class="px-6 py-3">
                                              Position
                                          </th>
                                          <th scope="col" class="px-6 py-3">
                                              Status
                                          </th>
                                          <th scope="col" class="px-6 py-3">
                                              Actions
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <ListTeacher
                                      v-for="teacher in teachers.data"
                                      :key="teacher.id"
                                      :teacher="teacher"
                                    /> 
                                  </tbody>
                                </table>
                                <Pagination class="mt-6" :links="teachers.links" />
                                
                             </div>
                        <!-- table -->  
                        
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>

</style>

<script>
import Modal from './Modal-teachers.vue';

export default {
  components: {
    Modal
  },
  data() {
    return {
      showModal: false
    }
  }
}

</script>


