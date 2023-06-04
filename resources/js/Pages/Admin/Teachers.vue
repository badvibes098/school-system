<script setup>

import AdminLayout from '@/Layouts/AdminLayout.vue';
import GreenButton from '@/Components/GreenButton.vue';
import { Head, useForm } from '@inertiajs/vue3';

import ListTeacher from './List-Teacher.vue';
import Pagination from '@/Components/Pagination.vue';

defineProps({
    teachers: Object,
});
const getInitialFormData = () => ({ 
  keyword: "", 
});

const form = useForm(getInitialFormData());

const submit = () => {
    form.post(route('teacher'), {
    });
};
</script>



<template>
    <Head title="Teachers" />

    <AdminLayout>
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
                        <!--search-->
                        <form class="flex items-center" @submit.prevent="submit">   
                          <label for="simple-search" class="sr-only">Search</label>
                          <div class="relative w-full">
                              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                              </div>
                              <input type="text" 
                                      v-model="form.keyword"  
                                      id="simple-search" 
                                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                      placeholder="Search Name" 
                                      required>
                          </div>
                          <button type="submit" 
                                  class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                  :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                                  >
                              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                              <span class="sr-only">Search</span>
                          </button>
                      </form>
                      <!--end search-->
                    <br/>
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
                                      v-for="teacher in teachers"
                                      :key="teacher.id"
                                      :teacher="teacher"
                                    /> 
                                  </tbody>
                                </table>
                                <!--<Pagination class="mt-6" :links="teachers.links" />-->
                                
                             </div>
                        <!-- table -->  
                        
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
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


