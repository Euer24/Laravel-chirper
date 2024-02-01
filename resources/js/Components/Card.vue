<template>
    <div class="card">
        <div class="flex justify-end">
            <button @click="makeEditable">:</button>
        </div>
        <img src="images/profile.png" alt="">

        <h1>{{ $page.props.auth.user.name }}</h1>

        <div class="card-bg">
            <p class="mt-8">Status: Aan het Slapen</p>
            <p>leeftijd:100</p>
            <p>Werk:</p>
            <p>Hobbys:</p>
            <slot></slot>
            <p class="mt-8">Bio:</p>
            <div class="bio-container">
                <p class="changeable-text"  ref="editableText" >{{ text }}</p>
            </div>
        </div>
        
    </div>
</template>

<script>
export default {
  data() {
    return {
      text: '....',
    };
  },
  methods: {
    makeEditable() {
      this.$refs.editableText.setAttribute('contenteditable', true);
      this.$refs.editableText.focus();
    },
  },
};
</script>
<style scoped>

h1{
    text-align: center;
}
.card {
    background-color: white;
    border-radius: 6px;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.10), 0 2px 3px 0 rgba(0, 0, 0, 0.12);
    padding: 20px;
    width: 90%;
    height: 100%;
}
.card img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: auto;
    margin-bottom: 10px;
}

.card-bg {
    color: rgb(0, 0, 0);
    margin-bottom: 40px;
}

.bio-container {
    background-color: rgb(240, 235, 235);
    border-radius: 6px;
    padding: 30px;
    margin: 5px;
}

</style>