<template>
    <div>
        <toolbar></toolbar>
        <router-view></router-view>
        <app-footer></app-footer>
    </div>
</template>

<script>
import toolbar from './Toolbar'
import login from './Login/login'
import AppFooter from './AppFooter'
export default {
    components:{toolbar, login, AppFooter}
}
</script>
<style>

</style>