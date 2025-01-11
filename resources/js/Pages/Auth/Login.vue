<script setup>
import { useForm } from '@inertiajs/vue3';
import TextInput from '../../Components/TextInput.vue';

const form = useForm({
    email: null,
    password: null,
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onError: () => form.reset('password', 'remember')
    });
};
</script>

<template>
    <Head title="| Login" />

    <h1 class="title">Login to your account</h1>

    <div class="w-2/4 mx-auto">
        <form @submit.prevent="submit">
            <TextInput name="Email" v-model="form.email" :message="form.errors.email" />
            <TextInput name="Password" type="password" v-model="form.password" :message="form.errors.password" />

            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-2">
                    <input type="checkbox" v-model="form.remember" id="remember" />
                    <label for="remember">Remember me</label>
                </div>

                <p class="text-slate-600">Need an account? <Link :href="route('register')" class="text-link">Register</Link></p>
            </div>

            <div>
                <button class="primary-btn" :disabled="form.processing">Login</button>
            </div>
        </form>
    </div>
</template>