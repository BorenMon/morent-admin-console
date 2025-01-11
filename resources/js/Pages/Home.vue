<template>
  <Head :title="`| ${$page.component}`" />
  <h1>{{ $page.props.auth.user }}</h1>
</template>