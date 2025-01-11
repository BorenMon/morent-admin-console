<script setup>
</script>

<template>
  <header>
    <nav>
      <div class="space-x-6">
        <Link :href="route('home')" class="nav-link">Home</Link>
      </div>
      <div class="space-x-6">
        <Link :href="route('register')" class="nav-link">Register</Link>
      </div>
    </nav>
  </header>

  <main class="p-4">
    <slot />
  </main>
</template>