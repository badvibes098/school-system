<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import RedButton from '@/Components/RedButton.vue';
import TextInput from '@/Components/TextInput.vue';

import { Link, useForm } from '@inertiajs/vue3'

const form = useForm({
    name: '',
    email: '',
    password: '',
    role: 2,
    birthdate: '',
    gender: '',
    position: '',
    hs: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset(),
    });
};
</script>


<script>
//Modal script
export default {
  props: {
    show: Boolean
  }
}
</script>

<template>
  <Transition name="modal">
    <div v-if="show" class="modal-mask">
      <div class="modal-container" >
        <div class="modal-header" >
          <slot name="header">default header</slot>
        </div>

        <div class="modal-body">
          <form @submit.prevent="submit">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
              <div>
                  <InputLabel for="name" value="Name" />
                  <TextInput
                      id="name"
                      type="text"
                      class="mt-1 block w-full"
                      v-model="form.name"
                      required
                      autofocus
                      autocomplete="name"
                  />

                  <InputError class="mt-2" :message="form.errors.name" />
              </div>
              <div>
                  <InputLabel for="email" value="Email" />

                  <TextInput
                      id="email"
                      type="email"
                      class="mt-1 block w-full"
                      v-model="form.email"
                      required
                      autocomplete="email"
                  />
                  <InputError class="mt-2" :message="form.errors.email" />
              </div>
              
              <div>
                <InputLabel for="position" value="Position" />
                <select id="position" v-model="form.position" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                  <option value="Teacher 1">Teacher 1</option>
                  <option value="Teacher 2">Teacher 2</option>
                  <option value="Teacher 3">Teacher 3</option>
                  <option value="Master Teacher 1">Master Teacher 1</option>
                  <option value="Master Teacher 2">Master Teacher 2</option>
                  <option value="Master Teacher 3">Master Teacher 3</option>
                  <option value="Special Science Teacher 1">Special Science Teacher 1</option>
                </select>
              </div>

              <div>
                <InputLabel for="gender" value="Gender" />
                <div class="mt-3 block w-full">
                  <input id="default-radio-1" type="radio" value="male" name="default-radio" v-model="form.gender" required>
                  <label for="default-radio-1" class="px-6">Male</label>
                  <input checked id="default-radio-2" type="radio" value="female" name="default-radio" v-model="form.gender" required>
                  <label for="default-radio-2" class="px-6">Female</label>
                </div>
              </div>

              <div>
                <InputLabel for="hs" value="Campus" />
                <select id="hs" v-model="form.hs" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                  <option value="1">JHS</option>
                  <option value="2">SHS</option>
                </select>
              </div>

              <div>
                  <InputLabel for="birthdate" value="Date of Birth" />
                  <TextInput
                      id="birthdate"
                      type="date"
                      class="mt-1 block w-full"
                      v-model="form.birthdate"
                      required
                      autofocus
                      autocomplete="name"
                  />

                  <InputError class="mt-2" :message="form.errors.name" />
              </div>
            
            </div>
            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Teacher Registered. </p>
                </Transition>
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
                <RedButton class="ml-2" 
                  @click="$emit('close')"
                  >
                    Close
                </RedButton>
            </div>
        </form>
        </div>
        
        <!--
        <div class="modal-footer">
          <slot name="footer">
          </slot>
        </div>
        -->
      </div >
    </div>
  </Transition >
</template>


<style>
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  transition: opacity 0.3s ease;
}

.modal-container {
  width: 80%;
  margin: auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.33);
  transition: all 0.3s ease;
}

.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}

.modal-body {
  margin: 20px 0;
}

.modal-default-button {
  float: right;
}

/*
 * The following styles are auto-applied to elements with
 * transition="modal" when their visibility is toggled
 * by Vue.js.
 *
 * You can easily play with the modal transition by editing
 * these styles.
 */

.modal-enter-from {
  opacity: 0;
}

.modal-leave-to {
  opacity: 0;
}

.modal-enter-from .modal-container,
.modal-leave-to .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>