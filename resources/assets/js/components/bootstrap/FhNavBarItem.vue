<template>
    <li class="nav-item">
      <a class="nav-link active" href="#">
        <slot></slot>
        <span v-show="current" class="sr-only">(current)</span></a>
    </li>
</template> 

<script>
export default {
}
</script>