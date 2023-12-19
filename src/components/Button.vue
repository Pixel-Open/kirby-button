<template>
    <div class="button-container">
        <a :style="{background: `${content.bg_color}`}" class="button-link" style="" @click="open">
            <p :style="{color: `${content.text_color}`}" class="button-content">{{ content.name }}</p>
        </a>
    </div>
</template>
  
<script>
</script>

<style>
    .button-link {
        min-height: 42px;
        border-radius: 25px;
        border: 0;
        font-weight: bold;
        font-family: "Raleway", sans-serif;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .button-content {
        flex: 1;
        line-height: 1.5em;
        padding: 0.75em 2em;
    }
</style>