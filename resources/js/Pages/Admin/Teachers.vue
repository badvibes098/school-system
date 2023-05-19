<script setup>

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import GreenButton from '@/Components/GreenButton.vue';
import { Head } from '@inertiajs/vue3';

import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net';
//import DataTablesCore from 'datatables.net-bs5';
 
DataTable.use(DataTablesCore);

const sulod = [
  ['Ivan Gaspar', 'ivan@ivan', 1],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],
  ['asaas Gaspar', 'ivan@ivan', 2],

];

  
</script>



<template>
    <Head title="Teachers" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Teachers</h2>
        </template>

        <div class="py-12" >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
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
                        <div class="bg-gray-50">
                          <DataTable :data="sulod" class="display" :options="{ select: true }" ref="table">
                              <thead>
                                  <tr>
                                      <th>Name of Teacher</th>
                                      <th>Email</th>
                                      <th>Manage</th>
                                  </tr>
                              </thead>
                          </DataTable>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>
@import 'datatables.net-bs5';
@import 'datatables.net-dt';
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
