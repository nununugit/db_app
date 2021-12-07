<template>
<!-- About section one-->
    <div class="container">
        <div v-for="(teacher, index) in teachers.data" :key="index">
            <section v-if="index%2==1" class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">{{teacher.t_name}}</h2>
                            <p class="lead fw-normal text-muted mb-0">{{teacher.t_content}}</p>
                        </div>
                    </div>
                </div>
            </section>

            <section v-if="index%2==0" class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">{{teacher.t_name}}</h2>
                            <p class="lead fw-normal text-muted mb-0">{{teacher.t_content}}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                teachers: []
            }
        },
        methods: {
            // API経由で全タスクを取得
            getTeachers() {
                axios.get('api/teachers')
                    .then((res) => {
                        this.teachers = res.data;
                        console.log(this.teachers)
                    });
            }
        },
        mounted() {
            this.getTeachers();
        },
        
    }
</script>