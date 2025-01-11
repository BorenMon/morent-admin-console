<template>
  <header class="bg-indigo-500 text-white">
    <nav class="flex items-center justify-between p-4 max-w-screen-lg mx-auto">
      <h1>{{ $page.props.auth.user }}</h1>
      <div class="space-x-6">
        <Link href="/">Home</Link>
        <Link href="/about">About</Link>
        <Link href="/contact">Contact</Link>
      </div>
    </nav>
  </header>

  <main class="p-4">
    <slot />
  </main>
</template>